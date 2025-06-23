<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php include('container/links.php'); ?>
  <title>Contact | Ledcor Holdings</title>
</head>
<body class="home">
  <?php include('container/preloader.php'); ?>
  <?php include('container/header.php'); ?>

  <div class="main-content">
    <!-- Start Hero Section -->
    <section class="other-hero bg-img" data-src="img/Contact-ust-banner.jpg">
      <div class="container other-hero-text">
        <h1 class="mt-3">Contact Us</h1>
        <ul class="breadcrumb mt-3">
          <li><a href='index.php'>Home</a></li>
          <li>Contact Us</li>
        </ul>
      </div>
    </section>
    <!-- End Hero Section -->

     <!-- Start Contact Section -->
    <section class="contact section" id="contact">
      <div class="container">
      	<div class="section-header type1">
          <h2>Contact Us Now</h2>
          <div class="section-divider"><span></span></div>
        </div>
        <div class="row">
          <div class="col-xl-6">
            <div class="contact-text">If you have any quires or have any project fill free to contact us<br> 
              Our support team is available for you 24/7.</div>
            <div class="contact-info-wrap">
              <div class="row">
                <div class="col-md-6">
                  <div class="single-contact-info">
                    <i class="icon-basic_geolocalize-01"></i>
                    <div class="single-info-details">
                      <h3>Our Location</h3>
                      <span><?php echo $web_add;?></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single-contact-info">
                    <i class="icon-device_iphone"></i>
                    <div class="single-info-details">
                      <h3>Our Phone</h3>
                      <span><?php echo $web_num;?></span>
                      <span></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single-contact-info">
                    <i class="icon-mail_envelope"></i>
                    <div class="single-info-details">
                      <h3>Our E-mail</h3>
                      <span><?php echo $web_email;?></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single-contact-info">
                    <i class="icon-support_tools"></i>
                    <div class="single-info-details">
                      <h3>Our Support</h3>
                      <span><?php echo $web_emails;?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- .contact-info-wrap -->
          </div><!-- .col -->
          <div class="col-xl-6">
            <form  action="https://biboo-html.netlify.app/php/mail.php" method="post"  id="cf" class="contact-form">
              <div class="cf-msg"></div>
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" id="name" name="name" placeholder="Full Name" required>
                </div><!-- .col -->
                <div class="col-sm-6">
                  <input type="text" id="subject" name="subject" placeholder="Subject" required>
                </div><!-- .col -->
                <div class="col-sm-6">
                  <input type="tel" id=phone name="phone" placeholder="Phone">
                </div><!-- .col -->
                <div class="col-sm-6">
                  <input type="email" id="email" name="email" placeholder="Email" required>
                </div><!-- .col -->
                <div class="col-sm-12">
                  <textarea rows="3" placeholder="Droap a line" id="msg" name="msg" required></textarea>
                </div><!-- .col -->
                <div class="col-sm-12">
                  <button class="t-btn" type="submit" id="submit" name="submit">Send Message</button>
                </div><!-- .col -->
              </div>
            </form>
          </div><!-- .col -->
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
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
