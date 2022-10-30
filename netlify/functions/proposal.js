const { parseMultipartForm } = require("./helpers/parseMultipartForm");
const { uploadFile, getPublicUrl } = require("./helpers/googleDrive");
const { appendToSpreadsheet } = require("./helpers/googleSheets");
const { HttpStatus } = require("./helpers/HttpStatus");

function respond(code, body) {
  return {
    statusCode: code,
    body: JSON.stringify(body),
  };
}

module.exports.handler = async (event) => {
  try {
    if (!event.body || !event.isBase64Encoded) {
      return respond(HttpStatus.BAD_REQUEST, { message: "no data" });
    }

    // Attempt to process file and fields sent up in the request using busboy
    const { files, fields } = await parseMultipartForm(event);

    if (fields.confirm) {
      console.log("honey pot");
      return respond(HttpStatus.OK, { message: "Application accepted" });
    }

    const { firstName, lastName, email, walletAddress, source } = fields;
    if (![firstName, lastName, email, walletAddress].every(e => !!e)) {
      errorMessage = "Missing required field";
      console.log(errorMessage);
      return respond(HttpStatus.BAD_REQUEST, { message: errorMessage });
    }

    const file = files[0];
    if (!file || file.contentType != "application/pdf") {
      return respond(HttpStatus.BAD_REQUEST, { message: "No file or invalid file uploaded" });
    }

    console.log(file);

    // Upload to Google Drive
    const uploadedFile = await uploadFile(file.filename, {
      fileContent: file.file,
      mimeType: file.contentType,
      originalFilename: file.filename,
      parents: [process.env.GOOGLE_DRIVE_PROPOSALS_FOLDER_ID],
    });

    if (uploadedFile.status !== HttpStatus.OK) {
      return respond(uploadedFile.status, {
        statusText: uploadedFile.statusText,
      });
    }

    // return the file ID and URL for viewing on the client
    const fileUrl = await getPublicUrl(uploadedFile.data.id);

    const result = await appendToSpreadsheet(
      process.env.GOOGLE_DRIVE_PROPOSALS_SHEETS_ID,
      "Sheet1",
      [
        [firstName, lastName, email, walletAddress, source, fileUrl]
      ]
    );

    return respond(HttpStatus.OK, { message: "Proposal saved" });
  } catch (error) {
    console.log({ error });
    return respond(HttpStatus.INTERNAL_SERVER_ERROR, { error });
  }
}
