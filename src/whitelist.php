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
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
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
          <li class="nav-item d-lg-none"><a class="nav-link" href="#faq">FAQ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Whitelist-->
  <section class="whitelist-section section-band bg-gray" id="whitelist">
    <div class="container px-4 px-lg-5">
      <div class="row">
        <div class="col-md-11 col-lg-9 col-xl-8 mx-auto text-center">
          <h1 class="text-navy h3 mb-5">Get added to the whitelist for our presale.</h2>
            <form class="form-whitelist" name="whitelist" id="whitelist-form" method="POST" action="/api/whitelist">
              <div class="row">
                <div class="col-12 col-md pb-3 pb-md-0">
                  <input class="form-control" type="text" name="wallet-address" placeholder="Enter wallet address..." aria-label="Enter wallet address..." />
                </div>
                <div class="col-12 col-md-auto">
                  <button class="btn btn-primary" type="submit" id="submit-whitelist-form">ADD</button>
                </div>
              </div>
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
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
      const presaleForm = document.getElementById("whitelist-form");
      presaleForm.onsubmit = async (event) => {
        const submitButton = document.getElementById("submit-whitelist-form");
        submitButton.disabled = true;
        const promise = submitWhitelistFormAjax(event, presaleForm);
        promise.finally(() => submitButton.disabled = false);
      }
    });
  </script>
</body>

</html>