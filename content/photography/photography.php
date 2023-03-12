<!DOCTYPE html>
<html lang="en">

<head>
<?php
$title = "Weronika Dyląg | Photography";
include "/blocks/head.php";
?>
</head>

<body>
  <?php include "/blocks/header.php"; ?>

  <main>

    <section>
      <div class="container-fluid py-6">
        <h1 class="semi-massive"><span class="d-block in-left">Landscape photography</span><span class="d-block in-top">Different parts of the world</span></h1>
      </div>

      <div class="photos-container gallery">

        <?php
        // EDIT THIS LIST TO ADD/REMOVE/CHANGE ORDER OF THE PHOTOS
        $photos = [
          ["jordan-1", "Jordan"],
          ["warsaw-1", "Warsaw"],
          ["jordan-2", "Jordan"],
          ["greece-1", "Greece"],
          ["madeira-1", "Madeira"],
          ["madeira-2", "Madeira"],
          ["madeira-3", "Madeira"],
          ["madeira-4", "Madeira"],
          ["madeira-5", "Madeira"]
        ];

        foreach ($photos as $photo) {
        ?>
          <div class="photo">
            <a class="lightbox" href="/content/photography/images/<?= $photo[0] ?>.jpg"><img alt="<?= $photo[1] ?>" src="/content/photography/images/<?= $photo[0] ?>_thumbnail.jpg">
              <div class="caption p-3">
                <div class="title"><?= $photo[1] ?></div>
              </div>
            </a>
          </div>

        <?php
        }
        ?>


      </div>

      <div class="container my-5 py-6">
        <div class="row justify-content-md-center text-center">
          <div class="col-sm-8">
            <h4>More works</h4>
            <p>For more works, please follow the instagram account or check
              <a href="https://www.artsper.com/sg/contemporary-artists/poland/103743/weronica-dylag">Artspare</a> or <a href="https://www.artsy.net/artist/weronika-dylag">Artsy</a>.
            </p>
          </div>
        </div>
      </div>

    </section>
  </main>

  <?php include "/blocks/footer.html"; ?>
</body>

</html>