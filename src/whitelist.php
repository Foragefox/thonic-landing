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
          <?php include "navigation.php" ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Whitelist-->
  <section class="whitelist-section section-band bg-gray mt-5" id="whitelist">
    <div class="container px-4 px-lg-5">
      <div class="row">
        <div class="col-md-11 col-lg-9 col-xl-8 mx-auto text-center">
          <h1 class="text-navy h3 mb-5">We are no longer collecting wallet addresses. Stay tuned for the presale launch notification.</h1>
        </div>
      </div>
    </div>
  </section>

  <?php include "footer.php" ?>
</body>

</html>