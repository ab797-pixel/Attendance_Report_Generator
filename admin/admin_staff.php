<?php
@$staff_delete_id = $_GET['delete_id'];
if(isset($staff_delete_id)){
  $delete_query = mysqli_query($con,"delete from staffs where id='$staff_delete_id'");
  if(isset($delete_query)){
  echo "<div class='alert alert-success alert-dismissible' role='alert'>
 DELETE SUCCESSFULLY!
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
  </button>
  </div>";
  }
}

?>
<section id="admin_staff" class="admin_staff sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>staff</h2>
        </div> 
<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
  <tr>
    <th>S.No</th>
    <th>Staff name</th>
    <th>Alias</th>
    <th>Email</th>
    <th>Report</th>
    <th>Action</th>
  </tr>
  <?php
   $i=1;
   $staff_query = "select * from staffs" ;
   $staff_rows = mysqli_query($con,$staff_query);
   while($staff_row=mysqli_fetch_array($staff_rows)){
  ?>
  <tr>
    <td><?php echo "$i";?></td>
    <td><?php echo "$staff_row[name]";?></td>
    <td><?php echo "$staff_row[alias]";?></td>
    <td><?php echo "$staff_row[email]";?></td>
    <td>
      <div class="btn btn-success btn-md" onclick="staff_report()">Report</div>
    </td>
    <td>
    <div class="btn btn-danger btn-md"><a style="color:black;" href="index.php?info=staffs&delete_id=<?php echo $staff_row['id']?>">Delete</a></div>
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
  function staff_report(){
    alert("UPCOMING EVENT");
  }
</script>
