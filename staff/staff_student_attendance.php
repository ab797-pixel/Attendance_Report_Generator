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
      $staff_email =$_SESSION['email'];
      $staff_row_query = mysqli_query($con,"select id from staffs where email = '$staff_email'");
      $staff_row = mysqli_fetch_array($staff_row_query);
      $staff_id = $staff_row['id'];
      $date = date("Y-m-d");
      $insert_staff_attendance = mysqli_query($con,"insert into staff_attendance values('','$attendance_class_id','$staff_id','$subject','$sub_topic','$date','$day_order','$hour')");
      $absentees = explode(",",$absent_students);
      foreach( $absentees as $absent){
        //id	class_id	student_register_no	attendance	date	day_order	hour	
       // echo "class_id".$attendance_class_id."student_register_no".$absent."attendance == 0 date".date("Y-m-d")."day_order".$day_order."hour".$hour."<br>";
       $insert_student_attendance = mysqli_query($con,"insert into attendance values('','$attendance_class_id','$absent',0,'$date','$day_order','$hour')");
      
      }

     
      
    }
?>


<section id="staff_student_attendance" class="staff_student_attendance sections-bg">
    <div class="container" data-aos="fade-up">
        <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-9">
            <center><h4><u><?php echo $class_row['name']?></u></h4></center>
            </div>
            <div class="col-md-3" style="font-size:20px;text:bold;">
              <?php echo date("d/m/Y");?>
            </div>
          </div>
        
       <div class="row">
        <div class="col-md-3">
        <label  class="form-label">SUBJECT</label>
        <input type="text" class="form-control" name="subject" placeholder="AGILE Technology"required>
        </div>
        <div class="col-md-3">
        <label  class="form-label">Sub-Topic</label>
        <input type="text" class="form-control" name="sub_topic" placeholder="agile designing and testing" required>
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
    <input type="hidden" id="absent_students" name="absent_students">
    <table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
  <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Reg.No</th>
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
    <td><?php echo $student_row['register_no'];?></td>
    <td>
    <div class="form-check" id="<?php echo $student_row['register_no'];?>color"  style="background-color:green;" onclick="absend('<?php echo $student_row['register_no']?>')">
      <input class="form-check-input" type="radio" id="<?php echo $student_row['register_no'];?>"  value=1  name="<?php echo $student_row['register_no']?>" >
      <label class="form-check-label">
      <b id="<?php echo $student_row['register_no'];?>present_name"> PRESENT </b>
      </label>
   </div>
    </td>
  </tr>
  <?php
  $i++;
  }
  ?>
  </table>
  <input type="submit" value="Save Attendance" class="btn btn-primary" name="submit"/>
 </form>
    </div>
</section>
<script>
   absent_student = [];
   
  function absend(reg_no){
    console.log(reg_no);
    absent_student.push(reg_no);
    $("#"+reg_no+"color")
    .removeAttr("onclick")
    .removeAttr("style")
    .css({'background-color':'red'})
    .attr("onclick","present('"+reg_no+"')")
    $("#"+reg_no+"present_name").html("ABSENT");
    $("#"+reg_no).attr("value",0);
    $("#absent_students").val(absent_student);
    console.log(absent_student);
  }
  function present(reg_no){
    console.log(reg_no);
    const index = absent_student.indexOf(reg_no);
    if(index > -1){
      absent_student.splice(index, 1);
    }
   // absent_student.remove(reg_no);
    $("#"+reg_no+"color")
    .removeAttr("onclick")
    .removeAttr("style")
    .css({'background-color':'green'})
    .attr("onclick","absend('"+reg_no+"')")
    $("#"+reg_no+"present_name").html("PRESENT");
    $("#"+reg_no).attr("value",1);
    $("#absent_students").val(absent_student);
    console.log(absent_student);
  }

</script>