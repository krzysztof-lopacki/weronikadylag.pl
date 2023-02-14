<!DOCTYPE html>
<html lang="en">

<?php
$title = "Corbet | Weronika Dyląg";
include "blocks/head.php";
?>

<body class="home">
  <?php include "blocks/header.php"; ?>

  <main>
    <div class="glide slider">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

          <li class="glide__slide invert">
            <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
              <div class="bg">
                <div>
                  <img src="/content/paintings/self-awareness/self-awareness-slide-vertical.jpg" class="mobile" />
                  <img src="/content/paintings/self-awareness/self-awareness-slide-horizontal.jpg" class="desktop" />
                </div>
              </div>
              <div class="container-fluid py-6">
                <a class="tilt no-link mx-auto" href="/paintings/self-awarness">
                  <h6>100x100cm / 39x39 inches</h6>
                  <h1 class="massive"><span class="d-block">Self Awarness</span></h1>
                </a>
              </div>
            </div>
          </li>

          <li class="glide__slide invert">
            <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
              <div class="bg">
                <div>
                  <img src="/content/paintings/attentive/attentive-slide-vertical.jpg" class="mobile" />
                  <img src="/content/paintings/attentive/attentive-slide-horizontal.jpg" class="desktop" />
                </div>
              </div>
              <div class="container-fluid py-6">
                <a class="tilt no-link mx-auto" href="/paintings/reflection">
                  <h6>100x120cm / 39x47 inches</h6>
                  <h1 class="massive"><span class="d-block">Attentive</span></h1>
                </a>
              </div>
            </div>
          </li>

          <li class="glide__slide invert">
            <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
              <div class="bg">
                <div>
                  <img src="/content/paintings/reef/reef-slide-vertical.jpg" class="mobile" />
                  <img src="/content/paintings/reef/reef-slide-horizontal.jpg" class="desktop" />
                </div>
              </div>
              <div class="container-fluid py-6">
                <a class="tilt no-link mx-auto" href="/paintings/reef">
                  <h6>100x100cm / 39x39 inches</h6>
                  <h1 class="massive"><span class="d-block">Reef</span></h1>
                </a>
              </div>
            </div>
          </li>       
          
          <li class="glide__slide invert">
            <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
              <div class="bg">
                <div>
                  <img src="/content/paintings/june/june-slide-vertical.jpg" class="mobile" />
                  <img src="/content/paintings/june/june-slide-horizontal.jpg" class="desktop" />
                </div>
              </div>
              <div class="container-fluid py-6">
                <a class="tilt no-link mx-auto" href="/paintings/june">
                  <h6>100x100cm / 39x39 inches</h6>
                  <h1 class="massive"><span class="d-block">June</span></h1>
                </a>
              </div>
            </div>
          </li>             

          <li class="glide__slide invert">
            <div class="jumbotron jumbotron-fluid vh-100 d-flex align-items-center">
              <div class="bg">
                <div>
                  <img src="/content/paintings/flow/flow-slide-vertical.jpg" class="mobile" />
                  <img src="/content/paintings/flow/flow-slide-horizontal.jpg" class="desktop" />
                </div>
              </div>
              <div class="container-fluid py-6">
                <a class="tilt no-link mx-auto" href="/paintings/flow">
                  <h6>100x70cm / 39x27,5 inches</h6>
                  <h1 class="massive"><span class="d-block">Flow</span></h1>
                </a>
              </div>
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