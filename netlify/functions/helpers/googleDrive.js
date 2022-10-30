const drive = require('@googleapis/drive');
const stream = require('stream');
const { getCredentials } = require('./googleCredentials');


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