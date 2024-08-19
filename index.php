<?php 
require_once 'functions/connection.php';
include_once 'functions/get-data.php';
include_once 'functions/get-announcement.php';
include_once 'functions/get-batch.php';
include_once 'functions/get-gallery.php';
if (session_start() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['username'])) {
   if ($_SESSION['type'] === 'administrator') {
        header('location: administrator');
   } else {
        header('location: student');
   }
}


?>
<!DOCTYPE html>
<html data-bs-theme="light" id="bg-animate" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Alumni Management System for Yllana Bay View College</title>
    <meta name="twitter:image" content="assets/img/logo3.webp">
    <meta name="description" content="Web-Based Alumni Management System for Yllana Bay View College">
    <link rel="icon" type="image/webp" sizes="450x450" href="assets/img/logo3.webp">
    <link rel="icon" type="image/webp" sizes="450x450" href="assets/img/logo3.webp" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/webp" sizes="450x450" href="assets/img/logo3.webp">
    <link rel="icon" type="image/webp" sizes="450x450" href="assets/img/logo3.webp" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/webp" sizes="450x450" href="assets/img/logo3.webp">
    <link rel="icon" type="image/webp" sizes="450x450" href="assets/img/logo3.webp">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Nunito.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery-baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>

<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

    <div id="logo">
        <a href="index.php"><img src="https://student.lemerycolleges.edu.ph/images/favicon.png" alt="">Lemery College Alumni</a>
    </div>

    <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Announcement</a></li>
          <li><a class="nav-link scrollto" href="#services">Contact Us</a></li>
        </ul>
        <button class="btn btn-primary rounded-3 ms-4 shadow-sm" data-bss-hover-animate="pulse" type="button" data-bs-target="#login" data-bs-toggle="modal">&nbsp;Login</button>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

<body>
    <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 style=color:#000;>Welcome LCIANS Alumni's</h1>
      <h2>The Right Choice</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
    <div class="container" data-aos="fade-up">
    <div class="text-dark bg-light border rounded border-0 border-light d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5 shadow-sm" data-bs-theme="light">
                        <div class="text-center text-lg-start py-3 py-lg-1">
                            <h2 class="fw-bold mb-2">Announcement</h2>
                            <p class="mb-0">LC ALUMNI ASSOCIATION -
"THE BUILDER OF FUTURE LEADERS"</p>
                        </div>
                    </div>
                <div class="container py-4 py-xl-5">
                    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                        <?php get_announcement(); ?>
                    </div>
                </div>
            </section>

    </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->

    <section id="facts">
        <div class="container" data-aos="fade-up">
                    <div class="row gy-4 row-cols-1 row-cols-md-1 row-cols-xl-1">

                        <?php include_once 'functions/get-gallery-batches.php'?>

                    </div>
            
        </div>
    </section>
    <!-- End Facts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <p class="section-description">This services will teach you the fundamentals and basics of the computer system before you proceed to the actual and hands-on computer servicing.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-briefcase"></i></a></div>
              <h4 class="title"><a href="">Installing and Configuring Computer Systems</a></h4>
              <p class="description">This module focuses on installing and configuring computer hardware and software, requiring an Intro to CSS course. It covers disassembly, assembly, installation of operating system, and program applications.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-card-checklist"></i></a></div>
              <h4 class="title"><a href="">Setting Up Computer Networks/Servers</a></h4>
              <p class="description">This module focuses on setting up computer networks, requiring completion of Intro to CSS and Installing and Configuring Computer Systems. It covers creating network cables, configuring routers, and connecting cables for workstations. The fourth module teaches setting up computer servers, including user access, configuring network services, and conducting testing and documentation procedures.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Maintaining Computer Systems and Networks</a></h4>
              <p class="description">This module focuses on maintaining computer systems and networks, requiring completion of Intro to CSS, Installing and Configuring Computer Systems, and Setting Up Computer Networks, and teaching planning, preparation, inspection, and testing.</p>
            </div>
          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Facts</h3>
            <p class="cta-text"> The Technical Education and Skills Development Authority (TESDA) was established through the enactment of Republic Act No. 7796 otherwise known as the "Technical Education and Skills Development Act of 1994", which was signed into law by President Fidel V. Ramos on August 25, 1994. This Act aims to encourage the full participation of and mobilize the industry, labor, local government units and technical-vocational institutions in the skills development of the country's human resources.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://www.tesda.gov.ph/about/tesda/10">Read more</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Portrait</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
          <div class="col-md-4">
          <div class="card">
            <div class="card-header">Batch</div>
            <div class="card-body">
            <?php get_gallery(); ?>
            </div>
            <div class="card-footer">footer</div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h3 class="section-title">Contact Us</h3>
      <p class="section-description">Feel free to reach out to us with any questions or inquiries.</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
            
          <address><i class="fas fa-map-pin"></i> 4337 Chabot Drive, Pleasanton, CA 94588Julie Hansen-Orvis | CA DRE# 00934447</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
            
          <p><i class="fas fa-phone"></i> <a href="tel:(925) 553-6707">(925) 553-6707</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
            
          <p><i class="fas fa-envelope ms-4"></i> <a href="luxuryhomesinwc@icloud.com">luxuryhomesinwc@icloud.com</a></p>
        </div>
      </div>

    </div>

<div class="row mt-5">
  <div class="col-lg-12">
    <form action="" method="post">
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
          </div>
        </div>

        <div class="col-lg-12 mt-1">
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
        </div>

        <div class="col-lg-12 mt-1">
          <div class="form-group">
            <textarea class="form-control" rows="5" name="message" placeholder="Message" required></textarea>
          </div>
        </div>

        <div class="col-lg-12 mt-1">
          <div class="form-group">
            <input type="checkbox" id="approveCheckbox" required>
            <label for="approveCheckbox">By providing Julie Hansen Partnership your contact information, you acknowledge and agree to our Privacy Policy and consent to receiving marketing communications, including through automated calls, texts, and emails, some of which may use artificial or prerecorded voices. This consent isn’t necessary for purchasing any products or services and you may opt out at any time. To opt out from texts, you can reply, ‘stop’ at any time. To opt out from emails, you can click on the unsubscribe link in the emails. Message and data rates may apply.</label><br><br>
          </div>
        </div>

        <div class="col-lg-12 mt-2">
          <button type="submit" class="btn btn-primary form-control">Send Message</button>
        </div>
      </div>
    </form>
  </div>
</div>

  </div>
</section><!-- End Contact Section -->



</main><!-- End #main -->

</div>
<footer id="footer">
    <div class="container">
    <p>All right</p>
    </div>
</footer><!-- End Footer -->
    
    <div class="modal fade" role="dialog" tabindex="-1" id="login">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><img src="assets/img/navbar.jpg" style="width: 10em;"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button></div>
                <div class="modal-body">
                    <div class="d-flex flex-column align-items-center mb-4"><img class="mb-3 rounded-circle" src="https://student.lemerycolleges.edu.ph/images/favicon.png" style="width: 5em;">
                        <h2 class="text-center"><span style="color: rgb(78, 115, 223);">WELCOME&nbsp;</span>Lemery Colleges Alumni's</h2>
                    </div>
                    <form action="functions/login.php" method="post">
                      <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                      <?php } ?>

                              <div class="container">
                                  <video id="preview" width="100%"></video>
                              </div>
                              <div class="container text-center">
                                  <form method="post" class="form-horizontal">
                                  <label>SCAN QR CODE HERE</label>
                                  <input type="text" name="qrcode_text" id="text" readonny="" placeholder="INPUT QR CODE" class="form-control">
                                  </form>
                      <button type="submit">LOGIN</button>
                      </div>
                      <div class="mt-5">Not yet a member?<a href="#" data-bs-target="#register" data-bs-toggle="modal"> here</a></div>
                      
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="register">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="assets/img/navbar.jpg" style="width: 10em;">
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="functions/student/register.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="username" type="text" name="username" placeholder="Enter Student Number" required>
                                <label class="form-label" for="username">Student Number:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" name="password" placeholder="Password" required>
                                <label class="form-label" for="password">Password:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="firstname" type="text" name="firstname" placeholder="Firstname" required>
                                <label class="form-label" for="firstname">Firstname:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="lastname" type="text" name="lastname" placeholder="Lastname" required>
                                <label class="form-label" for="lastname">Lastname:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="birthdate" type="date" required>
                                <label class="form-label">Birthdate:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="email" name="email" placeholder="Email" required>
                                <label class="form-label">Email:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" required name="course">
                                    <optgroup label="Course">
                                        <?php get_courses(); ?>
                                    </optgroup>
                                </select>
                                <label class="form-label">Course:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" required name="civil">
                                    <optgroup label="Status">
                                        <option value="Single" selected="">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widow">Widow</option>
                                    </optgroup>
                                </select>
                                <label class="form-label">Civil Status:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" required name="batch">
                                    <optgroup label="Batch">
                                        <?php get_batches(); ?>
                                    </optgroup>
                                </select>
                                <label class="form-label">Batch:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="number" name="children" placeholder="No. of Children">
                                <label class="form-label">No. Children:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="tel" name="phone" placeholder="Phone" required>
                                <label class="form-label">Contact #:</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="present_address" placeholder="Present Address" required>
                        <label class="form-label">Present Address:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="work_address" placeholder="Work Address">
                        <label class="form-label">Work Address:</label>
                    </div>
                    <!-- Profile Picture Upload -->
                    <div class="mb-3">
                        <label class="form-label" for="profile_picture">Upload Profile Picture:</label>
                        <input class="form-control" type="file" id="profile_picture" name="profile_picture" accept="image/*" required>
                    </div>
                    <button class="btn btn-primary w-100 mb-3" type="submit">Sign up</button>
                    <div class="d-flex flex-column align-items-center mb-4"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <script>
          let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
          Instascan.Camera.getCameras().then(function(cameras){
              if(cameras.length > 0 ){
                  scanner.start(cameras[0]);
              } else{
                  alert('No cameras found');
              }

          }).catch(function(e) {
              console.error(e);
          });

          scanner.addListener('scan',function(c){
              document.getElementById('text').value=c;
              document.forms[0].submit();
          });

        </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/three.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    <script src="assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>