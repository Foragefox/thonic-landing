const { readSpreadsheet } = require("./helpers/googleSheets");
const { HttpStatus } = require("./helpers/HttpStatus");

function respond(code, body) {
  return {
    statusCode: code,
    body: JSON.stringify(body),
  };
}

const parseSpreadsheet = (values) => {
  const header = values.shift();
  const objects = values.map((postValues, index) => {
    const post = header.reduce((accumulator, column, index) => {
      return {
        ...accumulator,
        [column]: postValues[index]
      };
    }, {});
    return post;
  });
  return objects;
}

module.exports.handler = async (event) => {
  try {

    const result = await readSpreadsheet(
      process.env.GOOGLE_DRIVE_BLOG_SHEETS_ID,
      "Sheet1"
    );
    const blogPosts = parseSpreadsheet(result.values);

    return respond(HttpStatus.OK, blogPosts);
  } catch (error) {
    console.log(error);
    return respond(HttpStatus.INTERNAL_SERVER_ERROR, { message: "Server error" });
  }
}