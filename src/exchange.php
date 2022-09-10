<!DOCTYPE html>
<html lang="en">

<?php include "docHead.php" ?>

<body>
  <?php if (!empty($_SERVER["GOOGLE_TAG_MANAGER"])) { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $_SERVER["GOOGLE_TAG_MANAGER"] ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php } ?>

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/img/logo-green.svg" alt="Thonic Logo" class="logo fixed" />
        <img src="/img/logo-black.svg" alt="Thonic Logo" class="logo black" />
        THONIC
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="/#platform">Platform</a></li>
          <li class="nav-item"><a class="nav-link" href="/#token">Token</a></li>
          <li class="nav-item"><a class="nav-link" href="/#team">Team</a></li>
          <li class="nav-item"><a class="nav-link" href="/#presale">Presale</a></li>
          <li class="nav-item"><a class="nav-link" href="/#roadmap">Roadmap</a></li>
          <li class="nav-item d-lg-none"><a class="nav-link" href="/#partners">Partners</a></li>
          <li class="nav-item d-lg-none"><a class="nav-link" href="/#faq">FAQ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Whitelist-->
  <section class="whitelist-section section-band bg-gray mt-5">
    <div class="container px-4 px-lg-5">
      <div class="row">
        <div class="col-md-11 col-lg-9 col-xl-8 mx-auto">
          <h1 class="text-navy h3 text-center">BNB Purchase</h1>
          <div class="lead mb-2 text-center">This is the easiest way to deposit BNB into your wallet. </div>
          <div class="mb-5 text-center">
            We currenlty only support Bank eTransfers. This service free, but transfer fees and slipage between wallets and accounts will be automatically charged. 
            Also note it may take several hours for the BNB to show up in your wallet, and the BNB rate will very based on the time it was transacted.
          </div>

          <form class="form-exchange" name="exchange" id="exchange-form" method="POST" action="/api/exchange">
            <div class="row">
              <div class="col-12 mb-3">
                <label class="form-label" for="email-address">Your email address</label>
                <input id="email-address" class="form-control" type="email" name="email" placeholder="jane@gmail.com" />
              </div>
              <div class="col-12 mb-3">
                <label class="form-label" for="wallet-address">Your wallet address</label>
                <input id="wallet-address" class="form-control" type="text" name="wallet-address" placeholder="0x123456789..." />
              </div>
              <div class="col-12 mb-3">
                <label class="form-label" for="amount">Amount (in CAD) you'd like to purchase to BNB</label>
                <input id="amount" class="form-control" type="number" min="0" name="amount" placeholder="1000" />
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit" id="submit-exchange-form">START</button>
              </div>
            </div>
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="hidden" name="source" tabindex="-1" value="">
              <input type="text" name="confirm" tabindex="-1" value="">
            </div>
            <div class="form-error bg-danger text-white mt-2 py-2 px-2 hide"></div>
            <div class="form-success bg-green mt-2 py-2 px-2 hide"></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="/js/scripts.js" type="text/javascript"></script>
  <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', event => {
      const exchangeForm = document.getElementById("exchange-form");
      exchangeForm.onsubmit = async (event) => {
        const submitButton = document.getElementById("submit-exchange-form");
        submitButton.disabled = true;

        const promise = submitExchangeFormAjax(event, exchangeForm);
        promise.finally(() => submitButton.disabled = false);
      }
    });
  </script>
</body>

</html>