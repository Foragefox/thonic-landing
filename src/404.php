<!DOCTYPE html>
<html lang="en">

<?php include "docHead.php" ?>
<style>
  html,
  body {
    height: 100%;
  }
</style>

<body class="d-flex flex-column">
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

  <section class="section-band bg-gray mt-5 flex-grow-1">
    <div class="container px-4">
      <div class="row">
        <div class="col-md-11 col-lg-9 col-xl-8 mx-auto text-center">
          <h1 class="text-navy h3 mb-5">404 Not Found</h1>
        </div>
      </div>
    </div>
  </section>
  <?php include "footer.php" ?>
</body>

</html>