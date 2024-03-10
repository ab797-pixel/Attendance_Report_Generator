<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['reg.no'])){
header('location:../index.php');	
}
?>


<?php 
 include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>students</title>
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
        <h1>Students<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><div class="btn btn-danger btn-sm"><a href="index.php?info=logout">LogOut</a></div></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
   
  <?php
        $reg_no = $_SESSION['reg.no'];
        $retrieve_students = mysqli_query($con,"select * from students where register_no = '$reg_no'");
        $student_row = mysqli_fetch_array($retrieve_students);
        ?>

<section id="admin_home" class="admin_home sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Report</h2>
            <table class='table table-bordered table-striped table-hover table-responsive' style=margin:15px;>
             <tr>
                <th>NAME</th>
                <td> <?php echo $student_row['name'];?></td>
             </tr>
             <tr>
                <th>ROLL NUMBER</th> <td><?php echo $student_row['roll_no'];?></td>
             </tr>
             <tr>
                <th>REGISTER NUMBER</th> <td><?php echo $student_row['register_no'];?></td>
             </tr>
             <tr>
                <th>TOTAL WORKING DAY</th> <td> 120</td>
             </tr>
             <tr>
                <th>PRESENT OF CLASS</th> <td>96</td>
             </tr>
             <tr>
                <th>PERCENTAGE</th> <td>80%₹</td>
             </tr>

        </table>
        </div>
       
      </div>

</section>

 
 

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