<?php
  @$class_id=$_GET['class_id'];
  $query = "select * from classes where id ='$class_id'";
  $class_rows = mysqli_query($con,$query);
  $class_row = mysqli_fetch_array($class_rows);
  $class_id = $class_row['id'];
//   $student_query ="select register_no from students where class_id='$class_id' order by register_no desc limit 1";
//   $student_rows =mysqli_query($con,$student_query);
//   $student_row = mysqli_fetch_array($student_rows);
//   $no_students_row = mysqli_num_rows($student_rows);
//    if($no_students_row > 0){
//     echo "last record on this class ,reg_no: ".$student_row['register_no'];
//    }
    
  
  extract($_POST);
  if(isset($submit))
   {
    // echo "name=".$name."<br>";
    // echo "rno=".$roll_no."<br>";
    // echo "reg=".$register_no."<br>";
    // echo "class_id=".$class_id."<br>";
     $register_query = "select register_no from students where class_id='$class_id'";
     $register_rows = mysqli_query($con,$register_query);
     while($register_row=mysqli_fetch_array($register_rows)){
        if($register_row['register_no']==$register_no)
        {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
          register".$register_no." number already exists
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        $check = true;
        }     
              
        }
       if(!isset($check)){
        $staff_email= $_SESSION['email'];
        $staff_query = "select id from staffs where email = '$staff_email' ";
        $staff_rows = mysqli_query($con,$staff_query);
        $staff_row = mysqli_fetch_array($staff_rows);
        $staff_id = $staff_row['id'];
        $insert_query = "insert into students values('','$name','$roll_no','$register_no','$class_id','$staff_id')";
        $result=mysqli_query($con,$insert_query);
        echo "<div class='alert alert-success alert-dismissible' role='alert'>
        insert the data to the databases;
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
       }

    else{
      echo "<div class='alert alert-danger alert-dismissible' role='alert'>
      NO ENTRY;
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
      </button>
      </div>";
      
    }
   }
 

?>
<section id="staff_add_student" class="staff_add_student sections-bg">
    <div class="container" data-aos="fade-up">
      <!-- <div class="section-header">
          <h2></h2>
      </div> -->
      <form id="loginform" method="POST" >
      <div class="row d-flex justify-content-center " tabindex="-1">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

             <h2 class="section-header"><?php echo $class_row['name']?></h2>
             <div class="mb-3">
              <label  class="form-label">Name</label>
             <?php $name="";?>
              <input type="text" class="form-control" name="name" placeholder="Enter Students name" required>
            </div>
            <div class="mb-3">
              <label  class="form-label">Roll no</label>
             <?php $roll_no="";?> <input type="text" class="form-control" name="roll_no" placeholder="like '191716'" required>
            </div>
            <div class="mb-3">
              <label  class="form-label">Register no</label>
             <?php $register_no="";?> <input type="text" class="form-control" name="register_no" placeholder="like 'CB19S 191872'" required>
            </div>

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div> -->

            <!-- <button class="btn btn-secondary btn-lg btn-block" name="clear">Clear</button> -->
            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Register</button>

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