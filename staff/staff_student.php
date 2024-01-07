<?php
@$delete_id = $_GET['delete_id'];
if(isset($delete_id)){
  $delete_query = "delete from students where id ='$delete_id'";
  mysqli_query($con,$delete_query);
  echo "<div class='alert alert-success alert-dismissible' role='alert'>
  DELETE DATA SUCCESSUFULLY
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
  </button>
  </div>";
}
?>
<section id="staff_students" class="staff_students sections-bg">
      <div class="container" data-aos="fade-up">
        

            <div class="section-header">
                <h2>Students</h2>
            </div>
            <table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
  <tr>
    <th>S.No</th>
    <th>Stdents name</th>
    <th>class</th>
    <th>Roll NO</th>
    <th>REG.NO</th>
    <th>Action</th>
  </tr>
  <?php
   $i=1;
   $staff_email= $_SESSION['email'];
   $staff_query = "select id from staffs where email = '$staff_email' ";
   $staff_rows = mysqli_query($con,$staff_query);
   $staff_row = mysqli_fetch_array($staff_rows);
   $staff_id = $staff_row['id'];
   $student_query = "select * from students where staff_id='$staff_id'" ;
   $student_rows = mysqli_query($con,$student_query);
   while($student_row=mysqli_fetch_array($student_rows)){
  ?>
  <tr>
    <td><?php echo "$i";?></td>
    <td><?php echo "$student_row[name]";?></td>
    <?php
       $class_id = $student_row['class_id'];
       $class_query = "select * from classes where id = '$class_id'";
       $class_rows = mysqli_query($con,$class_query);
       $class_row = mysqli_fetch_array($class_rows);
       $class_name = $class_row['name'];
    ?>
    <td><?php echo "$class_name";?></td>
    <td><?php echo "$student_row[roll_no]";?></td>
    <td><?php echo "$student_row[register_no]";?></td>
    <td>
      <div class="btn btn-info dtn-sm"><a href="index.php?info=staff_edit_students&class_id=<?php echo $class_row['id']?>&student_id=<?php echo $student_row['id']?>" style="color:black;">Edit</a></div> 
      <div class="btn btn-danger btn-sm"><a href="index.php?info=students&delete_id=<?php echo $student_row['id'];?>" style="color:black;">Delete</a></div>
    </td>
  </tr>
  <?php
  $i++;
   }
  ?>
  </table>

      </div>

</section>