<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List Generation</title>

    	<link rel="stylesheet" href="../css/bootstrap.min.css">
    	<script src="../js/jquery.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
    	<link rel="../stylesheet" href="css/style.css">

      <?php
        include("navbar.php");
       ?>
  </head>
  <body>

    <div align='center'>
      <h2><b>Get Student List</b></h2>
    <?php
      if(isset($_GET['u']))
      {
        echo "<div class='alert alert-danger alert-dismissable' style='width:70%;' align='center' id='errorMsg'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Sorry!</strong> You are not authorized to access/ verify students of other branch .
              </div>";
      }
     ?>

   </div>
     <br />
    <div class="row">
      <div class="col-sm-6">
        <table class="table table-hover table-striped" style="width:70%;" align="center" border="1">
          <tr>
            <th>CSE</th>
          </tr>
          <tr>
            <td>
              <ul>
                <li><a href="../mpdf/bill_generation/studentList.php?b=cse&y=1" target="_blank">1st Year</a></li>
                <li><a href="../mpdf/bill_generation/studentList.php?b=cse&y=2" target="_blank">2nd Year</a></li>
                <li><a href="../mpdf/bill_generation/studentList.php?b=cse&y=3" target="_blank">3rd Year</a></li>
                <li><a href="../mpdf/bill_generation/studentList.php?b=cse&y=4" target="_blank">4th Year</a></li>
              </ul>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6">
        <table class="table table-hover table-striped" style="width:70%;" align="center" border="1">
          <tr>
            <th>ECE</th>
          </tr>
          <tr>
            <td>
              <ul>
                <li><a href="../mpdf/bill_generation/studentList.php?b=ece&y=1" target="_blank">1st Year</a></li>
                <li><a href="../mpdf/bill_generation/studentList.php?b=ece&y=2" target="_blank">2nd Year</a></li>
                <li><a href="../mpdf/bill_generation/studentList.php?b=ece&y=3" target="_blank">3rd Year</a></li>
                <li><a href="../mpdf/bill_generation/studentList.php?b=ece&y=4" target="_blank">4th Year</a></li>
              </ul>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <table class="table table-hover table-striped" style="width:70%;" align="center" border="1">
          <tr>
            <th>Civil</th>
          </tr>
          <tr>
            <td>
              <ul>
                <li><a href="../mpdf/bill_generation/studentList.php?b=civil&y=1" target="_blank">1st Year</a></li>
                <li><a href="../mpdf/bill_generation/studentList.php?b=civil&y=1" target="_blank">2nd Year</a></li>
                <li><a href="../mpdf/bill_generation/studentList.php?b=civil&y=1" target="_blank">3rd Year</a></li>
                <li><a href="../mpdf/bill_generation/studentList.php?b=civil&y=1" target="_blank">4th Year</a></li>
              </ul>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6">
        <table class="table table-hover table-striped" style="width:70%;" align="center" border="1">
          <tr>
            <th>Mechanical</th>
          </tr>
          <tr>
            <td>
              <ul>
                <li><a href="verify.php?b=mechanical&y=1">1st Year</a></li>
                <li><a href="verify.php?b=mechanical&y=2">2nd Year</a></li>
                <li><a href="verify.php?b=mechanical&y=3">3rd Year</a></li>
                <li><a href="verify.php?b=mechanical&y=4">4th Year</a></li>
              </ul>
            </td>
          </tr>
        </table>
      </div>
    </div>

  </body>
</html>
