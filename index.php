<!DOCTYPE html>
<html lang="en">

<?php
  $title = "Corbet | Weronika Dyląg";
  
  include "blocks/header.php";
?>

<body>
  <header class="fixed-top ">
    <div class="navbar"><a class="navbar-brand" href="index.html"> <img class="default" alt="Weronika Dyląg"
          src="images/logo.svg" style="width: 300px; height: 90px;"><img class="inverted" alt="Weronika Dyląg"
          src="images/logo-white.svg" style="width: 300px; height: 90px; margin-left: -44px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"><span
          class="toggle-label">Menu</span><span class="toggle-label-close">Close</span><span class="toggle-icon"><span
            class="line"></span><span class="line"></span></span></button>
    </div>
    <ul id="nav">
      <li class="nav-item active"><a class="nav-link" href="index.html">home-CC</a></li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
          data-toggle="dropdown">about artist</a>
        <div class="dropdown-menu"><a class="dropdown-item" href="statement.html">artist statement</a><a
            class="dropdown-item" href="bio.html">bio</a><a class="dropdown-item" href="cv.html">artistc cv</a></div>
      </li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
          data-toggle="dropdown">works</a>
        <div class="dropdown-menu"><a class="dropdown-item" href="projects-grid.html">paintings</a><a
            class="dropdown-item" href="projects-grid-photography.html">photography</a></div>
      </li>
      <li class="nav-item"><a class="nav-link" href="blog-grid.html">blog</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.html">contact</a></li>
    </ul>
  </header>
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
  <footer class="fixed-bottom alt-footer">
    <div class="container-fluid p-5">
      <div class="row">
        <div class="col-sm-6 offset-sm-3 copy text-center">2020 &copy; Corbet Weronika Dyląg. All rights reserved</div>
        <div class="col-sm-3 text-right">
          <div class="social"><a class="trigger" href="#">Follow</a>
            <ul class="social-nav">
              <li><a href="https://www.instagram.com/w_dylag/?hl=en">Instagram</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="scripts/main.bundle.js"></script>
</body>

</html>