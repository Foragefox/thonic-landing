
function validateEmail(email) {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
}

function showFeedback(element, message) {
  element.innerHTML = message;
  setTimeout(() => {
    element.classList.remove("hide");
    element.classList.add("show");
  }, 100);
}

function hideFeedback(element) {
  element.classList.remove("show");
  element.classList.add("hide");
  element.innerHTML = "";
}

function submitEmailFormAjax(event, form) {
  event.preventDefault();
  const formError = form.getElementsByClassName("form-error")[0];
  const formSuccess = form.getElementsByClassName("form-success")[0];
  hideFeedback(formError);
  hideFeedback(formSuccess);

  const action = form.getAttribute("action");
  const data = new FormData(form);
  const email = data.get("email");

  if (!validateEmail(email)) {
    showFeedback(formError, "Please enter a valid email.");
    return Promise.reject();
  }

  return fetch(action, {
    method: 'POST',
    body: new URLSearchParams(data)
  })
    .then(response => {
      return response.json();
    })
    .then(response => {
      showFeedback(formSuccess, "We have recorded your email.");
    })
    .catch(error => {
      showFeedback(formError, "There was an error, please try again later.");
      return Promise.reject();
    });
}

function submitContactFormAjax(event, form) {
  event.preventDefault();
  const formError = form.getElementsByClassName('form-error')[0];
  const formSuccess = form.getElementsByClassName('form-success')[0];
  hideFeedback(formError);
  hideFeedback(formSuccess);

  const action = form.getAttribute('action');
  const data = new FormData(form);

  const subject = data.get("subject");
  if (!subject) {
    showFeedback(formError, "Please select a subject.");
    return Promise.reject();
  }

  const first = data.get("firstName");
  if (!first) {
    showFeedback(formError, "Please enter a first name.");
    return Promise.reject();
  }

  const last = data.get("lastName");
  if (!last) {
    showFeedback(formError, "Please enter a last name.");
    return Promise.reject();
  }

  const email = data.get("email");
  if (!validateEmail(email)) {
    showFeedback(formError, "Please enter a valid email address.");
    return Promise.reject();
  }

  const message = data.get("message");
  if (!message) {
    showFeedback(formError, "Please enter a message.");
    return Promise.reject();
  }

  return fetch(action, {
    method: 'POST',
    body: new URLSearchParams(data)
  })
    .then(response => {
      if (!response.ok) {
        throw response;
      }
      return response.json();
    })
    .then(body => {
      showFeedback(formSuccess, body.message ?? "Your message has been accepted");
      form.reset();
    })
    .catch(error => {
      error.json()
        .then(body => {
          showFeedback(formError, body.message ?? "There was an error, please try again later.");
        })
        .catch(() => {
          showFeedback(formError, "There was an error, please try again later.");
          console.log("Error parsing promise");
        });

      return Promise.reject();
    });
}

// Add campaign code to forms
var inputs = document.querySelectorAll("form input[name=source]");
var params = (new URL(document.location)).searchParams;
var source = params.get('utm_source');
if (inputs.length && source) {
  inputs.forEach(element => element.value = source);
}
