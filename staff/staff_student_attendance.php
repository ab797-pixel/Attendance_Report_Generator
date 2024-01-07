<?php
   @$attendance_class_id = $_GET['attendance_class_id'];
  
   if(isset($attendance_class_id)){
    echo $attendance_class_id;
    $class_query = mysqli_query($con,"select * from classes where id='$attendance_class_id'");
    $class_row =mysqli_fetch_array($class_query);
    // echo $student_id." ".$class_id;
   }
   extract($_POST);
   if(isset($submit))
    {
  ?>
<script>
    alert('use Ajax and jquery');
</script>
<?php
    header("location:index.php?info=");
    }
?>
<section id="staff_student_attendance" class="staff_student_attendance sections-bg">
    <div class="container" data-aos="fade-up">
        <form method="post" enctype="multipart/form-data">
        <center><h4><u><?php echo $class_row['name']?></u></h4></center>
       <div class="row">
        <div class="col-md-3">
        <label  class="form-label">SUBJECT</label>
        <input type="text" class="form-control" name="subject" placeholder="AGILE Technology"required>
        </div>
        <div class="col-md-3">
        <label  class="form-label">Sub-Topic</label>
        <input type="text" class="form-control" name="sub-topic" placeholder="agile designing and testing" required>
        </div>
        <div class="col-md-3">
            <label  class="form-label">DAY ORDER</label>
            <?php $semester="";?><select class="form-control" name="day_order" required>
              <option value="I">I</option>
              <option value="II">II</option>
              <option value="III">III</option>
              <option value="IV">IV</option>
              <option value="V">V</option>
              <option value="VI">VI</option>
            </select>
             <!-- <input type="text" class="form-control" name="staff_alias" placeholder="alias like 'M.G'" required> -->
          </div>
        <div class="col-md-3">
        <label  class="form-label">HOURS</label>
        <?php $hour="";?><select class="form-control" name="hour" required>
              <option value="(10:00-10:55)">(10:00-10:55)</option>
              <option value="(10:55-11:50)">(10:55-11:50)</option>
              <option value="(11:55-12:45)">(11:55-12:45)</option>
              <option value="(01:30-02:10)">(01:30-02:10)</option>
              <option value="(02:10-03:00)">(02:10-03:00)</option>
            </select>
        </div>
    </div>
    <table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
  <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Attendance</th>
  </tr>
  <?php
  $i=1;
  $class_id = $class_row['id'];
  $student_query = mysqli_query($con,"select * from students where class_id='$class_id' order by register_no");
  while($student_row=mysqli_fetch_array($student_query)){
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $student_row['name'];?></td>
    <td>
    <div class="form-check">
      <input class="form-check-input" type="radio" style="background-color:green;" name="<?php echo $student_row['register_no']?>" id="<?php $student_row['register_no'];?>">
      <label class="form-check-label">
        present
      </label>
   </div>
    </td>
  </tr>
  <?php
  $i++;
  }
  ?>
  </table>
  <input type="submit" value="Save" class="btn btn-primary" name="submit"/>
 </form>
 


    </div>
</section>