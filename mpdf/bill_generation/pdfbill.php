<?php
include('../../users/config.php');
$date = $_GET['date'];

$year = $_GET['y'];
$branch = $_GET['b'];

if($session_branch!='all' && $branch!=$session_branch)
{
  header("location:../../users/list.php?u=1#errorMsg");
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

$qlist = "select * from profile p, fees f where f.usn=p.usn and f.sem=p.sem and p.sem in ($sem1,$sem2) and p.branch like '".$branch."' and f.amount!=0";//echo "$qlist";
$resList = mysqli_query($conn,$qlist);


$table  = '<div width="100%" align="center" style="margin-left: 0px;text-transform: uppercase;" >';
$table .= '<h3 style="text-align:center;">Government Engineering College, Hassan</h3><h2 style="text-align:center;">Eligible Students List</h2><h4>List of '".$branch."'- Year '".$year."'</h4>';
$table .= '<table class="table table-hover table-striped" border="1" style="border-style: solid;" id="testTable" align="center" style="text-transform: uppercase;">';
$table .= '<thead><tr>';
$table .= '<th>Sl. No</th><th>Reference No</th><th>USN</th><th>Name</th><th>Allotted Category</th><th>Fee Paid</th>';
$table .= '</tr></thead><tbody>';
$count  = '1';
while($rowList=mysqli_fetch_assoc($resList))
{
   $table .= "<tr><td>".$count++."</td><td>".$rowList['refNo']."</td><td>".$rowList['usn']."</td><td>".$rowList['name']."</td><td>".$rowList['allocatedCategory']."</td><td>".$rowList['amount']."</td></tr>";
}

$table .= "</tbody></table>"

/////////////////////////////////////////////////////////////////////////////////////////////////
$html = $table;
$html .= $table2;

include("../mpdf.php");
$mpdf=new mPDF('c','A4-L','','',10,10,10,10,10,10);
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);

$mpdf->WriteHTML($html);

$mpdf->Output();
exit;
?>



<?php


function showMonth($month, $year)
{
  $date = mktime(12, 0, 0, $month, 1, $year);
  $daysInMonth = date("t", $date);
  // calculate the position of the first day in the calendar (sunday = 1st column, etc)
  $offset = date("w", $date);
  $rows = 1;


  $table2 .= "<table border=\"0\" style='text-align:center;'  >\n";
  $table2 .= "<tr ><td  colspan='7'>" . date("F Y", $date) . "</td></tr>\n";
  $table2 .= "\t<tr ><th style='width:30px;' >Su</th><th style='width:30px;'>M</th><th style='width:30px;'>Tu</th><th style='width:30px;'>W</th><th style='width:30px;'>Th</th style='width:30px;'><th style='width:30px;'>F</th><th style='width:30px;'>Sa</th></tr>";
  $table2 .= "\n\t<tr>";

  for($i = 1; $i <= $offset; $i++)
  {
    $table2 .= "<td></td>";
  }

  for($day = 1; $day <= $daysInMonth; $day++)
  {
    if( ($day + $offset - 1) % 7 == 0 && $day != 1)
    {
      $table2 .= "</tr>\n\t<tr>";
      $rows++;
    }

    $table2 .= "<td>" . $day . "</td>";
  }

  while( ($day + $offset) <= $rows * 7)
  {
    $table2 .= "<td></td>";
    $day++;
  }

  $table2 .= "</tr>\n";
  $table2 .= "</table>\n";
}
?>
