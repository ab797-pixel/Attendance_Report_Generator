<?php
@$staff_id = $_GET['staff_id'];
if(isset($staff_id)){
    $retrieve_staff = mysqli_query($con,"select * from staffs where id ='$staff_id'");
    $staff_row = mysqli_fetch_array($retrieve_staff);
}
?>
<section id="admin_staff" class="admin_staff sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h1>THIRU.VI.KA GOVT ARTS COLLEGE - THIRUVARUR</h1>
                 <h3> WEEKLY INDIVIDUAL -REPORT</h3>
        <div class="row">
            <div class="col-md-6">
            <h6>DEPARTMENT: COMPUTER SCIENCE</h6>
            <h6>STAFF NAME : <?php echo $staff_row['name']?></h6>
            </div>
        </div>
       
         <table class='table table-bordered table-striped table-hover table-responsive' style=margin:15px;>
           <tr>
             <th>Day Order</th>
             <th>Date (Working days only)</th>
             <th>Total Hrs as time table</th>
             <th>Total hrs taken</th>
             <th>I HOURS</th>
             <th>II HOURS</th>
             <th>III HOURS</th>
             <th>IV HOURS</th>
             <th>V HOURS</th>
             <th>Extra classes taken</th>
    </tr>
    <tr>
        <td>I</td>
        <td>12-01-2024</td>
        <td>3</td>
        <td>3</td>
        <td></td>
        <td>II M SC</td>
        <td></td>
        <td>II B.SC</td>
        <td>II B.SC</td>
        <td>0</td>
    </tr>
    <tr>
        <td>II</td>
        <td>13-01-2024</td>
        <td>4</td>
        <td>3</td>
        <td>II M.SC</td>
        <td>I M.SC</td>
        <td></td>
        <td>I B.SC</td>
        <td>IIi B.SC</td>
        <td>1</td>
    </tr>
    <tr>
        <td>III</td>
        <td>14-01-2024</td>
        <td>3</td>
        <td>3</td>
        <td> II B.SC</td>
        <td>II M SC</td>
        <td></td>
        <td></td>
        <td>II B.SC</td>
        <td>0</td>
    </tr>
    <tr>
        <td>IV</td>
        <td>15-01-2024</td>
        <td>2</td>
        <td>4</td>
        <td> II B.SC</td>
        <td>II M SC</td>
        <td>I M SC</td>
        <td></td>
        <td>II B.SC</td>
        <td>1</td>
    </tr>
    <tr>
        <td>IV</td>
        <td>16-01-2024</td>
        <td>3</td>
        <td>3</td>
        <td>II B.SC </td>
        <td>II M SC</td>
        <td>II B.SC</td>
        <td></td>
        <td></td>
        <td>0</td>
    </tr>
    <<tr>
        <td>V</td>
        <td>17-01-2024</td>
        <td>3</td>
        <td>5</td>
        <td>II B.SC </td>
        <td>II M SC</td>
        <td>II B.SC</td>
        <td>I B.SC</td>
        <td>II M.SC</td>
        <td>2</td>
    </tr>
    <table>
    </div> 

</section>