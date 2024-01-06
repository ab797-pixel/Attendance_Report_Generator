<?php
extract($_POST);
if(isset($save)){
 $staff_email = $_SESSION['email'];
//  echo $staff_email;
//  echo "id = 1"."<br>";
//  echo "name =".$name."<br>";
 $query = "select * from staffs where email='$staff_email'";
 $staff_query=mysqli_query($con,$query);
 $staff_row = mysqli_fetch_array($staff_query);
 $staff_id = $staff_row['id'];
//  echo "incharge_staff_id =".$staff_id."<br>";
//  echo "department_name =".$department_name."<br>";
//  echo "semester =".$semester."<br>";
//  echo "academic year =".$academic_year."<br>";
//  echo "is_available=0";
$insert_query = "insert into classes values('','$name','$staff_id','$department_name','$semester','$academic_year','0','0')";
$result = mysqli_query($con,$insert_query);
if(isset($result)){
  echo "<div class='alert alert-success alert-dismissible' role='alert'>
  SUCCESSFULLY INSERT THE DATA
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
  </button>
  </div>";
}

}
?>

<section id="staff_class" class="staff_class sections-bg">
      <div class="container" data-aos="fade-up">
        
      <div class="row">
        <div class="col-md-9">
            <div class="section-header">
                <h2>Classes</h2>
            </div>
        </div> 
       <div class="col-md-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStaff">
           Add class
         </button>
        </div>
      </div>
  <table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
  <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Alias</th>
    <th>Available</th>
    <th>Action</th>
  </tr>
  <?php

  ?>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <?php
  
  
  ?>

</table>


      </div>

      <div class="modal fade" id="addStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Staff Details</h5>
        <?php echo @$err;?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" enctype="multipart/form-data">
      <div class="modal-body">
      
          <div class="mb-3">
            <label  class="form-label">Name</label>
           <?php $name="";?> <input type="text" class="form-control" name="name" placeholder="II MSC Computer Science" required>
          </div>
          <div class="mb-3">
            <label  class="form-label">semester</label>
            <?php $semester="";?><select class="form-control" name="semester" required>
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
            <?php $department_name="";?> <select class="form-control" name="department_name" required>
             <option value="CS">computer science</option>
              <!-- <option value="II">II</option>
              <option value="III">III</option>
              <option value="IV">IV</option>
              <option value="V">V</option>
              <option value="VI">VI</option> -->
            </select>
            <!-- <input type="text" class="form-control" name="staff_alias" placeholder="alias like 'M.G'" required> -->
          </div>
          <div class="mb-3">
            <label  class="form-label">academic year</label>
            <?php $academic_year="";?> <input type="text" class="form-control" name="academic_year" placeholder="2023-2024" required>
          </div>
         
          
          <!--<button type="submit" class="btn btn-primary" name="save">Save</button>-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" value="Save" class="btn btn-primary" name="save"/>
        
      </div>
      </form>
    </div>
  </div>
</div>

</section>
