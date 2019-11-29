
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    	<link rel="stylesheet" href="../css/bootstrap.min.css">
    	<script src="../js/jquery.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
    	<link rel="../stylesheet" href="css/style.css">

      <?php
        include("navbar.php");
       ?>
  </head>

  <style media="screen">
    th
    {
      color:white;
      background-color: #414141
    }

  </style>
  <body>
    <?php
      $qtotal = "select count(usn) as total from profile";
      $rtotal = mysqli_query($conn,$qtotal);
      $row = mysqli_fetch_assoc($rtotal);
      $total = $row['total'];

      $qtotal = "select count(usn) as total from profile where allowed = 'true'";
      $rtotal = mysqli_query($conn,$qtotal);
      $row = mysqli_fetch_assoc($rtotal);
      $allowed = $row['total'];

      $denied = $total - $allowed;
     ?>
     <br /><br>
    <table class="table table-hover table-striped" style="width:70%;" align="center" border="1">
      <tr>
        <th colspan="6">College Status</th>
      </tr>
      <tr>
        <th style="background-color:blue">Applied</th><td><?php echo "$total"; ?></td><th style="background-color:green">Appoved</th><td><?php echo "$allowed"; ?></td><th style="background-color:red">Denied</th><td><?php echo "$denied"; ?></td>
      </tr>
    </table>
    <?php
      if($session_branch == 'all' || $session_branch == 'cse')
      {

        $qtotal = "select count(usn) as total from profile where branch like 'cse'";
        $rtotal = mysqli_query($conn,$qtotal);
        $row = mysqli_fetch_assoc($rtotal);
        $total = $row['total'];

        $qtotal = "select count(usn) as total from profile where allowed = 'true' and branch like 'cse'";
        $rtotal = mysqli_query($conn,$qtotal);
        $row = mysqli_fetch_assoc($rtotal);
        $allowed = $row['total'];

        $denied = $total - $allowed;

        $cse = '  <table class="table table-hover table-striped" style="width:70%;" align="center" border="1">
            <tr>
              <th colspan="6">Branch Status - CSE</th>
            </tr>
            <tr>
              <th style="background-color:blue">Applied</th><td>'.$total.'</td><th style="background-color:green">Appoved</th><td>'.$allowed.'</td><th style="background-color:red">Denied</th><td>'.$denied.'</td>
            </tr>
          </table>';
      }


      if($session_branch == 'all' || $session_branch == 'ece')
      {
        $qtotal = "select count(usn) as total from profile where branch like 'ece'";
        $rtotal = mysqli_query($conn,$qtotal);
        $row = mysqli_fetch_assoc($rtotal);
        $total = $row['total'];

        $qtotal = "select count(usn) as total from profile where allowed = 'true' and branch like 'ece'";
        $rtotal = mysqli_query($conn,$qtotal);
        $row = mysqli_fetch_assoc($rtotal);
        $allowed = $row['total'];

        $denied = $total - $allowed;

        $ece = '  <table class="table table-hover table-striped" style="width:70%;" align="center" border="1">
            <tr>
              <th colspan="6">Branch Status - ECE</th>
            </tr>
            <tr>
            <th style="background-color:blue">Applied</th><td>'.$total.'</td><th style="background-color:green">Appoved</th><td>'.$allowed.'</td><th style="background-color:red">Denied</th><td>'.$denied.'</td>
            </tr>
          </table>';
      }


      if($session_branch == 'all' || $session_branch == 'civil')
      {
        $qtotal = "select count(usn) as total from profile where branch like 'civil'";
        $rtotal = mysqli_query($conn,$qtotal);
        $row = mysqli_fetch_assoc($rtotal);
        $total = $row['total'];

        $qtotal = "select count(usn) as total from profile where allowed = 'true' and branch like 'civil'";
        $rtotal = mysqli_query($conn,$qtotal);
        $row = mysqli_fetch_assoc($rtotal);
        $allowed = $row['total'];

        $denied = $total - $allowed;

        $civil = '  <table class="table table-hover table-striped" style="width:70%;" align="center" border="1">
            <tr>
              <th colspan="6">Branch Status - Civil</th>
            </tr>
            <tr>
            <th style="background-color:blue">Applied</th><td>'.$total.'</td><th style="background-color:green">Appoved</th><td>'.$allowed.'</td><th style="background-color:red">Denied</th><td>'.$denied.'</td>
            </tr>
          </table>';
      }
      if($session_branch == 'all' || $session_branch == 'mechanical')
      {
        $qtotal = "select count(usn) as total from profile where branch like 'mechanical'";
        $rtotal = mysqli_query($conn,$qtotal);
        $row = mysqli_fetch_assoc($rtotal);
        $total = $row['total'];

        $qtotal = "select count(usn) as total from profile where allowed = 'true' and branch like 'mechanical'";
        $rtotal = mysqli_query($conn,$qtotal);
        $row = mysqli_fetch_assoc($rtotal);
        $allowed = $row['total'];

        $denied = $total - $allowed;

        $mechanical = '  <table class="table table-hover table-striped" style="width:70%;" align="center" border="1">
            <tr>
              <th colspan="6">Branch Status - Mechanical</th>
            </tr>
            <tr>
            <th style="background-color:blue">Applied</th><td>'.$total.'</td><th style="background-color:green">Appoved</th><td>'.$allowed.'</td><th style="background-color:red">Denied</th><td>'.$denied.'</td>
            </tr>
          </table>';
      }
      //echo "$cse<br />$ece<br />$civil<br />$mechanical<br />";
      if($session_branch=='all') {
     ?>
     <div class="row">
       <div class="col-sm-6">
        <?php echo "$cse"; ?>
       </div>
       <div class="col-sm-6">
         <?php echo "$ece"; ?>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-6">
        <?php echo "$civil"; ?>
       </div>
       <div class="col-sm-6">
         <?php echo "$mechanical"; ?>
       </div>
     </div>
     <?php }
     else {
       echo "$cse<br />$ece<br />$civil<br />$mechanical<br />";
     }


      ?>
      <hr><hr />
      <h3 align="center">Allow or Deny Student Admission</h3>
      <div align='center'>

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
                  <li><a href="verify.php?b=cse&y=1">1st Year</a></li>
                  <li><a href="verify.php?b=cse&y=2">2nd Year</a></li>
                  <li><a href="verify.php?b=cse&y=3">3rd Year</a></li>
                  <li><a href="verify.php?b=cse&y=4">4th Year</a></li>
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
                  <li><a href="verify.php?b=ece&y=1">1st Year</a></li>
                  <li><a href="verify.php?b=ece&y=2">2nd Year</a></li>
                  <li><a href="verify.php?b=ece&y=3">3rd Year</a></li>
                  <li><a href="verify.php?b=ece&y=4">4th Year</a></li>
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
                  <li><a href="verify.php?b=civil&y=1">1st Year</a></li>
                  <li><a href="verify.php?b=civil&y=2">2nd Year</a></li>
                  <li><a href="verify.php?b=civil&y=3">3rd Year</a></li>
                  <li><a href="verify.php?b=civil&y=4">4th Year</a></li>
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
