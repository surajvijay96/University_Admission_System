<?php
  include("config.php");
  $usn = $_POST['usn'];
  $allowed = $_POST['allowed'];
  $branch = $_POST['b'];
  $year = $_POST['y'];

  $qupdate = "update profile set allowed = '".$allowed."' where usn like '".$usn."'";
  $rupdate = mysqli_query($conn,$qupdate);
  if($rupdate)
  {
    header("location:verify.php?b=".$branch."&y=".$year."#".$usn."");
  }
 ?>
