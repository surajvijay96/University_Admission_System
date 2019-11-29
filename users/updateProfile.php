<?php

include("../config.php");

$refNo = $_POST['refNo'];//echo "$refNo";//echo "<br />";
$usn = $_POST['usn'];//echo "$usn";//echo "<br />";
$name = $_POST['name'];//echo "$name";//echo "<br />";
$father = $_POST['father'];//echo "$father";//echo "<br />";
$mother = $_POST['mother'];//echo "$mother";//echo "<br />";
$sex = $_POST['gender'];//echo "$sex";//echo "<br />";
$cet = $_POST['cet'];//echo "$cet";//echo "<br />";
$actualCategory = $_POST['actualCategory'];//echo "$actualCategory";//echo "<br />";
$allocatedCategory = $_POST['allocatedCategory'];//echo "$allocatedCategory";//echo "<br />";
$caste = $_POST['caste'];//echo "$caste";//echo "<br />";
$income = $_POST['income'];//echo "$income";//echo "<br />";
$branch = $_POST['branch'];//echo "$branch";//echo "<br />";
$puOrDip = $_POST['puOrDip'];//echo "$puOrDip";//echo "<br />";
$p = $_POST['p'];//echo "$p";//echo "<br />";
$c = $_POST['c'];//echo "$c";//echo "<br />";
$m = $_POST['m'];//echo "$m";//echo "<br />";
$bcse = $_POST['bcse'];//echo "$bcse";//echo "<br />";
$marks = $_POST['marks'];//echo "$marks";//echo "<br />";
$permanentAddress = $_POST['permanentAddress'];//echo "$permanentAddress";//echo "<br />";
$correspondenceAddress = $_POST['correspondenceAddress'];//echo "$correspondenceAddress";//echo "<br />";
$residencePhone = $_POST['residencePhone'];//echo "$residencePhone";//echo "<br />";
$studentPhone = $_POST['studentPhone'];//echo "$studentPhone";//echo "<br />";
$email = $_POST['email'];//echo "$email";//echo "<br />";
$accno = $_POST['accno'];//echo "$accno";//echo "<br />";
$aadhar = $_POST['aadhar'];//echo "$aadhar";//echo "<br />";
$epicNo = $_POST['epicNo'];//echo "$epicNo";//echo "<br />";
$bloodGroup = $_POST['bloodGroup'];//echo "$bloodGroup";//echo "<br />";
$sem = $_POST['sem'];//echo "$sem";//echo "<br />";
$scheme = $_POST['scheme'];//echo "$scheme";//echo "<br />";
$feeChallan = $_POST['feeChallan'];if(!$feeChallan) $feeChallan = 'false';
$cetAllotment = $_POST['cetAllotment'];if(!$cetAllotment) $cetAllotment = 'false';
$sslcMarksCard = $_POST['sslcMarksCard'];if(!$sslcMarksCard) $sslcMarksCard = 'false';
$pucMarksCard = $_POST['pucMarksCard'];if(!$pucMarksCard) $pucMarksCard = 'false';
$casteCertificate = $_POST['casteCertificate'];if(!$casteCertificate) $casteCertificate = 'false';
$incomeCertificate = $_POST['incomeCertificate'];if(!$incomeCertificate) $incomeCertificate = 'false';
$kannadaMediumCertificate = $_POST['kannadaMediumCertificate'];if(!$kannadaMediumCertificate) $kannadaMediumCertificate = 'false';
$ruralCertificate = $_POST['ruralCertificate'];if(!$ruralCertificate) $ruralCertificate = 'false';
$tcOrMigrationCertificate = $_POST['tcOrMigrationCertificate'];if(!$tcOrMigrationCertificate) $tcOrMigrationCertificate = 'false';
$diplomaMarksCards = $_POST['diplomaMarksCards'];if(!$diplomaMarksCards) $diplomaMarksCards = 'false';
$affidavit = $_POST['affidavit'];if(!$affidavit) $affidavit = 'false';
$passportPhoto = $_POST['passportPhoto'];if(!$passportPhoto)  $passportPhoto = 'false';
$postalCovers = $_POST['postalCovers'];if(!$postalCovers) $postalCovers = 'false';
$amount = $_POST['amount'];
$receiptNo = $_POST['receiptNo'];
$date = $_POST['date'];
if(isset($_POST['allowed']))
  $allowed = $_POST['allowed'];
else
  $allowed = 'false';


$delProf = "delete from profile where usn like '".$usn."'";
$resDelProf = mysqli_query($conn,$delProf);

$insert = "insert into profile values('".$refNo."','".$usn."','".$name."','".$father."','".$mother."','".$sex."','".$cet."','".$allocatedCategory."','".$actualCategory."','".$caste."','".$income."','".$branch."','".$puOrDip."','".$permanentAddress."','".$correspondenceAddress."','".$residencePhone."','".$studentPhone."','".$email."','".$accno."','".$epicNo."','".$aadhar."','".$bloodGroup."','".$scheme."',$sem,'".$allowed."')";
//echo "$insert";
$res = mysqli_query($conn,$insert);


$delPu = "delete from oldPuMarks where usn like '".$usn."'";
$resDelPu = mysqli_query($conn,$delPu);

$delDip = "delete from dipMarks where usn like '".$usn."'";
$resDelDip = mysqli_query($conn,$delDip);

if($puOrDip=='pu')
  $marks = "insert into oldPuMarks values('".$p."','".$c."','".$m."','".$bcse."','".$usn."')";
else
  $marks = "insert into dipMarks values('".$marks."','".$usn."')";

//echo "$marks";
$res = mysqli_query($conn,$marks);


$delEnclosures = "delete from enclosures where usn like '".$usn."'";
$resDelEnclosures = mysqli_query($conn,$delEnclosures);

$enclosures = "insert into enclosures values('".$feeChallan."','".$cetAllotment."','".$sslcMarksCard."','".$pucMarksCard."','".$casteCertificate."','".$incomeCertificate."','".$kannadaMediumCertificate."','".$ruralCertificate."','".$tcOrMigrationCertificate."','".$diplomaMarksCards."','".$affidavit."','".$passportPhoto."','".$postalCovers."','".$usn."')";
$res = mysqli_query($conn,$enclosures);


$delFees = "delete from fees where usn like '".$usn."'";
$resDelPu = mysqli_query($conn,$delFees);

$fees = "insert into fees values('".$usn."','".$sem."','".$amount."','".$receiptNo."','".$date."')";//echo "$fees";
$resFees = mysqli_query($conn,$fees);

$page = "display.php?usn=".$usn."";
$sec = 1;



 ?>

     <meta http-equiv="refresh" content="1;URL='display.php?usn=<?php echo "".$usn.""; ?>'" />
