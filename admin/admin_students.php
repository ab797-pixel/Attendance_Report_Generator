
<?php
 @$class_id = $_GET['class_id'];
 @$class_name = $_GET['class_name'];
 if(isset($class_id)){
   $staff_query = mysqli_query($con,"select incharge_staff_id from classes where id = '$class_id'");
   $staff_id = mysqli_fetch_array($staff_query);
   $staff_name_query = mysqli_query($con,"select name from staffs where id='$staff_id[incharge_staff_id]'");
   $staff_name = mysqli_fetch_array($staff_name_query);
 }
?>
<section id="admin_class" class="admin_class sections-bg">
      <div class="container" data-aos="fade-up">
        
     
            <div class="section-header">
                <div class="row">
                    <div class="col-md-6">
                    <h2><?php echo $class_name;?></h2>
                    </div>
                    <div class="col-md-6">
                    Incharge Name:<?php echo $staff_name['name'];?>
                    </div>
                </div>
               
            </div>
          
            <table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
  <tr>
    <th>S.No</th>
    <th>Student Name</th>
    <th>Register no</th>
    <th>Report</th>
  </tr>
  <?php
   $i=1;
   if(isset($class_id)){
    $student_query = mysqli_query($con,"select * from students where class_id = '$class_id'");
    while($student_row=mysqli_fetch_array($student_query)){
  
  ?>
  <tr>
    <td><?php echo "$i";?></td>
    <td><?php echo "$student_row[name]";?></td>
    <td><?php echo "$student_row[register_no]";?></td>
    <td> <div class="btn btn-success btn-md" onclick="report()">Report</div> </td>
  </tr>
  <?php
  $i++;
   }
   }
  ?>

</table>
</div>
</section>
<script>
    function report(){
        alert("UPCOMING EVENT");
    }
</script>