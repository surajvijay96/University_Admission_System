<?php
	include('table.php');
include('../../config.php');
$usn = '4gh14cs008';



$copyname = "STUDENT";
$table2 = '<table class="table" style="width: 100%;font-size: 8px;border: 7mm solid aqua;border-collapse:collapse;" align="center" border="1" >';
$table2 .= '<tr>
		<th  ><div style="font-size:12px;" >
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>VISVESVARAYA TECHNOLOGICAL UNIVERSITY, BELAGAVI<b></div><br>
		<div style="font-size:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			ADMISSION TICKET FOR B.E CRASH COURSE - 2016-17</div><br><br>
		<!--<img src="newheader1.jpg" width="100%">-->
		<br> <br><br><div>
			<div style="float: left" align="left">
				1. UNIVERSITY SEAT NUMBER : '.strtoupper($usn).'
			</div>
			
		</div>
		</th>
		<th rowspan="2" style="width: 35mm;height:140px;"></th>
	</tr>';
	$table = $table2;

	$qname = "SELECT name from rp_profile where usn like '".$usn."'";
	$resName = mysqli_query($conn,$qname);
	$count ='0';
	while($rowName = mysqli_fetch_assoc($resName))
	{
	
	$name = strtoupper($rowName['name']);

	}

$table2 .= '<tr align="left">
		<th>2. NAME OF THE CANDIDATE &nbsp;&nbsp;: '.$name.'</th>
	</tr>';
$table2 .='<TR>
		<TD colspan="2"><b>3. SUBJECTS APPLIED
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		'.$copyname.' COPY</b>
		<BR><br>
		<div align="left" style="width: 90%;">';

		$subjects = "select * from rp_subjects where usn like '".$usn."'";
		$resSubjects = mysqli_query($conn,$subjects);
		while ($rowSubjects = mysqli_fetch_assoc($resSubjects))
		{
			$table2 .= "<span style='margin-right:6%;'>".$rowSubjects['scode']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
		}
		$table = $table2;



		$table2 .='</div>
		<br><br><P>Note: Please verify the eligibility of candidate before issueing the admission-ticket.<br>This is Electronically Generated Hallticket</P>
		<BR><BR><BR><div align="center">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<B>Signature of the Candidate</B>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Signature of the Principal</b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Registrar (Eval)/Special Officer</b></div></TD></TR>
	<tr><td colspan="2" bgcolor="grey">
	<div style="text-align: center">Candidate must read the instructions provided in the answer booklet, before the commencement of examination.</div>
	</td>
	</tr>
</table><br><br>';

$html = $table2;
//echo "$table";


$copyname = "COLLEGE";
$table2 = '<table class="table" style="width: 100%;font-size: 8px;border: 7mm solid aqua;border-collapse:collapse;" align="center" border="1" >';
$table2 .= '<tr>
		<th  ><div style="font-size:12px;" >
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>VISVESVARAYA TECHNOLOGICAL UNIVERSITY, BELAGAVI<b></div><br>
		<div style="font-size:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			ADMISSION TICKET FOR B.E CRASH COURSE - 2016-17</div><br><br>
		<!--<img src="newheader1.jpg" width="100%">-->
		<br> <br><br><div>
			<div style="float: left" align="left">
				1. UNIVERSITY SEAT NUMBER : '.strtoupper($usn).'
			</div>
			
		</div>
		</th>
		<th rowspan="2" style="width: 35mm"></th>
	</tr>';
	$table = $table2;

	$qname = "SELECT name from rp_profile where usn like '".$usn."'";
	$resName = mysqli_query($conn,$qname);
	$count ='0';
	while($rowName = mysqli_fetch_assoc($resName))
	{
	
	$name = strtoupper($rowName['name']);

	}

$table2 .= '<tr align="left">
		<th>2. NAME OF THE CANDIDATE &nbsp;&nbsp;: '.$name.'</th>
	</tr>';
$table2 .='<TR>
		<TD colspan="2"><b>3. SUBJECTS APPLIED
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		'.$copyname.' COPY</b>
		<BR><br>
		<div align="left" style="width: 90%;">';

		$subjects = "select * from rp_subjects where usn like '".$usn."'";
		$resSubjects = mysqli_query($conn,$subjects);
		while ($rowSubjects = mysqli_fetch_assoc($resSubjects))
		{
			$table2 .= "<span style='margin-right:6%;'>".$rowSubjects['scode']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
		}
		$table = $table2;



		$table2 .='</div>
		<br><br><P>Note: Please verify the eligibility of candidate before issueing the admission-ticket.<br>This is Electronically Generated Hallticket</P>
		<BR><BR><BR><div align="center">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<B>Signature of the Candidate</B>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Signature of the Principal</b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Registrar (Eval)/Special Officer</b></div></TD></TR>
	<tr><td colspan="2" bgcolor="grey">
	<div style="text-align: center">Candidate must read the instructions provided in the answer booklet, before the commencement of examination.</div>
	</td>
	</tr>
</table><br><br>';

$html2 = $table2;


$copyname = "UNIVERSITY";
$table2 = '<table class="table" style="width: 100%;font-size: 8px;border: 7mm solid aqua;border-collapse:collapse;" align="center" border="1" >';
$table2 .= '<tr>
		<th  ><div style="font-size:12px;" >
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>VISVESVARAYA TECHNOLOGICAL UNIVERSITY, BELAGAVI<b></div><br>
		<div style="font-size:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			ADMISSION TICKET FOR B.E CRASH COURSE - 2016-17</div><br><br>
		<!--<img src="newheader1.jpg" width="100%">-->
		<br> <br><br><div>
			<div style="float: left" align="left">
				1. UNIVERSITY SEAT NUMBER : '.strtoupper($usn).'
			</div>
			
		</div>
		</th>
		<th rowspan="2" style="width: 35mm"></th>
	</tr>';
	$table = $table2;

	$qname = "SELECT name from rp_profile where usn like '".$usn."'";
	$resName = mysqli_query($conn,$qname);
	$count ='0';
	while($rowName = mysqli_fetch_assoc($resName))
	{
	
	$name = strtoupper($rowName['name']);

	}

$table2 .= '<tr align="left">
		<th>2. NAME OF THE CANDIDATE &nbsp;&nbsp;: '.$name.'</th>
	</tr>';
$table2 .='<TR>
		<TD colspan="2"><b>3. SUBJECTS APPLIED
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		'.$copyname.' COPY</b>
		<BR><br>
		<div align="left" style="width: 90%;">';

		$subjects = "select * from rp_subjects where usn like '".$usn."'";
		$resSubjects = mysqli_query($conn,$subjects);
		while ($rowSubjects = mysqli_fetch_assoc($resSubjects))
		{
			$table2 .= "<span style='margin-right:6%;'>".$rowSubjects['scode']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
		}
		$table = $table2;



		$table2 .='</div>
		<br><br><P>Note: Please verify the eligibility of candidate before issueing the admission-ticket.<br>This is Electronically Generated Hallticket</P>
		<BR><BR><BR><div align="center">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<B>Signature of the Candidate</B>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Signature of the Principal</b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Registrar (Eval)/Special Officer</b></div></TD></TR>
	<tr><td colspan="2" bgcolor="grey">
	<div style="text-align: center">Candidate must read the instructions provided in the answer booklet, before the commencement of examination.</div>
	</td>
	</tr>
</table>';

$html3 = $table2;





include("../mpdf.php");
$mpdf=new mPDF('c','A4','','',32,25,27,25,16,13);
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;    
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1); 
$mpdf->WriteHTML($html);
$mpdf->WriteHTML($html2);
$mpdf->WriteHTML($html3);
$mpdf->Output();
exit;
?>