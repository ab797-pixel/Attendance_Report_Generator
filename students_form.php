<?php
session_start();
 extract($_POST);
 if(isset($submit)){
    $_SESSION['reg.no'] = $text;
    header("location:students");
 }
?>

<section id="students_form" class="students sections-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
          <h2>Students form</h2>
      </div>
      <form id="staffLoginForm" method="POST" >
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h2 class="section-header">Search Register Number</h2>

            <div class="form-outline mb-4">
              <input type="text" name="text" class="form-control form-control-lg"  placeholder="REG.NO" required>
            </div>


            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div> -->

            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Search</button>
            

            <!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->
          </div>
        </div>
      </div>
    </div>
      </form>
</div>
</secton>