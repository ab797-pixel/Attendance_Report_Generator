<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['id'])){
header('location:../index.php');	
}
?>
 this is admin login id is <?php echo $_SESSION['id']?>

<?php 
 include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- <link href="assets/vendor/bootstrap_2/bootstrap_responsive.min.css" rel="stylesheet"> -->
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body>


  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <!-- <img src="assets/img/logo.png" alt="">  -->
        <h1>Admin<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="index.php?info=academic_year">Academic Year</a></li> -->
          <li><a href="index.php?info=staffs">Staffs</a></li>
          <li><a href="index.php?info=classes">Class & students</a></li>
          <!-- <li class="dropdown"><a href="#"><span>records</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="index.php?info=admin_login">Admin login</a></li>
              <li><a href="index.php?info=staff_login">Staff login</a></li>
            </ul>
          </li> -->
          <li><div class="btn btn-danger btn-sm"><a href="index.php?info=logout">LogOut</a></div></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="academic_year")
						 {
						 include('admin_academic_year.php');
						 }
             else if($info=="staffs"){
              include('admin_staff.php');
             }
             else if($info=="classes"){
              include('admin_class.php');
             }
            //  else if($info=="admin_login"){
            //   include('admin_login.php');
            //  }
            //  else if($info=="staff_login"){
            //   include('staff_login.php');
            //  }
              else if($info=="logout"){
               include('logout.php');
              }

            }
            if($info==""){
            ?>
<section id="admin_home" class="admin_home sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Home</h2>
        </div> 
      </div>

</section>

  <?php
            }
?>
 

  <main id="main">

   

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

   
    <div class="container mt-4">
      <div class="copyright">
     <strong><span>Attendance report generator</span></strong>
      </div>
      <div class="credits">
            Created by <b>ABDULLA<span>.</span></b>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/jquery/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>