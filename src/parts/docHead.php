<?php
$whitepaper = "https://github.com/thonic-finance/whitepaper/raw/master/thonic_whitepaper_v2.pdf";
$pinksalePresale = "https://www.pinksale.finance/launchpad/0x9C9BDC82384C382669a415B03B8b75a437149fC8?chain=BSC";
$pancakeSwap = "https://pancakeswap.finance/swap?outputCurrency=0x41DE98caD918Ad2BF2D9c1e61B53537dbbdB29d8";
$howToBuy = "https://thonic.finance/how-to-buy-our-presale.pdf";
$telegramChat = "https://t.me/thonicf";
$twitter = "https://twitter.com/thonicf";
$reddit = "https://www.reddit.com/r/thonic/";
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="msapplication-TileColor" content="#0e2845">
  <meta name="theme-color" content="#0e2845">

  <?php
  $url = 'https://thonic.finance';
  $title = 'Financial tools to help people invest in the digital market';
  $description = 'Let Thonic do for you what financial analysts do for investment firms: vet alt coins and help you make knowledgeable investment decisions.';
  $image = 'https://thonic.finance/img/thonic-logo.png';
  $imageAlt = 'Thonic logo';
  ?>
  <title><?= $title ?></title>
  <meta name="robots" content="index,follow">
  <meta name="description" content="<?= $description ?>">

  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:site_name" content="Thonic">
  <meta property="og:url" content="<?= $url ?>">
  <meta property="og:description" content="<?= $description ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?= $image ?>">
  <meta property="og:image:alt" content="<?= $imageAlt ?>">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@Thonic_crypto">
  <meta name="twitter:url" content="<?= $url ?>">
  <meta name="twitter:title" content="<?= $title ?>">
  <meta name="twitter:description" content="<?= $description ?>">
  <meta name="twitter:image" content="<?= $image ?>">
  <meta name="twitter:image:alt" content="<?= $imageAlt ?>">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0e2845">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="/css/styles.css" rel="stylesheet" />

  <?php if (!empty($_SERVER["GOOGLE_TAG_MANAGER"])) { ?>
    <!-- Google Tag Manager -->
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', '<?= $_SERVER["GOOGLE_TAG_MANAGER"] ?>');
    </script>
    <!-- End Google Tag Manager -->
  <?php } ?>

  <!-- Font Awesome icons -->
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script defer src="/js/scripts.js" type="text/javascript"></script>
</head>