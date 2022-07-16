window.addEventListener('DOMContentLoaded', event => {
  function navbarShrink() {
    if (!navbarCollapsible) {
      return;
    }
    if (window.scrollY === 0) {
      navbarCollapsible.classList.remove('navbar-white')
    } else {
      navbarCollapsible.classList.add('navbar-white')
    }
  }

  var navbarCollapsible = document.body.querySelector('#mainNav');
  document.addEventListener('scroll', navbarShrink);
  navbarShrink();
});

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
  hideFeedback(formSuccess)

  const action = form.getAttribute("action");
  const data = new FormData(form);
  const email = data.get("email");

  if (!validateEmail(email)) {
    showFeedback(formError, "Please enter a valid email.");
    return Promise.resolve(false);
  }

  return fetch(action, {
    method: 'POST',
    body: new URLSearchParams(data)
  })
    .then(response => {
      return response.json();
    })
    .then(response => {
      showFeedback(formSuccess, "We have recorded your email and will notify you when the presale is available.");
    })
    .catch(error => {
      showFeedback(formError, "There was an error, please try again later.");
    });
}

function submitWhitelistFormAjax(event, form) {
  event.preventDefault();
  const formError = form.getElementsByClassName("form-error")[0];
  const formSuccess = form.getElementsByClassName("form-success")[0];
  hideFeedback(formError);
  hideFeedback(formSuccess)

  const action = form.getAttribute("action");
  const data = new FormData(form);
  const wallet = data.get("wallet-address");

  if (!wallet) {
    showFeedback(formError, "Please enter a valid wallet address.");
    return Promise.resolve(false);
  }

  return fetch(action, {
    method: 'POST',
    body: new URLSearchParams(data)
  })
    .then(response => {
      return response.json();
    })
    .then(response => {
      showFeedback(formSuccess, "Your wallet has been added to the presale whitelist.");
    })
    .catch(error => {
      showFeedback(formError, "There was an error, please try again later.");
    });
}

var inputs = document.querySelectorAll("form input[name=source]");
var params = (new URL(document.location)).searchParams;
var source = params.get('utm_source');
if (inputs.length && source) {
  inputs.forEach(element => element.value = source);
}