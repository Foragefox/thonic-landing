const { parseMultipartForm } = require('./helpers/parseMultipartForm');
const { uploadFile, getPublicUrl } = require('./helpers/googleDrive');

module.exports.handler = async (event) => {
  try {
    if (!event.body || !event.isBase64Encoded) {
      return {
        statusCode: 400,
        body: JSON.stringify({
          message: "no data",
        }),
      };
    }

    // Attempt to process file and fields sent up in the request using busboy
    const { files, fields } = await parseMultipartForm(event);

    // Upload to Google Drive
    const file = files[0];

    if (!file) {
      return {
        statusCode: 400,
        body: JSON.stringify({
          message: "no file uploaded",
        }),
      };
    }

    const uploadedFile = await uploadFile(file.filename, {
      fileContent: file.file,
      mimeType: file.contentType,
      originalFilename: file.filename,
      parents: [process.env.GOOGLE_DRIVE_PROPOSALS_FOLDER_ID],
    });

    if (uploadedFile.status !== 200) {
      return {
        statusCode: uploadedFile.status,
        body: JSON.stringify({
          statusText: uploadedFile.statusText,
        }),
      };
    }

    // return the file ID and URL for viewing on the client
    const fileUrl = await getPublicUrl(uploadedFile.data.id);

    return {
      statusCode: 200,
      body: JSON.stringify({
        fileId: uploadedFile.id,
        fileUrl,
      }),
    };
  } catch (error) {
    console.log({ error });
    return {
      statusCode: 400,
      body: JSON.stringify({ error }),
    };
  }
}