<section id="admin_home" class="admin_home sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Attendance</h2>
        </div>
        <table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
       <tr>
         <th>S.No</th>
         <th>Name</th>
         <th>Semester</th>
         <th>Attendance</th>
       </tr>
        <?php
        $i=1;
         $class_query=mysqli_query($con,"select * from classes where is_available ='1'");
         while($class_row=mysqli_fetch_array($class_query)){

         
        ?>
        <tr>
          <td><?php echo $i?></td>
          <td><?php echo $class_row['name']?></td>
          <td><?php echo $class_row['semester']?></td>
          <td>
            <div class="btn btn-primary btn-md" ><a style="color:black;" href="index.php?info=staff_student_attendance&attendance_class_id=<?php echo $class_row['id']?>">Attendance</a></div>
          </td>
        </tr>
        <?php
        }
        ?>
      
      </table>



      </div>

</section>

 