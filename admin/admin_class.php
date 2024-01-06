<?php
extract($_POST);
if(isset($save)){
  echo "id = 1"."<br>";
  echo "name =".$name."<br>";
  echo "incharge_staff_id =".$Incharge_staff_id."<br>";
  echo "department_name =".$department_name."<br>";
  echo "semester =".$semester."<br>";
  echo "academic year =".$academic_year."<br>";
  echo "is_available=0"."<br>";
  echo "students total = 0"."<br>";
$insert_query = "insert into classes values('','$name','$Incharge_staff_id','$department_name','$semester','$academic_year','0','0')";
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
<section id="admin_class" class="admin_class sections-bg">
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
    <th>Class name</th>
    <th>Incharge_staff</th>
    <th>Semester</th>
    <th>View students</th>
    <th>Action</th>
  </tr>
  <?php
   $i=1;
   $class_query = "select * from classes" ;
   $class_rows = mysqli_query($con,$class_query);
   while($class_row=mysqli_fetch_array($class_rows)){
  ?>
  <tr>
    <td><?php echo "$i";?></td>
    <td><?php echo "$class_row[name]";?></td>
    <?php
     $staff_id = $class_row["incharge_staff_id"];
     $staff_query="select name from staffs where id='$staff_id'";
     $staff_rows=mysqli_query($con,$staff_query);
     $staff_row=mysqli_fetch_array($staff_rows); 
    ?>
    <td><?php echo "$staff_row[name]";?></td>
    <td><?php echo "$class_row[semester]";?></td>
    <td>view students</td>
    <td>edit and delete</td>
  </tr>
  <?php
  $i++;
   }
  ?>

</table>


      </div>

      <div class="modal fade" id="addStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Staff</h5>
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
            <label  class="form-label">Incharge_staff</label>
            <?php $Incharge_staff_id="";?> <select class="form-control" name="Incharge_staff_id" required>
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
