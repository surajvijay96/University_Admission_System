<!DOCTYPE html>
<html>
<head>
<title>Edit/Insert Profile</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-toggle.min.css">
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-toggle.min.js"></script>
<?php
 include("navbar.php");
 ?>
 </head>
<style type="text/css">

.heading{
  height: 100%;
  width: 950px;
  /*border:1px solid black;*/
  margin-left: 12%;
  margin: auto;
  display: block;
  box-shadow: 3px 3px 3px 3px #888888;
  background-color: ;
  padding-left: 10px;
  padding-right: 10px;

}
table {
  border-collapse: collapse;
}
td {

  padding: 8px;
  background-color: #ddd;
  border: 1px solid #898989;
}
.labeled{
  padding: 0;
}
input[type=checkbox] {
    margin: 0 auto;
    display: table;
}
.labeled label {
  display: inline-block;
  padding: 8px;
  background-color: rgba(0, 200, 0, .3);
}


</style>


 <script>

    $( function() {
      $( ".datepicker" ).datepicker();
    } );

  </script>


<?php

  if(isset($_GET['usn']))
  {
    $usn = $_GET['usn'];
  }

  $qProfile = "select * from profile where usn like '".$usn."'";
  $rProfile = mysqli_query($conn,$qProfile);
  $rowProfile = mysqli_fetch_assoc($rProfile);

  $qPuMarks = "select * from oldPuMarks where usn like '".$usn."'";
  $resPuMarks = mysqli_query($conn,$qPuMarks);
  $rowPuMarks = mysqli_fetch_assoc($resPuMarks);

  $qDipMarks = "select * from dipMarks where usn like '".$usn."'";
  $resDipMarks = mysqli_query($conn,$qDipMarks);
  $rowDipMarks = mysqli_fetch_assoc($resDipMarks);

  $qEnclosures = "select * from enclosures where usn like '".$usn."'";
  $resEnclosures = mysqli_query($conn,$qEnclosures);
  $rowEnclosures = mysqli_fetch_assoc($resEnclosures);

  $qFeeDetails = "select * from fees where usn like '".$usn."'";
  $resFeeDetails = mysqli_query($conn,$qFeeDetails);
  $rowFeeDetails = mysqli_fetch_assoc($resFeeDetails);



 ?>
<div style="width:100%;height:150px;background-color:grey"  >
  <br />
  <div style="float:left">
    <form action="editProfile.php" method="get" style="padding-left:20px;">
    <h4>Search USN to Modify</h4>
    <input type="text" name="usn" required>
    <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info">
  </form>
  </div>
  <div style="float:right;">
    <form class="" action="editProfile.php" method="post">
      <a href="#" data-toggle="tooltip" title="Add New User">
        <button class="btn btn-lg btn-success" style="margin-top:40px;margin-right:50px;">
          <span class="glyphicon glyphicon-plus" type="submit" style="color: white;font-size: 20px;"></span>
        </button></a>

    </form>
  </div>

</div>
<br />
<br /><br />
<body>
  <div class="heading">


  <div class="container">
    <?php
    if(!(isset($_GET['usn'])))
      echo "<h1>Registration Form</h1>";
    else
      echo "<h1>Modify</h1>";
    ?>
	<div class="col-lg-9 well">
	<div class="row">
				<form method="post" action="updateProfile.php">
					<div class="col-sm-12">
            <div class="form-group">
              <label>Status</label><br />
                <input <?php if($rowProfile['allowed']=='true') echo "checked"; ?> name="allowed" value='true' data-toggle="toggle" data-on="Allowed" data-off="Denied" data-onstyle="success" data-offstyle="danger" type="checkbox">
              </div>
            <div class="form-group">
              <label>Reference Number</label>
              <input type="text" placeholder="Enter Student Reference Number.." name="refNo" class="form-control" value="<?php echo "".$rowProfile['refNo'].""  ?>" required pattern="[0-9]+">
            </div>

            <div class="form-group">
              <label>USN</label>
              <input type="text" placeholder="Enter Student USN.." name="usn" class="form-control" value="<?php echo "".$rowProfile['usn']."" ?>" required="" pattern="[0-9][a-zA-Z]{2}[0-9]{2}[a-zA-Z]{2}[a-zA-Z0-9][0-9]{2}$">
            </div>

							<div class="form-group">
								<label>Student Name</label>
								<input type="text" placeholder="Enter Student Name Here.." style="text-transform:capitalize;" name="name" class="form-control" value="<?php echo "".$rowProfile['name']."" ?>" required pattern="[a-zA-Z ]+">
							</div>
							<div class="form-group">
								<label>Father Name</label>
								<input type="text" placeholder="Enter Father's Name Here.." style="text-transform:capitalize;" name="father" class="form-control" value="<?php echo "".$rowProfile['father']."" ?>"  required pattern="[a-zA-Z ]+">
							</div>
              <div class="form-group">
								<label>Mother Name</label>
								<input type="text" placeholder="Enter Mother's Name Here.." style="text-transform:capitalize;"  name="mother" class="form-control" value="<?php echo "".$rowProfile['mother']."" ?>"  required pattern="[a-zA-Z ]+">
							</div>

              <div class="form-group">
                <label>Gender :</label><br /><input name="gender" type="radio" value="male" checked> Male <br /> <input name="gender" value="female" type="radio"> Female
              </div><br>

            <div class="form-group">
              <label>CET ranking</label>
              <input type="number" min="0" placeholder="Enter student's cet ranking.." name="cet" class="form-control" style="text-transform:uppercase;" value="<?php echo "".$rowProfile['cet']."" ?>"  required pattern="[0-9a-zA-Z]+">
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Actual Category</label>
                <input type="text" pattern="^[a-zA-Z0-9 ]+$" required name="actualCategory" placeholder="Enter actual category.." class="form-control" value="<?php echo "".$rowProfile['actualCategory']."" ?>">
              </div>
              <div class="col-sm-6 form-group">
                <label>Seat Allocated category</label>
                <input type="text" pattern="^[a-zA-Z0-9 ]+$" required name="allocatedCategory" placeholder="Enter engineering seat allocated category.." class="form-control" value="<?php echo "".$rowProfile['allocatedCategory']."" ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Caste</label>
                <input type="text" required pattern="^[a-zA-Z ]+$" placeholder="Enter caste of student" name="caste" class="form-control" value="<?php echo "".$rowProfile['caste']."" ?>">
              </div>
              <div class="col-sm-6 form-group">
                <label>Income</label>
                <input type="number" min="0" required pattern="^[0-9]+$" placeholder="Enter annual income" name="income" class="form-control" value="<?php echo "".$rowProfile['income']."" ?>">
              </div>
            </div>

            <div class="form-group">
  							<label>Branch</label><br />
  							<select class="form-group selectpicker" name="branch">
                  <?php echo "<option value='".$rowProfile['branch']."'>".$rowProfile['branch']."</option>"; ?>
  							  <option value="cse">Computer Science & Engineering</option>
                  <option value="ece">Electronics & Communication Engineering</option>
                  <option value="civil">Civil Engineering</option>
                  <option value="mechanical">Mechanical Engineering</option>

  							</select>
  					</div>

            <div class="form-group">
              <label>Based On :</label><br />
              <input name="puOrDip" type="radio" value="pu" <?php if($rowProfile['puOrDip']=='pu') echo "checked"; ?> > PUC <br />
              <input name="puOrDip" value="diploma" type="radio" <?php if($rowProfile['puOrDip']=='diploma') echo "checked"; ?> >Diploma
            </div><br>


            <div class=" form-group">
            <label> PUC Marks(If based on PUC)</label>
            </div>
                <div class="row">

                  <div class="col-sm-2 form-group">
                  <label>Physics</label>
                    <input type="number" min="0" name="p" class="form-control" value="<?php echo "".$rowPuMarks['p'].""; ?>">
                  </div>
                  <div class="col-sm-2 form-group">
                  <label>Chemistry</label>
                    <input type="number" min="0" name="c" class="form-control" value="<?php echo "".$rowPuMarks['c'].""; ?>" >
                  </div>
                  <div class="col-sm-2 form-group">
                  <label>Mathematics</label>
                    <input type="number" min="0" name="m" class="form-control" value="<?php echo "".$rowPuMarks['m'].""; ?>">
                  </div>
                  <div class="col-sm-2 form-group">
                  <label>CS/B/E</label>
                    <input type="number" min="0" name="bcse" class="form-control" value="<?php echo "".$rowPuMarks['bcse'].""; ?>">
                  </div>
                </div><br />

                <div class="cform-group">
                <label>Diploma Marks(If based on Diploma)</label>
                </div><br>
                <div class="row">
                  <div class="col-sm-2 form-group">
                  <label>Marks</label>
                    <input type="number" name="marks" min="0" class="form-control" value="<?php echo "".$rowDipMarks['marks'].""; ?>">
                  </div>
                </div>

						<div class="form-group">
  							<label>Permanent Address</label>
  							<textarea placeholder="Enter Address Here.." required pattern="^[a-zA-Z0-9 ]+$" name="permanentAddress" rows="3" class="form-control"><?php echo "".$rowProfile['permanentAddress']."" ?></textarea>
  						</div>
            <h4>(Ignore if both the address are same)</h4>
            <div class="form-group">
              <label>Address for correspondance</label>
              <textarea placeholder="Enter Address Here.." name="correspondenceAddress" pattern="^[a-zA-Z0-9 ]+$" rows="3" class="form-control"><?php echo "".$rowProfile['correspondenceAddress']."" ?></textarea>
            </div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Recidence phone number</label>
								<input type="number" maxlength="10"  pattern="[0-9]{10}" name="residencePhone" placeholder="Enter parent's phone number.." class="form-control" value="<?php echo "".$rowProfile['residencePhone']."" ?>">
							</div>
							<div class="col-sm-6 form-group">
								<label>Student's phone number</label>
								<input type="number" maxlength="10" name="studentPhone"  pattern="[0-9]{10}" placeholder="Enter student's phone number here.." class="form-control" value="<?php echo "".$rowProfile['studentPhone']."" ?>">
							</div>
						</div>

          <div class="form-group">
						<label>Email Address</label>
						<input type="email" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required id="email_id" name="email" placeholder="Enter Email Address Here.." class="form-control" value="<?php echo "".$rowProfile['email']."" ?>">
					</div>


          <div class="form-group">
            <label>Bank Account Number</label>
            <input type="number" name="accno" required placeholder="Enter student's Bank Account Number.." class="form-control" value="<?php echo "".$rowProfile['accno']."" ?>">
          </div>

          <div class="form-group">
            <label>Aadhar Number</label>
            <input type="number" name="aadhar" required  placeholder="Enter student's Aadhar Number.." class="form-control" value="<?php echo "".$rowProfile['aadhar']."" ?>">
          </div>

          <div class="form-group">
            <label>Epic Card Number</label>
            <input type="number" name="epicNo" required  placeholder="Enter student's Epic Card Number.." class="form-control" value="<?php echo "".$rowProfile['epicNo']."" ?>">
          </div>

    <div class="form-group">
      <label>Blood group</label><br /><input pattern="^(A|B|AB|O|a|b|ab|o)[+-]$" required name="bloodGroup" class="form-group" type="yexy" value="<?php echo "".$rowProfile['bloodGroup']."" ?>">
    </div>

    <div class="form-group">
      <label>Semester</label><br /><!--<input  class="form-group" required min="0"  name="sem" type="yexy number" value="<?php echo "".$rowProfile['sem']."" ?>">-->
      <select class="selectpicker" name="sem" required>
        <option value="<?php echo "".$rowProfile['sem']."" ?>"><?php echo "".$rowProfile['sem']."" ?></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>
    </div>

    <div class="form-group">
      <label>Scheme</label><br /><input required  class="form-group" name="scheme" type="yexy" value="<?php echo "".$rowProfile['scheme']."" ?>">
    </div>


  </div>



<h4>(Please tick the box given below if corresponding document is submited)</h4>

<div>
 <table class="table table-striped table-condensed">
   <tbody class="thead-default">
   <tr>
     <td><label>Fee Paid Challan  </label></td>
     <td><input name="feeChallan"  value="true" type="checkbox" <?php if($rowEnclosures['feeChallan']=='true') echo "checked"; ?> ></td>
     <td><label>TC/Migration certificate  </label></td>
     <td><input name="tcOrMigrationCertificate" value="true" type="checkbox" <?php if($rowEnclosures['tcOrMigrationCertificate']=='true') echo "checked"; ?> ></td>
   </tr>
 <tr>
   <td><label>CET Allotment Card</label></td>
   <td><input name="cetAllotment" type="checkbox" value="true" <?php if($rowEnclosures['cetAllotment']=='true') echo "checked"; ?> ></td>
   <td><label>Diploma marks card</label></td>
   <td><input name="diplomaMarksCards" type="checkbox" value="true" <?php if($rowEnclosures['diplomaMarksCards']=='true') echo "checked"; ?> ></td>
 </tr>
 <tr>
   <td><label>SSLC marks card </label></td>
   <td><input name="sslcMarksCard" type="checkbox" value="true" <?php if($rowEnclosures['sslcMarksCard']=='true') echo "checked"; ?> ></td>
   <td><label>Affidavit</label></td>
   <td><input name="affidavit" value="true" type="checkbox" <?php if($rowEnclosures['affidavit']=='true') echo "checked"; ?> ></td>

 </tr>
 <tr>

   <td><label>PUC marks card  </label></td>
   <td><input name="pucMarksCard" value="true" type="checkbox" <?php if($rowEnclosures['pucMarksCard']=='true') echo "checked"; ?> ></td>
   <td><label>Passport Size Photos(4) </label></td>
   <td><input name="passportPhoto" type="checkbox" value="true" <?php if($rowEnclosures['passportPhoto']=='true') echo "checked"; ?> ></td>

 </tr>
 <tr>
   <td><label>Caste certificate  </label></td>
    <td><input name="casteCertificate" type="checkbox" value="true" <?php if($rowEnclosures['casteCertificate']=='true') echo "checked"; ?> ></td>

   <td><label>Income Certificate</label></td>
   <td><input name="incomeCertificate" value="true" type="checkbox" <?php if($rowEnclosures['incomeCertificate']=='true') echo "checked"; ?> ></td>

 </tr>

 <tr>
      <td><label>Kannada Medium Certificate</label></td>
      <td><input name="kannadaMediumCertificate" value="true" type="checkbox" <?php if($rowEnclosures['kannadaMediumCertificate']=='true') echo "checked"; ?> ></td>
      <td><label>Rural Study Certificate</label></td>
      <td><input name="ruralCertificate" type="checkbox" value="true" <?php if($rowEnclosures['ruralCertificate']=='true') echo "checked"; ?> ></td>
 </tr>

  <tr>
       <td><label>Self addressed portal covers(08)</label></td>
       <td><input name="postalCovers" value="true" type="checkbox" <?php if($rowEnclosures['postalCovers']=='true') echo "checked"; ?> ></td>
       <td><label></label></td>
       <td></td>
  </tr>
</tbody>
 </table>
 <h4>Fee Details</h4>

 <div class="form-group">
   <label>Amount of Fee Paid</label>
   <input type="text" name="amount" required pattern="[0-9]+" class="form-control" value="<?php echo "".$rowFeeDetails['amount'].""; ?> ">
 </div>

 <div class="form-group">
   <label>Receipt/ Challan Number</label>
   <input type="text" name="receiptNo"  required pattern="[0-9]+" class="form-control" value="<?php echo "".$rowFeeDetails['receiptNo'].""; ?> ">
 </div>

 <div class="form-group">
   <label>Date of Payment</label>
   <!--<input type="date" name="date" class="form-control" value="<?php echo "".$rowFeeDetails['date'].""; ?> ">-->
   <div class="input-group date form_datetime col-md-5" style="width: 10%;"  data-link-field="date">
     <input class="form-control" style="width: 200px;background-color: lightgreen;" id="date" required name="date" type="text" value="<?php echo "".date("Y-m-d").""; ?>"  readonly>
     <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
   </div>
 </div>

</div>

<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info">

	</div>
  </form>
	</div>
	</div>
	</div>
</div>
</body>
</html>
