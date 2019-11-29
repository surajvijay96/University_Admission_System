<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Verification</title>

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
  <br>
  <body>
    <?php
  $branch = $_GET['b'];
  $year = $_GET['y'];

  if($session_branch!='all' && $branch!=$session_branch)
  {
    header("location:index.php?u=1#errorMsg");
  }
  if($year==1)
  {
    $sem1=1;
    $sem2=2;
  }
  if($year==2)
  {
    $sem1=3;
    $sem2=4;
  }
  if($year==3)
  {
    $sem1=5;
    $sem2=6;
  }
  if($year==4)
  {
    $sem1=7;
    $sem2=8;
  }

  $qlist  = "select usn,name,sem,allowed from profile where sem in ($sem1,$sem2) and branch like '".$branch."' and allowed like 'true'";//echo "$qlist";
  $resList = mysqli_query($conn,$qlist);
?>
<h3  align="center"> Promote Students to Next Semester</h3>
<form action="promotionBackend.php" method="post">
  <table class="table table-striped table-hover" style="width:60%;text-transform:uppercase" align="center" border="1">
    <tr>
      <th>SELECT</th><th>USN</th><th>NAME</th><th>SEM</th><th>CURRENT STATUS</th>
    </tr>
    <?php
    while($rowList = mysqli_fetch_assoc($resList))
    {
      echo "<tr>";
      echo "<td style='width:20px;'><input type='checkbox' name='list[]' value='".$rowList['usn']."' /></td>
      <td style='width:20px;'>".$rowList['usn']."</td><td>".$rowList['name']."</td>
      <td style='width:20px;'>".$rowList['sem']."</td>
      <td style='width:150px;'>";
      if ($rowList['allowed']=='true') {
        echo "allowed";
      }
      else {
        echo "denied";
      }
      echo "</td></tr>";
    }
     ?>
  </table>
</form>
