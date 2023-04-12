const { appendToSpreadsheet } = require("./helpers/googleSheets");
const { HttpStatus } = require("./helpers/HttpStatus");

function respond(code, body) {
  return {
    statusCode: code,
    body: JSON.stringify(body),
  };
}

module.exports.handler = async (event) => {

  let errorMessage = null;
  if (event.httpMethod != 'POST') {
    errorMessage = "Invalid Http method";
    console.log(errorMessage);
    return respond(400, { message: errorMessage });
  }

  const body = new URLSearchParams(event.body);
  if (!body) {
    errorMessage = "No form data supplied";
    console.log(errorMessage);
    return respond(400, errorMessage);
  }

  const honeyPot = body.get("confirm");
  if (honeyPot) {
    console.log(`HONEY POT --${body.get("subject")}`);
    return respond(200, "Success");
  }

  const subject = body.get('subject');
  const firstName = body.get('firstName');
  const lastName = body.get('lastName');
  const email = body.get('email');
  const message = body.get('message');
  const source = body.get('source');

  if (!subject || !firstName || !lastName || !email || !message) {
    errorMessage = "Missing required field";
    console.log(errorMessage);

    errorMessage = 'subject: '+subject+', firstName: '+firstName+', lastName: '+lastName+', email: '+email+', message: '+message;

    return respond(HttpStatus.BAD_REQUEST, { message: errorMessage });
  }

  try {  
    const result = await appendToSpreadsheet(
      process.env.GOOGLE_DRIVE_PROPOSALS_SHEETS_ID,
      "Sheet1",
      [
        [
          subject,
          firstName,
          lastName,
          email,
          message,
          source,
        ]
      ]
    );

    return respond(HttpStatus.OK, { message: "Your message has been sent, please await further instructions." });
  } catch (error) {
    console.log(error);
    return respond(HttpStatus.INTERNAL_SERVER_ERROR, { message: "Server error" });
  }
}
