<?php
@$class_id = $_GET['class_id'];
if(isset($class_id)){
    $retrieve_class = mysqli_query($con,"select * from classes where id = '$class_id'");
    $class_row = mysqli_fetch_array($retrieve_class);
}

?>
<section id="staff_class" class="staff_class sections-bg">
      <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-md-9">
            <div class="section-header">
                <h2>Report</h2>
            </div>
        </div>
        <div class="col-md-3">
        <button  class="btn btn-info">
           Print
         </button> 
        </div>
      </div>
      <table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
  <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Reg.No</th>
    <th>Total class Hour</th>
    <th>percentage</th>
  </tr>
  
  <tr>
    <td>1.</td>
    <td>K.AARTHI</td>
    <td>P 22270801</td>
    <td>120</td>
    <td>97%</td>
  </tr>
  <tr>
    <td>2</td>
    <td>ABIMANYU.J</td>
    <td>P22270802</td>
    <td> 120 </td>
    <td>87%</td>
  </tr>
    <tr>
    <td>3</td>
    <td>ABINAYA.M</td>
    <td>P22270803</td>
    <td>120
    </td>
    <td>93%</td>
  </tr>
    <tr>
    <td>4</td>
    <td>ABIRAMI.R</td>
    <td>P22270804</td>
    <td>
    120
    </td>
    <td>80%</d>
  </tr>
    <tr>
    <td>5</td>
    <td>AISHWARYA.M</td>
    <td>P22270805</td>
    <td>
   120
    </td>
    <td>93%</td>
  </tr>
    <tr>
    <td>6</td>
    <td>AKALYA.M</td>
    <td>P22270806</td>
    <td>
120
    </td>
    <td>93%</td>
  </tr>
    <tr>
    <td>7</td>
    <td>AKILA.V</td>
    <td>P22270807</td>
    <td>
    120
    </td>
    <td>95%</td>
  </tr>
    <tr>
    <td>8</td>
    <td>ANUSYA.S</td>
    <td>P22270808</td>
    <td>
   120
    </td>
    <td>97%</td>
  </tr>
    <tr>
    <td>9</td>
    <td>BHUVANESHWARI.P</td>
    <td>P22270810</td>
    <td>
    120
    </td>
    <td>92%</td>
  </tr>
    <tr>
    <td>10</td>
    <td>DHARANI.R</td>
    <td>P22270811</td>
    <td>
    120
    </td>
    <td>93%</td>
  </tr>
    <tr>
    <td>11</td>
    <td>DHIVYA.V</td>
    <td>P22270812</td>
    <td>
    120
    </td>
    <td>95%</td>
  </tr>
    <tr>
    <td>12</td>
    <td>JAYASEELAN.P</td>
    <td>P22270813</td>
    <td>
   120
    </td>
    <td>84%</td>
  </tr>
    <tr>
    <td>13</td>
    <td>KARTHIKA.P</td>
    <td>P22270814</td>
    <td>
  120
    </td>
  </tr>
    <tr>
    <td>14</td>
    <td>LAVANYA.M</td>
    <td>P22270815</td>
    <td>
   120
    </td>
    <td>97%</td>
  </tr>
    <tr>
    <td>15</td>
    <td>MANIKADAN.M</td>
    <td>P22270816</td>
    <td>
  120
    </td>
  </tr>
    <tr>
    <td>16</td>
    <td>MATHAVANRAJ.S</td>
    <td>P22270817</td>
    <td>
   120</td>
   <tr>
  </table>
</section>