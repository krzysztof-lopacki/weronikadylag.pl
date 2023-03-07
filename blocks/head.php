<?php
    $isSandbox = strpos($_SERVER["SERVER_NAME"], "sandbox") !== false;
?>
<head>
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


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php print $title; ?></title>

  <meta property="og:site_name" content="Weronika Dyląg | Artist"/>
  <meta property="og:title" content="Weronika Dyląg | Artist"/>
  <meta property="og:url" content="https://www.weronikadylag.pl"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="Weronika Dyląg is a contemporary abstract painter focused on delivering positive emotions and self-discovery through paintings."/>
  <meta property="og:image" content="https://www.weronikadylag.pl/images/weronika-dylag.jpg" />
  <meta itemprop="name" content="Weronika Dyląg | Artist"/>
  <meta itemprop="url" content="https://www.weronikadylag.pl"/>
  <meta itemprop="description" content="Weronika Dyląg is a contemporary abstract painter focused on delivering positive emotions and self-discovery through paintings."/>
  <meta name="twitter:title" content="Weronika Dyląg | Artist"/>
  <meta name="twitter:url" content="https://www.weronikadylag.pl"/>
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:description" content="Weronika Dyląg is a contemporary abstract painter focused on delivering positive emotions and self-discovery through paintings." />    
  
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

</head>