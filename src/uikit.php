<!DOCTYPE html>
<html lang="en">

<?php include "parts/docHead.php" ?>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/img/logo-green.svg" alt="Thonic Logo" class="logo fixed" />
        <img src="/img/logo-black.svg" alt="Thonic Logo" class="logo black" />
        THONIC
      </a>
    </div>
  </nav>

  <section>
    <div class="container py-4">
      <h4>Typography</h4>
      <div class="row">
        <div class="col">
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          <h4>Heading 4</h4>
          <h5>Heading 5</h5>
          <h6>Heading 6</h6>

          <div class="subtitle">Subtitle</div>
          <div class="subtitle-2">Subtitle 2</div>
        </div>
      </div>
      <div class="row py-4">
        <div class="col">
          <p>Body copy - Lorem ipsum dolor sit amet, <a href="#">Link</a> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p class="body-2">Body 2 copy - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p class="caption">This is a caption</p>
          <p>
            <label>This is a label</label>
          </p>
        </div>
      </div>
    </div>
  </section>

  <style>
    .colors .box {
      min-height: 100px;
      padding: .5rem;
    }
  </style>
  <section class="colors">
    <div class="container">
      <h4>Primary Colors - 60% usage</h4>
      <div class="row g-0 py-4">
        <div class="col-4 d-flex">
          <div class="bg-gray box flex-grow-1">bg-gray</div>
        </div>
        <div class="col-2">
          <div class="bg-gray-brighter box">bg-gray-brighter</div>
          <div class="bg-gray-darker box">bg-gray-darker</div>
        </div>
        <div class="col-4 d-flex">
          <div class="bg-black box flex-grow-1"><span class="text-white">bg-black</span></div>
        </div>
        <div class="col-2">
          <div class="bg-black-brighter-20 box"><span class="text-white">bg-black-brighter-20</span></div>
          <div class="bg-black-brighter box"><span class="text-white">bg-black-brighter</span></div>
        </div>
      </div>
      <h4>Secondary Colors - 30% usage</h4>
      <div class="row g-0 py-4">
        <div class="col-4 d-flex">
          <div class="bg-cyan box flex-grow-1">bg-cyan</div>
        </div>
        <div class="col-2">
          <div class="bg-cyan-brighter box">bg-cyan-brighter</div>
          <div class="bg-cyan-darker box">bg-cyan-darker</div>
        </div>
        <div class="col-4 d-flex">
          <div class="bg-navy box flex-grow-1"><span class="text-white">bg-navy</span></div>
        </div>
        <div class="col-2">
          <div class="bg-navy-brighter-20 box"><span class="text-white">bg-navy-brighter-20</span></div>
          <div class="bg-navy-brighter box"><span class="text-white">bg-navy-brighter</span></div>
        </div>
      </div>
      <h4>Accent Color - 10% usage</h4>
      <div class="row g-0 py-4">
        <div class="col-12 d-flex">
          <div class="bg-green box flex-grow-1">bg-green</div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-4">
      <h4>Buttons</h4>
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-light">Light</button>
          <button type="button" class="btn btn-dark">Dark</button>

          <button type="button" class="btn btn-link">Link</button>
        </div>
      </div>
      <div class="row py-2">
        <div class="col">
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          <button type="button" class="btn btn-outline-info">Info</button>
          <button type="button" class="btn btn-outline-light">Light</button>
          <button type="button" class="btn btn-outline-dark">Dark</button>
        </div>
      </div>
      <div class="row py-2">
        <div class="col">
          <button type="button" class="btn btn-sm btn-primary">btn-sm</button>
          <button type="button" class="btn btn-primary">regular</button>
          <button type="button" class="btn btn-lg btn-primary">btn-lg</button>
          <button type="button" class="btn btn-xl btn-primary">btn-xl</button>
        </div>
      </div>
    </div>
  </section>

  <?php include "parts/footer.php" ?>
</body>

</html>