const gsheets = require("@googleapis/sheets");
const { getCredentials } = require("./googleCredentials");

const getSheets = async () => {
  const auth = new gsheets.auth.GoogleAuth({
    credentials: getCredentials(),
    scopes: [
      "https://www.googleapis.com/auth/drive",
      "https://www.googleapis.com/auth/drive.file",
      "https://www.googleapis.com/auth/spreadsheets",
    ],
  });
  const authClient = await auth.getClient();

  return await gsheets.sheets({
    auth: authClient,
    version: "v4",
  });
};

module.exports.readSpreadsheet = async (spreadsheetId, tabName) => {
  const sheets = await getSheets();

  const res = await sheets.spreadsheets.values.get({
    majorDimension: 'ROWS',
    range: tabName,
    spreadsheetId: spreadsheetId,
    valueRenderOption: 'FORMATTED_VALUE',
  });
  return res.data;
}

module.exports.appendToSpreadsheet = async (spreadsheetId, range, values) => {
  const sheets = await getSheets();

  const resource = {
    range,
    majorDimension: "ROWS",
    values,
  };

  const res = await sheets.spreadsheets.values.append({
    spreadsheetId,
    range,
    valueInputOption: "RAW",
    resource
  });

  return res.data;
};
