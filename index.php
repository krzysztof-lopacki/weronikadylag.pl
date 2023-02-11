<!DOCTYPE html>
<html lang="en">

<?php
  $title = "Corbet | Weronika Dyląg";
  include "blocks/head.php";
?>

<body>
  <?php include "blocks/header.html"; ?>

  <main>
    <div class="glide slider">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide invert">
            <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
              <div class="bg o-8" style="background-image:url(images/slide2.png)"></div>
              <div class="container-fluid py-6"><a class="tilt no-link mx-auto" href="pride.html">
                  <h6>110x100cm/43,3x43x3 inches</h6>
                  <h1 class="massive pt-2"><span class="d-block">Pride</span></h1>
                </a></div>
            </div>
          </li>
          <li class="glide__slide invert">
            <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
              <div class="bg o-8" style="background-image:url(images/projectnext_innerself.jpg)"></div>
              <div class="container-fluid py-6">
                <a class="tilt no-link mx-auto" href="innerself.html">
                  <h6>100x100cm/39x39 inches</h6>
                  <h1 class="massive"><span class="d-block">Inner self</span></h1>
                </a>
              </div>
            </div>
          </li>
          <li class="glide__slide invert">
            <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
              <div class="bg o-8" style="background-image:url(images/slide3.png)"></div>
              <div class="container-fluid py-6"><a class="tilt no-link mx-auto" href="flow.html">
                  <h6>100x70cm / 39x27,5 inches</h6>
                  <h1 class="massive"><span class="d-block">Flow</span></h1>
                </a></div>
            </div>
          </li>
          <li class="glide__slide invert">
            <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
              <div class="bg o-8" style="background-image:url(images/slide1.png)"></div>
              <div class="container-fluid py-6"><a class="tilt no-link mx-auto" href="cognitive_flexibility.html">
                  <h6>100x70cm / 39x27,5 inches</h6>
                  <h1 class="massive"> <span class="d-block">Cognitive<br>flexibilty</span></h1>
                </a></div>
            </div>
          </li>
        </ul>
      </div>
      <div class="glide__bullets" data-glide-el="controls[nav]">
        <div class="glide__bullet" data-glide-dir="=0">1</div>
        <div class="glide__bullet" data-glide-dir="=1">2</div>
        <div class="glide__bullet" data-glide-dir="=2">3</div>
        <div class="glide__bullet" data-glide-dir="=3">4</div>
        <div class="glide__bullet total">4</div>
      </div>
    </div>
  </main>

  <?php include "blocks/footer.html"; ?>
</body>
</html>