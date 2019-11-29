<?php

include("config.php");

if(isset($_GET['usn']))
{
  $usn = $_GET['usn'];
  //echo "$usn";

  $delProf = "delete from profile where usn like '".$usn."'";
  $resDelProf = mysqli_query($conn,$delProf);

  $delPu = "delete from oldPuMarks where usn like '".$usn."'";
  $resDelPu = mysqli_query($conn,$delPu);

  $delDip = "delete from dipMarks where usn like '".$usn."'";
  $resDelDip = mysqli_query($conn,$delDip);

  $delEnclosures = "delete from enclosures where usn like '".$usn."'";
  $resDelEnclosures = mysqli_query($conn,$delEnclosures);

  $delFees = "delete from fees where usn like '".$usn."'";
  $resDelPu = mysqli_query($conn,$delFees);


  $page = "display.php?usn=".$usn."";
  $sec = 1;

  header("Refresh: $sec; url=$page");
}

 ?>
