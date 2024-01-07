<?php
   @$student_id = $_GET['student_id'];
   @$class_id = $_GET['class_id'];
   if(isset($student_id) && isset($class_id)){
    // echo $student_id." ".$class_id;
    $edit_student_query = "select * from students where class_id = '$class_id' and id='$student_id'";
    $edit_student_rows = mysqli_query($con,$edit_student_query);
    $student_row = mysqli_fetch_array($edit_student_rows);
   }
   extract($_POST);
   if(isset($submit))
    {
     $edit_query = "update students set name='$name' where id='$student_id'";
     mysqli_query($con,$edit_query);
      header("location:index.php?info=students");
    }
?>
<section id="staff_add_student" class="staff_add_student sections-bg">
    <div class="container" data-aos="fade-up">
    <form id="loginform" method="POST" >
      <div class="row d-flex justify-content-center " tabindex="-1">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

             <h2 class="section-header">EDIT STUDENT</h2>
             <div class="mb-3">
              <label  class="form-label">Name</label>
             <?php ?>
              <input type="text" class="form-control" name="name" value=<?php echo $student_row['name'];?> required>
            </div>
            <!-- <div class="mb-3">
              <label  class="form-label">Roll no</label>
             <?php?> <input type="text" class="form-control" name="roll_no"  required>
            </div>
            <div class="mb-3">
              <label  class="form-label">Register no</label>
             <?php ?> <input type="text" class="form-control" name="register_no"  required>
            </div> -->

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div> -->

            <!-- <button class="btn btn-secondary btn-lg btn-block" name="clear">Clear</button> -->
            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Edit</button>

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
</section>