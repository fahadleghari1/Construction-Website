<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php include('container/links.php'); ?>
  <title>MEP | Ledcor Holdings</title>
</head>
<body class="home">
  <?php include('container/preloader.php'); ?>
  <?php include('container/header.php'); ?>

  <div class="main-content">
    <!-- Start Hero Section -->
    <section class="other-hero bg-img" data-src="img/mep/MEP-banner.jpg">
      <div class="container other-hero-text">
        <h1 class="mt-3">MEP</h1>
        <ul class="breadcrumb mt-3">
          <li><a href='index.php'>Home</a></li>
          <li>MEP</li>
        </ul>
      </div>
    </section>
    <!-- End Hero Section -->
    
    <section class="service section gray-bg service-v1 fw-400" id="services">
      <div class="container">
        <div class="section-header type2">
          <h2>MEP (Mechanical, Electrical, and Plumbing)</h2>
          <div class="sub-heading"></div>
        </div>
        <div class="row flex">
          <div class="col-lg-4 text-center">
            <div class="singel-service">
              <div class="single-feature-icon">
                <img src="img/mep/MEP-1.png" alt="" srcset="">
              </div>
              <h3 class="service-header"><a>Mechanical Systems Design</a></h3>
              <div class="service-details">We provide mechanical system design solutions that optimize the functionality and energy efficiency of your industrial or commercial properties. From HVAC systems to ventilation, we keep your spaces comfortable.</div>
              <!-- <a href="#" class="service-read-more">Read More</a> -->
            </div>
          </div><!-- .col -->
          <div class="col-lg-4 text-center">
            <div class="singel-service">
              <div class="single-feature-icon">
              <img src="img/mep/MEP-2.png" alt="" srcset="">
              </div>
              <h3 class="service-header"><a>Electrical Systems Design</a></h3>
              <div class="service-details">Our electrical systems design services encompass the planning and implementation of reliable electrical systems. We ensure that your buildings are equipped with safe, efficient, and sustainable electrical infrastructure.</div>
              <!-- <a href="#" class="service-read-more">Read More</a> -->
            </div>
          </div><!-- .col -->
          <div class="col-lg-4 text-center">
            <div class="singel-service">
              <div class="single-feature-icon">
                <img src="img/mep/MEP-3.png" alt="" srcset="">
              </div>
              <h3 class="service-header"><a>Plumbing and HVAC Design</a></h3>
              <div class="service-details">Our plumbing and HVAC design services cover the installation of plumbing and heating, ventilation, and air conditioning systems. We create solutions that enhance comfort and environmental performance.</div>
              <!-- <a href="#" class="service-read-more">Read More</a> -->
            </div>
          </div><!-- .col -->
          <div class="hero-btn-wrap">
              	<a href="contact.php" class="t-btn hero-btn">I want to discuss a project</a>
              </div>
        </div>
      </div>
    </section>


    <!-- Start Dilog Box -->
    <?php include('container/dilogbox.php'); ?>
    <!-- End Dilog Box -->

    <!-- Start Testimonial -->
    <?php include('container/testimonial.php'); ?>
    <!-- End Testimonial -->

    <hr>
    <!-- Start home-blog -->
    <?php include('container/homeblog.php'); ?>
    <!-- End home-blog -->

 
    <!-- Start Subscribe Section -->
    <?php include('container/newsletters.php'); ?>
    <!-- End Subscribe Section -->
    </div><!-- .main-content -->

  <!-- Start Footer Scetion -->
  <?php include('container/footersection.php'); ?>
  <!-- End Footer Scetion -->

  <!-- Scroll Up Button -->
  <span class='scrollup' id="scrollup"></span>

  <!-- Scripts -->
  <?php include('container/scripts.php'); ?>
</body>
</html>