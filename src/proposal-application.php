<!DOCTYPE html>
<html lang="en">

<?php include "parts/docHead.php" ?>

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
          <?php include "parts/navigation.php" ?>
        </ul>
      </div>
    </div>
  </nav>

  <section class="section-band bg-gray mt-5">
    <div class="container px-4 px-lg-5">
      <div class="row">
        <div class="col-md-11 col-lg-9 col-xl-8 mx-auto">
          <h1 class="text-navy h3 text-center mb-3">Proposal Application</h1>
          <h5 class="text-center mb-5">If you would like to work with the Thonic team, please submit your proposal here. <strong>All fields are required.</strong></h5>

          <form id="proposal-form" method="POST" action="/api/proposal">
            <div class="mb-4">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" name="firstName" id="firstName" class="form-control">
            </div>
            <div class="mb-4">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" name="lastName" id="lastName" class="form-control">
            </div>

            <div class="mb-4">
              <label for="email" class="form-label">Email</label>
              <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="mb-4">
              <label for="walletAddress" class="form-label">Wallet address (you need to own THONIC tokens to submit a proposal)</label>
              <input type="text" name="walletAddress" id="walletAddress" class="form-control">
            </div>

            <div class="mb-4">
              <label for="proposalPDF" class="form-label">PDF of your proposal</label>
              <input type="file" accept=".pdf" name="proposalPDF" id="proposalPDF" class="form-control">
            </div>

            <div class="mb-4 text-center">
              <input type="submit" class="btn btn-lg btn-primary" id="submit-proposal-form" value="Submit" />
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

  <?php include "parts/footer.php" ?>

  <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', event => {
      const proposalForm = document.getElementById("proposal-form");
      proposalForm.onsubmit = async (event) => {
        const submitButton = document.getElementById("submit-proposal-form");
        submitButton.disabled = true;

        const promise = submitProposalFormAjax(event, proposalForm);
        promise.finally(() => submitButton.disabled = false);
      }
    });
  </script>
</body>

</html>