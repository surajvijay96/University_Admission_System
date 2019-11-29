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
  <br>
  <body>
    <?php
  include("config.php");
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



  $qlist = "select * from profile p, fees f where f.usn=p.usn and f.sem=p.sem and p.sem in ($sem1,$sem2) and p.branch like '".$branch."' and f.amount!=0";// echo "$qlist";
  $resList = mysqli_query($conn,$qlist);
  echo "<div align='center' class='container'>";
  if($branch == 'cse')
  {
    echo "<h3>Computer Science & Engineering</h3>";
  }
  if($branch == 'ece')
  {
    echo "<h3>Electronics & Communication Engineering</h3>";
  }
  if($branch == 'civil')
  {
    echo "<h3>Civil Engineering</h3>";
  }
  if($branch == 'mechanical')
  {
    echo "<h3>Mechanical Engineering</h3>";
  }

  echo "Year $year<br /><br />";
  echo "<div class='panel-group'>";
  while($rowList=mysqli_fetch_assoc($resList))
  {
    ?>
      <div id="<?php echo "".$rowList['usn'].""; ?>" class="panel panel-<?php if($rowList['allowed']=='true') {echo "success";} else {echo "danger";} ?>" style="width:70%;text-align:left;text-transform:uppercase;">
        <div class="panel-heading">

          <div float="left;">
            <?php echo "".$rowList['usn'].",".$rowList['name'].",".$rowList['amount'].",".$rowList['allocatedCategory'].""; ?>
          </div>
          <div float="right;" align="right">
            <form method="post" action="change.php">
              <input type="hidden" value="<?php echo "".$rowList['usn'].""; ?>" name="usn" />
              <input type="hidden" name="b" value="<?php echo "$branch"; ?>">
              <input type="hidden" name="y" value="<?php echo "$year"; ?>">
              <input type="hidden" value="<?php if($rowList['allowed']=='true') echo "false"; else echo "true"; ?>" name="allowed" />
              <input type="submit" name="submit" value="<?php if($rowList['allowed']=='true') echo "Deny"; else echo "Allow"; ?>" class="btn btn-<?php if($rowList['allowed']=='true') echo "danger"; else echo "success"; ?>">
            </form>
          </div>
        </div>
      </div>
    <?php
  }
  echo "</div>";
  echo "</div>";

 ?>

</body>
</html>
