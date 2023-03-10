<?php
    $isSandbox = strpos($_SERVER["SERVER_NAME"], "sandbox") !== false;

    if (empty($siteDescription)) {
      $siteDescription = "Weronika Dyląg is a contemporary abstract painter focused on delivering positive emotions and self-discovery through paintings.";
    }
?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php print $title; ?></title>
  <meta name="description" content="<?= $siteDescription ?>"/>

  <meta property="og:site_name" content="www.weronikadylag.pl"/>
  <meta property="og:title" content="<?= $title ?>"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="<?= $siteDescription ?>"/>
  <meta property="og:image" content="https://www.weronikadylag.pl/images/weronika-dylag.jpg" />
  <meta property="og:image:type" content="image/jpg" />
  
  <meta name="twitter:title" content="<?= $title ?>"/>
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:description" content="<?= $siteDescription ?>" />    

  <?php if (!$isSandbox) { ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-H4XV92TTDJ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-H4XV92TTDJ');
  </script>
  <?php } ?>

  <script>
    window.addEventListener('pageshow', (event) => {
      if (event.persisted) {
        location.reload();
      }
    });
  </script>
  
  <link href="/css/main.bundle.css" rel="stylesheet" type="text/css">
  <link href="/css/custom.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga&amp;display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#777777">
  <meta name="msapplication-TileColor" content="#999999">
  <meta name="theme-color" content="#ffffff">

  <!-- MailerLite Universal -->
  <script>
    (function(w, d, e, u, f, l, n) {
      w[f] = w[f] || function() {
          (w[f].q = w[f].q || [])
          .push(arguments);
        }, l = d.createElement(e), l.async = 1, l.src = u,
        n = d.getElementsByTagName(e)[0], n.parentNode.insertBefore(l, n);
    })
    (window, document, 'script', 'https://assets.mailerlite.com/js/universal.js', 'ml');
    ml('account', '248453');
  </script>
  <!-- End MailerLite Universal -->
