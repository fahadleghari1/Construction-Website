<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php include('container/links.php'); ?>
  <title>Home | Ledcor Holdings</title>
</head>
<body class="home">
  <?php include('container/preloader.php'); ?>
  <?php include('container/header.php'); ?>

  <div class="main-content">
    <div id="home">
      <section class="owl-carousel hero-slider hero-slider-v2" id="hero-slider-v2">
        <div class="single-slid">
          <div class="bg-img lazy" data-src="img/slider/Banner-1.jpg"></div>
          <div class="slider-overlay"></div>
          <div class="container">
            <div class="hero-text text-center">
              <h1>Welcome to <br>Ledcor Holdings!</h1>
              <h4>We are your ultimate gateway to craft your dream projects with ease.</h4>
              <div class="hero-btn-wrap">
              	<a href="contact.php" class="t-btn hero-btn">I want to discuss a project</a>
              </div>
            </div>
          </div>
        </div><!-- .single-slid -->
        <div class="single-slid">
          <div class="bg-img lazy" data-src="img/slider/Banner-2.jpg"></div>
          <div class="slider-overlay"></div>
          <div class="container">
            <div class="hero-text text-center">
              <h1>Craftsmanship You <br>Can Trust</h1>
              <h4 style="line-height:2;">Are you tired of projection completion delays and longer than expected timelines? <br>Then, it’s time to say good bye to all the slow-paced construction firms and contractors. </h4>
              <div class="hero-btn-wrap">
              	<a href="contact.php" class="t-btn hero-btn">I want to discuss a project</a>
              </div>
            </div>
          </div>
        </div><!-- .single-slid -->
        <div class="single-slid">
          <div class="bg-img lazy" data-src="img/slider/Banner-3.jpg"></div>
          <div class="slider-overlay"></div>
          <div class="container">
            <div class="hero-text text-center">
              <h1>Raising Ontario's Construction Standards</h1>
              <h4>We bring your vision to life with meticulous attention to detail. We ensure your dream projects surpass the highest standards of precision and reliability. Now, what are you waiting for?</h4>
              <div class="hero-btn-wrap">
              	<a href="contact.php" class="t-btn hero-btn">I want to discuss a project</a>
              </div>
            </div>
          </div>
        </div><!-- .single-slid -->
      </section>
    </div>

    <!-- Start Service Section Start -->
    <?php include('container/serviceSection.php'); ?>
    <!-- End Service Sectinn End-->

    <!-- Start Working process Start-->
    <?php  include('container/workingprocess.php'); ?>
    <!-- End Working process End---->

    <!-- Sectors Start-->
    <?php  include('container/sectoer.php'); ?>
    <!-- Sectors End---->


    <!-- Start Project Section Start-->
    <?php include('container/latestprojects.php'); ?>
    <!-- End Project Section End---->

  
    <!-- Start Dilog Box Start -->
    <?php include('container/dilogbox.php'); ?>
    <!-- End Dilog Box End---->

    <!-- Start Testimonial Start-->
    <?php include('container/testimonial.php'); ?>
    <!-- End Testimonial End---->

    <hr>
    <!-- Start home-blog Start-->
    <?php include('container/homeblog.php'); ?>
    <!-- End home-blog End---->

 
    <!-- Start Subscribe Section Start-->
    <?php include('container/newsletters.php'); ?>
    <!-- End Subscribe Section -->
    </div><!-- .main-content End-- -->

  <!-- Start Footer Scetion Start-->
  <?php include('container/footersection.php'); ?>
  <!-- End Footer Scetion End--->

  <!-- Scroll Up Button Start-->
  <span class='scrollup' id="scrollup"></span>

  <!-- Scripts -->
  <?php include('container/scripts.php'); ?>
</body>
</html>
