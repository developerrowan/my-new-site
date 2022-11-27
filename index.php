<?php 
require_once("includes/config.inc.php");

$pageTitle = 'Home';
$pageDescription = 'Welcome to my website - learn about me and my hobbies!';

require('includes/header.inc.php'); 
?>
<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url(assets/img/Desert.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">My name is Devin Rowan</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Developer, Student, Pet owner"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/me.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                      I am a software developer from Wisconsin, United States.
                    </p>
                    <p class="lead">
                      I currently attend Western Technical College in La Crosse pursuing my AAS in Web & Software Development.
                    </p>
                    <p class="lead">
                      I have over 5 years of amateur experience in software development and am self-taught in this regard.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
  </main><!-- End #main -->
<?php require('includes/footer.inc.php'); ?>