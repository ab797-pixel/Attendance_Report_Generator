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
    <td>delete</td>
  </tr>
  <?php
  $i++;
   }
  ?>
  </table>
      </div>

</section>
