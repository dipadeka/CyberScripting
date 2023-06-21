<?php 
    require "function.php";
    highlight_string("<?php " . var_export($upload_data, true) . ";?>");
    $response='';
    if(isset($_FILES['files'])){
        // $response=uploadFiles($_FILES)
        $folder = "uploads/";
 
        $names = $_FILES['files']['name'];
        $tmp_names = $_FILES['files']['tmp_name'];
        $upload_data = array_combine($tmp_names, $names);   
        foreach ($upload_data as $temp_folder => $file) {
            move_uploaded_file($temp_folder, $folder.$file);
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cyber Scripting - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <style>
  .color_white{
    color:white;
  }
    </style>
</head>

<body>

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Cyber Scripting solution <span>.</span></h1>
          <h2>We are providing solution for Cyber Security </h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-md-2 ">
        </div>
        <div class="col-md-8 text-center">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <label class="color_white">
                            Enter the domain</label>

                    </div>
                    <div class="col-md-4">
                        <input type="text" name="domainName" class="form-control" />
                    </div>
                    <div class="col-md-4">
                        <input type="file" name="files[]" class="form-control" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <button class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2">
        </div>

    </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/services14.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Security Solutions for everyone.</h3>
            <p class="fst-italic">
                Our cyber security services offer tremendous monetary and non-monetary value within your
                 organization. Minimally, an improvement in your security posture keeps confidential, classified, 
                 and proprietary business materials out of the hands of competitors. Beyond this, the right cyber 
                 security policies and protocols boost employee productivity by minimizing computer system downtime 
                 while optimizing your website’s uptime. As you shield computers and hardware from malware, you’re 
                 also improving equipment longevity and postponing replacement cost. And as you elevate consumer 
                 confidence, you’re better able to attract and retain new business.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Cyber Security is an applied science that focuses
                 on protecting information systems and the networks in which electronic communication is 
                 made possible. </li>
              <li><i class="ri-check-double-line"></i>Cyber Security is  considered as much of an art as a science by the practitioners
                that provide consulting, engineering, and IT security services that reduce risk for businesses and government..</li>
              <li><i class="ri-check-double-line"></i>Cyber Security controls can be used as safeguards to reduce risk for businesses and government..</li>
            </ul>
            <p>
             Cyber Security measures protect organizations from systems and infrastructure attacks by malicious individuals or nation states.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Assam Secretariat, Dispur, Assam</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 xxxxxxxxxx</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>