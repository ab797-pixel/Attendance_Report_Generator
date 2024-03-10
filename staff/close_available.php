<?php
 include('../db.php');
 $class_id = $_POST['class_id'];
 //is make to available close attendance class
 $class_row = mysqli_query($con,"update classes set is_available =0 where id='$class_id'");
 
 //closeregister to calculate date
  $date =date("d");
  $month = date("m");
  $year = date("Y");
  //$retrieve = mysqli_query($con,"select * from attendance_register where class_id ='$class_id' and date='$date' and month = '$month' and year ='$year'");
 $update = mysqli_query($con,"update attendance_register set close_attendance = 1  where class_id ='$class_id' and date='$date' and month = '$month' and year ='$year' ");
?>