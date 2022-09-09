const axios = require('axios').default

const sheetsWebAppUrl = process.env.SHEETS_WEBAPP_URL;

function respond(code, body) {
  return {
    statusCode: code,
    body: JSON.stringify(body),
  };
}

module.exports.handler = async function (event, context) {

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

  const walletAddress = body.get("wallet-address");
  const email = body.get("email");
  if (!walletAddress || !email) {
    errorMessage = "No wallet address or email supplied";
    console.log(errorMessage);
    return respond(400, errorMessage);
  }


  const honeyPot = body.get("confirm");
  if (honeyPot) {
    console.log(`HONEY POT --${walletAddress}`);
    return respond(200, "Success");
  }

  if (!sheetsWebAppUrl) {
    errorMessage = "No WebAppUrl found";
    console.log(errorMessage);
    return respond(500, errorMessage);
  }

  const data = new URLSearchParams();
  data.set("email", email);
  data.set("wallet-address", walletAddress);
  data.set("amount", body.get("amount"));
  data.set("source", body.get("source"));
  console.log("Sending data to webapp", data.toString());

  try {
    const response = await axios({
      method: 'post',
      url: sheetsWebAppUrl,
      data: data,
    });

    console.log("Response body: " + JSON.stringify(response.data));
    console.log("Status Code: " + response.status);

    return respond(201, "Success");
  } catch (error) {
    console.log(error);
    return respond(500, "Sorry, there was an error");
  }
};