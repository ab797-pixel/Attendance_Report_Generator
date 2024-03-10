<?php
include('../db.php');
 $available_query = mysqli_query($con,"select id from classes where is_available = 1");
 $available_classes = mysqli_fetch_all($available_query);
 echo json_encode($available_classes);
?>