<?php
   @$class_id = $_GET['class_id'];
   if(isset($class_id)){
    // echo $student_id." ".$class_id;
    $edit_class_query = "select * from classes where id = '$class_id'";
    $edit_class_rows = mysqli_query($con,$edit_class_query);
    $class_row = mysqli_fetch_array($edit_class_rows);
   }
   extract($_POST);
   if(isset($submit))
    {
     $edit_query = "update classes set name='$name', incharge_staff_id='$incharge_staff_id',semester='$semester',department_name='$department_name',academic_year='$academic_year' where id='$class_id'";
     mysqli_query($con,$edit_query);
      header("location:index.php?info=classes");
    }
?>
<section id="staff_add_student" class="staff_add_student sections-bg">
    <div class="container" data-aos="fade-up">
    <form id="loginform" method="POST" >
      <div class="row d-flex justify-content-center " tabindex="-1">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

             <h2 class="section-header">EDIT <?php echo $class_row['name'];?></h2>
             <div class="mb-3">
              <label  class="form-label">Name</label>
             <?php ?>
              <input type="text" class="form-control" name="name" value="<?php echo $class_row['name'];?>" required>
            </div>
            <div class="mb-3">
            <label  class="form-label">Incharge_staff</label>
            <select class="form-control" name="incharge_staff_id" value="<?php echo $class_row['incharge_staff_id'];?>" required>
              <?php
               $staff_query = "select * from staffs";
               $staff_row = mysqli_query($con,$staff_query);     
               while($row=mysqli_fetch_array($staff_row)){
                echo "<option value='$row[id]'>$row[name]</option>";
               }
                 ?>
             
            </select>
            <!-- <input type="text" class="form-control" name="staff_alias" placeholder="alias like 'M.G'" required> -->
          </div>

          <div class="mb-3">
            <label  class="form-label">semester</label>
            <select class="form-control" name="semester" value="<?php echo $class_row['semester'];?>" required>
              <option value="I">I</option>
              <option value="II">II</option>
              <option value="III">III</option>
              <option value="IV">IV</option>
              <option value="V">V</option>
              <option value="VI">VI</option>
            </select>
             <!-- <input type="text" class="form-control" name="staff_alias" placeholder="alias like 'M.G'" required> -->
          </div>
          <div class="mb-3">
            <label  class="form-label">department name</label>
            <select class="form-control" name="department_name" value="<?php echo $class_row['department_name'];?>" required>
             <option value="CS">computer science</option>
            </select>
            <!-- <input type="text" class="form-control" name="staff_alias" placeholder="alias like 'M.G'" required> -->
          </div>
          <div class="mb-3">
            <label  class="form-label">academic year</label>
             <input type="text" class="form-control" name="academic_year"  value="<?php echo $class_row['academic_year'];?>"  required>
          </div>

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