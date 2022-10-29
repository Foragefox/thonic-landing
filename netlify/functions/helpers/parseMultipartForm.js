const busboy = require('busboy');

module.exports.parseMultipartForm = async (event) => {

  return new Promise((resolve, reject) => {
    const bb = busboy({ headers: event.headers });

    const result = {
      fields: {},
      files: [],
    };

    bb.on("file", (_fieldname, file, info) => {
      const { filename, encoding, mimeType } = info;

      console.log(`Processed file ${filename}`);

      file.on("data", (data) => {
        result.files.push({
          file: data,
          filename,
          encoding,
          mimeType,
        });
      });
    });

    bb.on("field", (fieldName, value) => {
      console.log(`Processed field ${fieldName}: ${value}`);
      result.fields[fieldName] = value;
    });

    bb.on("finish", () => resolve(result));
    bb.on("error", (error) => reject(`Parse error: ${error}`));

    bb.write(event.body, event.isBase64Encoded ? "base64" : "binary");

    bb.end();
  });
};