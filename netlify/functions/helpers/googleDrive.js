const drive = require('@googleapis/drive');
const stream = require('stream');

function getCredentials() {
  const credentials = {
    type: "service_account",
    project_id: process.env.GOOGLE_SERVICE_ACCOUNT_PROJECT_ID,
    private_key_id: process.env.GOOGLE_SERVICE_ACCOUNT_PRIVATE_KEY_ID,
    private_key: process.env.GOOGLE_SERVICE_ACCOUNT_PRIVATE_KEY.replace(
      /\\n/gm,
      "\n"
    ),
    client_email: process.env.GOOGLE_SERVICE_ACCOUNT_CLIENT_EMAIL,
    client_id: process.env.GOOGLE_SERVICE_ACCOUNT_CLIENT_ID,
    auth_uri: "https://accounts.google.com/o/oauth2/auth",
    token_uri: "https://oauth2.googleapis.com/token",
    auth_provider_x509_cert_url: "https://www.googleapis.com/oauth2/v1/certs",
    client_x509_cert_url: process.env.GOOGLE_SERVICE_ACCOUNT_CLIENT_CERT_URL,
  };

  let errorMessage = "";

  for (const key of Object.keys(credentials)) {
    if (!credentials[key]) {
      errorMessage += `${key} must be defined, but was not.`;
    }
  }

  if (errorMessage.length) {
    throw new Error(errorMessage);
  }

  return credentials;
}

const getDrive = async () => {
  const auth = new drive.auth.GoogleAuth({
    credentials: getCredentials(),
    scopes: ["https://www.googleapis.com/auth/drive.file"],
  });
  const authClient = await auth.getClient();

  return await drive.drive({
    auth: authClient,
    version: "v3",
  });
};

module.exports.uploadFile = async (
  name,
  {
    parents,
    fileContent,
    mimeType,
    originalFilename,
  }
) => {
  const drive = await getDrive();

  // upload file
  drive.files.list()
  const file = await drive.files.create({
    requestBody: {
      name,
      mimeType,
      parents,
      originalFilename,
    },
    media: {
      mimeType,
      body: Buffer.isBuffer(fileContent)
        ? stream.Readable.from(fileContent)
        : fileContent,
    },
  });

  // set permissions
  // await drive.permissions.create({
  //   fileId: file.data.id,
  //   requestBody: {
  //     type: "anyone",
  //     role: "reader",
  //   },
  // });

  return file;
};

module.exports.getPublicUrl = async (fileId) => {
  const drive = await getDrive();

  const file = await drive.files.get({
    fileId,
    fields: "id,webContentLink",
  });

  return file.data.webContentLink;
};

module.exports.listDriveContents = async () => {
  response = await drive.files.list({
    'pageSize': 10,
    'fields': 'files(id, name)',
  });

  console.log(response.data.files);

  return response.data.files;
}