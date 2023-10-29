const axios = require('axios').default
const { HttpStatus } = require("./helpers/HttpStatus");

const mailChimpAPI = process.env.MAILCHIMP_API_KEY;
const mailChimpListID = process.env.MAILCHIMP_LIST_ID;
const mcRegion = process.env.MAILCHIMP_REGION;

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
    return respond(HttpStatus.BAD_REQUEST, { message: errorMessage });
  }

  const body = new URLSearchParams(event.body);
  if (!body) {
    errorMessage = "No form data supplied";
    console.log(errorMessage);
    return respond(HttpStatus.BAD_REQUEST, errorMessage);
  }

  const email = body.get("email");
  if (!email) {
    errorMessage = "No EMAIL supplied";
    console.log(errorMessage);
    return respond(HttpStatus.BAD_REQUEST, errorMessage);
  }

  const honeyPot = body.get("confirm");
  if (honeyPot) {
    console.log(`HONEY POT --${email}`);
    return respond(HttpStatus.OK, "Saved email");
  }

  if (!mailChimpListID) {
    errorMessage = "No LIST_ID supplied";
    console.log(errorMessage);
    return respond(HttpStatus.INTERNAL_SERVER_ERROR, errorMessage);
  }

  const subscriber = {
    email_address: email,
    status: "subscribed",
    merge_fields: {
      "SOURCE": body.get("source")
    }
  };

  const listTag = body.get("tag");
  if (listTag) {
    subscriber.tags = [listTag];
  }

  console.log("Sending data to mailchimp", JSON.stringify(subscriber));

  try {
    const mcResponse = await axios({
      method: 'post',
      url: `https://${mcRegion}.api.mailchimp.com/3.0/lists/${mailChimpListID}/members`,
      headers: {
        "Authorization": `apikey ${mailChimpAPI}`,
        "Content-Type": "application/json"
      },
      data: subscriber,
    });

    console.log("Mailchimp body: " + JSON.stringify(mcResponse.data));
    console.log("Status Code: " + mcResponse.status);

    return respond(201, "Saved email");

  } catch (error) {
    if (error.response) {
      // The request was made and the server responded with a status code
      // that falls out of the range of 2xx
      console.log(error.response.data);
      console.log(error.response.status);
      console.log(error.response.headers);
      const { status, title } = error.response.data;
      if (status === HttpStatus.BAD_REQUEST && title === "Member Exists") {
        return respond(HttpStatus.OK, "Saved email");
      }
    } else if (error.request) {
      // The request was made but no response was received
      // `error.request` is an instance of http.ClientRequest in node.js
      console.log(error.request);
    } else {
      // Something happened in setting up the request that triggered an Error
      console.log('Error', error.message);
    }
    console.log(error.config);
    return respond(HttpStatus.INTERNAL_SERVER_ERROR, "Sorry, there was an error");
  }
};