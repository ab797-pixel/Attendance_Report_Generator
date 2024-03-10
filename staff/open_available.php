<?php
 include('../db.php');
 session_start();
 $class_id = $_POST['class_id'];
 //is make to available to the class
 $class_row = mysqli_query($con,"update classes set is_available =1 where id='$class_id'");
 
 //Open register to calculate date
 /*
   available data on open register
   date,class_id,staff_id,open_attendance,close_attendance

 */
  $date =date("d");
  $month = date("m");
  $year = date("Y");
  $staff_email = $_SESSION['email'];
  $staff_row_query = mysqli_query($con,"select * from staffs where email = '$staff_email'");
  $staff_row = mysqli_fetch_array($staff_row_query);
  $staff_id = $staff_row['id'];
  echo "date:".$date."month".$month."year".$year."class_id".$class_id."staff_id".$staff_id."<br>";
  $open_register = mysqli_query($con,"insert into attendance_register values('','$date','$month','$year','$staff_id','$class_id','1','')");

?>