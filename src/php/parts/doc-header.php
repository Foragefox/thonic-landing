<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0e2845">
<meta name="msapplication-TileColor" content="#0e2845">

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
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" rel="stylesheet">
<link href="/css/styles.css" rel="stylesheet">

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