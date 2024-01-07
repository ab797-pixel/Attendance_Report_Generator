<?php
extract($_POST);
if(isset($save)){
     echo "name =".$name."<br>";
     echo "roll =".$roll_no."<br>";
     echo "register =".$register_no."<br>";
     echo "class_id=".$class_id;
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
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStaff">
           Add class
         </button> -->
        </div>
      </div>
  <table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
  <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Semester</th>
    <th>Add Students</th>
    <th>Action</th>
  </tr>
  <?php
   $staff_email = $_SESSION['email'];
   echo $staff_email;
   $staff_query = "select id from staffs where email='$staff_email'";
   $staff_rows = mysqli_query($con,$staff_query);
   $staff_row = mysqli_fetch_array($staff_rows);
   $staff_id = $staff_row['id'];

     $i=1;
     $class_query = "select * from classes where incharge_staff_id = '$staff_id'" ;
     $class_rows = mysqli_query($con,$class_query);
     while($class_row=mysqli_fetch_array($class_rows)){
  ?>
  <tr>
   
    <td><?php echo $class_row['id']?></td>

    <td><?php echo $class_row['name'];?></td>
    <td><?php echo $class_row['semester'];?></td>
    <td>
      <!-- <button type="button" name="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStaff">
           Add students
         </button> -->
         <a href="index.php?info=staff_add_students&class_id=<?php echo $class_row['id']?>">  Add students</a>
        </td>
    <td>
      <div class="btn btn-danger btn-lg" onclick="change_color()">Open Attendance</div>
    </td>
  </tr>
  
  <?php
  $i++;
     }
  ?>

</table>


      </div>



</section>
<script>
   function change_color(){
     alert("add AJAX  and Jquery");
   }
</script>
