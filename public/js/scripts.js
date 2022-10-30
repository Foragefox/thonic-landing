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
  hideFeedback(formSuccess);

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
      showFeedback(formSuccess, "We have recorded your email.");
    })
    .catch(error => {
      showFeedback(formError, "There was an error, please try again later.");
    });
}

function submitExchangeFormAjax(event, form) {
  event.preventDefault();
  const formError = form.getElementsByClassName("form-error")[0];
  const formSuccess = form.getElementsByClassName("form-success")[0];
  hideFeedback(formError);
  hideFeedback(formSuccess);

  const action = form.getAttribute("action");
  const data = new FormData(form);

  const email = data.get("email");
  if (!validateEmail(email)) {
    showFeedback(formError, "Please enter a valid email address.");
    return Promise.resolve(false);
  }

  const wallet = data.get("wallet-address");
  if (!wallet) {
    showFeedback(formError, "Please enter a valid wallet address.");
    return Promise.resolve(false);
  }

  const amount = data.get("amount");
  if (amount == 0) {
    showFeedback(formError, "Please enter an amount greater than 0.");
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
      showFeedback(formSuccess, "Your request has been accepted, please await further instructions.");
    })
    .catch(error => {
      showFeedback(formError, "There was an error, please try again later.");
    });
}

function submitProposalFormAjax(event, form) {
  event.preventDefault();
  const formError = form.getElementsByClassName("form-error")[0];
  const formSuccess = form.getElementsByClassName("form-success")[0];
  hideFeedback(formError);
  hideFeedback(formSuccess);

  const action = form.getAttribute("action");
  const data = new FormData(form);

  const first = data.get("firstName");
  if (!first) {
    showFeedback(formError, "Please enter a first name.");
    return Promise.resolve(false);
  }

  const last = data.get("lastName");
  if (!last) {
    showFeedback(formError, "Please enter a last name.");
    return Promise.resolve(false);
  }

  const email = data.get("email");
  if (!validateEmail(email)) {
    showFeedback(formError, "Please enter a valid email address.");
    return Promise.resolve(false);
  }

  const wallet = data.get("walletAddress");
  if (!wallet) {
    showFeedback(formError, "Please enter a wallet address.");
    return Promise.resolve(false);
  }

  const file = data.get("proposalPDF");
  if (!file.name) {
    showFeedback(formError, "Please select a file for upload.");
    return Promise.resolve(false);
  }

  return fetch(action, {
    method: 'POST',
    body: data
  })
    .then(response => {
      if (!response.ok) {
        throw response;
      }
      return response.json();
    })
    .then(body => {
      showFeedback(formSuccess, body.message ?? "Your proposal has been accepted");
      form.reset();
    })
    .catch(error => {
      try {
        error.json().then(body => {
          showFeedback(formError, body.message ?? "There was an error, please try again later.");
        });
      } catch (e) {
        console.log("Error parsing promise");
      }
    });
}

// Add campaign code to forms
var inputs = document.querySelectorAll("form input[name=source]");
var params = (new URL(document.location)).searchParams;
var source = params.get('utm_source');
if (inputs.length && source) {
  inputs.forEach(element => element.value = source);
}
