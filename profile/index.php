<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "<a href="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Register</title>
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

<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
</head>
<?php
  include("navbar.php");
  session_start();
 ?>
<br />
<body>
  <div class="heading">


  <div class="container">
    <h1>Registration Form</h1>
	<div class="col-lg-9 well">
	<div class="row">
				<form method="post" action="insertProfile.php">
					<div class="col-sm-12">
            <div class="form-group">
              <label>Reference Number</label>
              <input type="text" placeholder="Enter Student Reference Number.." name="refNo" class="form-control">
            </div>

            <div class="form-group">
              <label>USN</label>
              <input type="text" placeholder="Enter Student USN.." name="usn" class="form-control">
            </div>

							<div class="form-group">
								<label>Student Name</label>
								<input type="text" placeholder="Enter Student Name Here.." name="name" class="form-control">
							</div>
							<div class="form-group">
								<label>Father Name</label>
								<input type="text" placeholder="Enter Father's Name Here.." name="father" class="form-control">
							</div>
              <div class="form-group">
								<label>Mother Name</label>
								<input type="text" placeholder="Enter Mother's Name Here.."  name="mother" class="form-control">
							</div>

              <div class="form-group">
                <label>Gender :</label><br /><input name="gender" type="radio" value="male" checked> Male <br /> <input name="gender" value="female" type="radio"> Female
              </div><br>

            <div class="form-group">
              <label>CET ranking</label>
              <input type="number" placeholder="Enter student's cet ranking.." name="cet" class="form-control">
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Actual Category</label>
                <input type="text" pattern="^[a-zA-Z0-9 ]+$" name="actualCategory" placeholder="Enter actual category.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Seat Allocated category</label>
                <input type="text" pattern="^[a-zA-Z0-9 ]+$" name="allocatedCategory" placeholder="Enter engineering seat allocated category.." class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Caste</label>
                <input type="text" placeholder="Enter caste of student" name="caste" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Income</label>
                <input type="number" placeholder="Enter annual income" name="income" class="form-control">
              </div>
            </div>

            <div class="form-group">
  							<label>Branch</label><br />
  							<select class="form-group selector" name="branch">
  							  <option value="cse">Computer Science & Engineering</option>
                  <option value="ece">Electronics & Communication Engineering</option>
                  <option value="civil">Civil Engineering</option>
                  <option value="mechanical">Mechanical Engineering</option>

  							</select>
  					</div>

            <div class="form-group">
              <label>Based On :</label><br /><input name="puOrDip" type="radio" value="pu" checked> PUC <br /> <input name="puOrDip" value="diploma" type="radio">Diploma
            </div><br>


            <div class=" form-group">
            <label> PUC Marks(If based on PUC)</label>
            </div>
                <div class="row">

                  <div class="col-sm-2 form-group">
                  <label>Physics</label>
                    <input type="number" name="p" class="form-control">
                  </div>
                  <div class="col-sm-2 form-group">
                  <label>Chemistry</label>
                    <input type="number" name="c" class="form-control">
                  </div>
                  <div class="col-sm-2 form-group">
                  <label>Mathematics</label>
                    <input type="number" name="m" class="form-control">
                  </div>
                  <div class="col-sm-2 form-group">
                  <label>CS/B/E</label>
                    <input type="number" name="bcse" class="form-control">
                  </div>
                </div><br />

                <div class="cform-group">
                <label>Diploma Marks(If based on Diploma)</label>
                </div><br>
                <div class="row">
                  <div class="col-sm-2 form-group">
                  <label>Marks</label>
                    <input type="number" name="marks" class="form-control">
                  </div>
                </div>

						<div class="form-group">
  							<label>Permanent Address</label>
  							<textarea placeholder="Enter Address Here.." name="permanentAddress" rows="3" class="form-control"></textarea>
  						</div>
            <h4>(Ignore if both the address are same)</h4>
            <div class="form-group">
              <label>Address for correspondance</label>
              <textarea placeholder="Enter Address Here.." name="correspondenceAddress" rows="3" class="form-control"></textarea>
            </div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Recidence phone number</label>
								<input type="number" maxlength="10"  pattern="[0-9]{10}" name="residencePhone" placeholder="Enter parent's phone number.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Student's phone number</label>
								<input type="number" maxlength="10" name="studentPhone"  pattern="[0-9]{10}" placeholder="Enter student's phone number here.." class="form-control">
							</div>
						</div>

          <div class="form-group">
						<label>Email Address</label>
						<input type="email" id="email_id" name="email" placeholder="Enter Email Address Here.." class="form-control">
					</div>


          <div class="form-group">
            <label>Bank Account Number</label>
            <input type="number" name="accno" placeholder="Enter student's Bank Account Number.." class="form-control">
          </div>

          <div class="form-group">
            <label>Aadhar Number</label>
            <input type="number" name="aadhar" placeholder="Enter student's Aadhar Number.." class="form-control">
          </div>

          <div class="form-group">
            <label>Epic Card Number</label>
            <input type="number" name="epicNo" placeholder="Enter student's Epic Card Number.." class="form-control">
          </div>

    <div class="form-group">
      <label>Blood group</label><br /><input pattern="^(A|B|AB|O|a|b|ab|o)[+-]$" name="bloodGroup" class="form-group" type="yexy">
    </div>

    <div class="form-group">
      <label>Semester</label><br /><input  class="form-group"  name="sem" type="yexy number">
    </div>

    <div class="form-group">
      <label>Scheme</label><br /><input  class="form-group" name="scheme" type="yexy">
    </div>


  </div>



<h4>(Please tick the box given below if corresponding document is submited)</h4>

<div>
 <table class="table table-striped table-condensed">
   <tbody class="thead-default">
   <tr>
     <td><label>Fee Paid Challan  </label></td>
     <td><input name="feeChallan" value="true" type="checkbox"></td>
     <td><label>TC/Migration certificate  </label></td>
     <td><input name="tcOrMigrationCertificate" value="true" type="checkbox"></td>
   </tr>
 <tr>
   <td><label>CET Allotment Card</label></td>
   <td><input name="cetAllotment" type="checkbox" value="true"></td>
   <td><label>Diploma marks card</label></td>
   <td><input name="diplomaMarksCards" type="checkbox" value="true"></td>
 </tr>
 <tr>
   <td><label>SSLC marks card </label></td>
   <td><input name="sslcMarksCard" type="checkbox" value="true"></td>
   <td><label>Affidavit</label></td>
   <td><input name="affidavit" value="true" type="checkbox"></td>

 </tr>
 <tr>

   <td><label>PUC marks card  </label></td>
   <td><input name="pucMarksCard" value="true" type="checkbox"></td>
   <td><label>Passport Size Photos(4) </label></td>
   <td><input name="passportPhoto" type="checkbox" value="true"></td>

 </tr>
 <tr>
   <td><label>Caste certificate  </label></td>
    <td><input name="casteCertificate" type="checkbox" value="true"></td>

   <td><label>Income Certificate</label></td>
   <td><input name="incomeCertificate" value="true" type="checkbox"></td>

 </tr>

 <tr>
      <td><label>Kannada Medium Certificate</label></td>
      <td><input name="kannadaMediumCertificate" value="true" type="checkbox"></td>
      <td><label>Rural Study Certificate</label></td>
      <td><input name="ruralCertificate" type="checkbox" value="true"></td>
 </tr>

  <tr>
       <td><label>Self addressed portal covers(08)</label></td>
       <td><input name="postalCovers" value="true" type="checkbox"></td>
       <td><label></label></td>
       <td></td>
  </tr>
</tbody>
 </table>
</div>

<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info">

	</div>
  </form>
	</div>
	</div>
	</div>
</div>
</body>
</html
