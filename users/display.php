<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search Results</title>

    	<link rel="stylesheet" href="../css/bootstrap.min.css">
    	<script src="../js/jquery.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
    	<link rel="../stylesheet" href="css/style.css">

      <?php
        include("config.php");
        include("navbar.php");
        $usn = $_GET['usn'];

       ?>
  </head>
  <body>
    <?php
      $existanceCheck = "select * from profile where usn like '".$usn."'";
      $resExistance = mysqli_query($conn,$existanceCheck);
      if(mysqli_num_rows($resExistance)!=1)
      {
        echo "<h4>No Data Found For ".$usn."</h4>";

        $topRes = "select usn,name from profile where usn like '%".$usn."%' order by usn limit 15";
        $rTopRes = mysqli_query($conn,$topRes);
        if(mysqli_num_rows($rTopRes)>0)
        {
          echo "<hr />";
          echo "<h4>You could be looking for...</h4>";
          while ($rowTopRes = mysqli_fetch_assoc($rTopRes))
          {
            echo "<b><a href='display.php?usn=".$rowTopRes['usn']."'>".$rowTopRes['usn']." - ".$rowTopRes['name']."</a></b><br />";
          }
        }
      }
      else
      {
        $rowExistance = mysqli_fetch_assoc($resExistance);
        ?>
        <div class="container">
          <div class="row">
            <diV style="float:left;padding-left:20px;">
              <h3><?php echo "".strtoupper($usn).""; ?></h3>
            </div>
            <div style="float:right;padding-right:20px;">
              <h3>
              <span style="padding-right:100px;">
              <?php
                if($rowExistance['allowed']=='true')
                  echo "Status:Allowed";
                else
                  echo "Status:Denied";
               ?>
               </span>
              <a style="padding-right:100px;" href="editProfile.php?usn=<?php echo "".$usn.""; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="#"><span  data-toggle="modal" data-target="#myModal"  style="color:red" class="glyphicon glyphicon-trash"></span></a>
              </h3>
            </div>
          </div>
          <table class="table table-striped table-hover" style="text-transform:capitalize" border="1">
            <tr>
              <th colspan="2" style="background-color:grey">General Information</th>
            </tr>
            <tr>
              <th>Reference Number</th><td><?php echo "".$rowExistance['refNo'].""; ?></td>
            </tr>
            <tr>
              <th>USN</th><td><?php echo "".strtoupper($rowExistance['usn']).""; ?></td>
            </tr>
            <tr>
              <th>Name</th><td><?php echo "".$rowExistance['name'].""; ?></td>
            </tr>
            <tr>
              <th>Father's Name</th><td><?php echo "".$rowExistance['father'].""; ?></td>
            </tr>
            <tr>
              <th>Mother's Name</th><td><?php echo "".$rowExistance['mother'].""; ?></td>
            </tr>
            <tr>
              <th>Gender</th><td><?php echo "".$rowExistance['sex'].""; ?></td>
            </tr>
            <tr>
              <th>CET Rank</th><td><?php echo "".$rowExistance['cet'].""; ?></td>
            </tr>
            <tr>
              <th>Actual Category</th><td><?php echo "".$rowExistance['actualCategory'].""; ?></td>
            </tr>
            <tr>
              <th>Allotted Category</th><td><?php echo "".$rowExistance['allocatedCategory'].""; ?></td>
            </tr>
            <tr>
              <th>Caste</th><td><?php echo "".$rowExistance['caste'].""; ?></td>
            </tr>
            <tr>
              <th>Annual Income</th><td><?php echo "".$rowExistance['income'].""; ?></td>
            </tr>
            <tr>
              <th>Branch</th><td><?php echo "".$rowExistance['branch'].""; ?></td>
            </tr>
            <tr>
              <th>Based On</th><td><?php echo "".strtoupper($rowExistance['puOrDip']).""; ?></td>
            </tr>
            <tr>
              <th>Permanent Address</th><td><?php echo "".$rowExistance['permanentAddress'].""; ?></td>
            </tr>
            <tr>
              <th>Correspondence Address</th><td><?php echo "".$rowExistance['correspondenceAddress'].""; ?></td>
            </tr>
            <tr>
              <th>Residence Phone Number</th><td><?php echo "".$rowExistance['residencePhone'].""; ?></td>
            </tr>
            <tr>
              <th>Student Phone Number</th><td><?php echo "".$rowExistance['studentPhone'].""; ?></td>
            </tr>
            <tr>
              <th>Email</th><td><?php echo "".$rowExistance['email'].""; ?></td>
            </tr>
            <tr>
              <th>Bank Account Number</th><td><?php echo "".$rowExistance['accno'].""; ?></td>
            </tr>
            <tr>
              <th>Epic Number</th><td><?php echo "".$rowExistance['epicNo'].""; ?></td>
            </tr>
            <tr>
              <th>Aadhar Number</th><td><?php echo "".$rowExistance['aadhar'].""; ?></td>
            </tr>
            <tr>
              <th>Blood Group</th><td><?php echo "".$rowExistance['bloodGroup'].""; ?></td>
            </tr>
            <tr>
              <th>Scheme</th><td><?php echo "".$rowExistance['scheme'].""; ?></td>
            </tr>
            <tr>
              <th>Semester</th><td><?php echo "".$rowExistance['sem'].""; ?></td>
            </tr>
            <?php
              if($rowExistance['puOrDip']=='pu')
              {
                $qPuMarks = "select * from oldPuMarks where usn like '".$usn."'";
                $resPuMarks = mysqli_query($conn,$qPuMarks);
                $rowPuMarks = mysqli_fetch_assoc($resPuMarks);
                ?>
                <tr>
                  <th colspan="2" style="background-color:grey">PUC Marks</th>
                </tr>
                <tr>
                  <th>Physics</th><td><?php echo "".$rowPuMarks['p'].""; ?></td>
                </tr>
                <tr>
                  <th>Chemistry</th><td><?php echo "".$rowPuMarks['c'].""; ?></td>
                </tr>
                <tr>
                  <th>Mathematics</th><td><?php echo "".$rowPuMarks['m'].""; ?></td>
                </tr>
                <tr>
                  <th>Biology/CS/Electricals</th><td><?php echo "".$rowPuMarks['bcse'].""; ?></td>
                </tr>
                <?php
              }
              else
              {
                $qDipMarks = "select * from dipMarks where usn like '".$usn."'";
                $resDipMarks = mysqli_query($conn,$qDipMarks);
                $rowDipMarks = mysqli_fetch_assoc($resDipMarks);
                ?>
                <tr>
                  <th>Diploma Marks</th><td><?php echo "".$rowDipMarks['marks'].""; ?></td>
                </tr>
                <?php
              }
             ?>
             <tr>
               <th colspan="2" style="background-color:grey">Enclosure Details</th>
             </tr>
             <?php
                $qEnclosures = "select * from enclosures where usn like '".$usn."'";
                $resEnclosures = mysqli_query($conn,$qEnclosures);
                $rowEnclosures = mysqli_fetch_assoc($resEnclosures);
              ?>
              <tr>
                <th>Fee Paid Challan </th><td><?php if($rowEnclosures['feeChallan']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>TC/Migration certificate  </th><td><?php if($rowEnclosures['tcOrMigrationCertificate']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>CET Allotment Card</th><td><?php if($rowEnclosures['cetAllotment']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>Diploma marks card</th><td><?php if($rowEnclosures['diplomaMarksCards']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>SSLC marks card </th><td><?php if($rowEnclosures['sslcMarksCard']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>Affidavit</th><td><?php if($rowEnclosures['affidavit']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>PUC marks card  </th><td><?php if($rowEnclosures['pucMarksCard']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>Passport Size Photos(4) </th><td><?php if($rowEnclosures['passportPhoto']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>Caste certificate  </th><td><?php if($rowEnclosures['casteCertificate']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>Income Certificate</th><td><?php if($rowEnclosures['incomeCertificate']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>Kannada Medium Certificate</th><td><?php if($rowEnclosures['kannadaMediumCertificate']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>Rural Study Certificate</th><td><?php if($rowEnclosures['ruralCertificate']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th>Self addressed portal covers(08)</th><td><?php if($rowEnclosures['postalCovers']=='true') echo "submitted"; else echo "Not Submitted"; ?></td>
              </tr>
              <tr>
                <th colspan="2" style="background-color:grey">Fee Details</th>
              </tr>
              <?php
                $qFeeDetails = "select * from fees where usn like '".$usn."'";
                $resFeeDetails = mysqli_query($conn,$qFeeDetails);
                $rowFeeDetails = mysqli_fetch_assoc($resFeeDetails);
               ?>
               <tr>
                 <th>Amount Of Fee Paid</th><td><?php echo "".$rowFeeDetails['amount'].""; ?></td>
               </tr>
               <tr>
                 <th>Receipt Or Challan Number</th><td><?php echo "".$rowFeeDetails['receiptNo'].""; ?></td>
               </tr>
               <tr>
                 <th>Date of Payment</th><td><?php echo "".$rowFeeDetails['date'].""; ?></td>
               </tr>
          </table>

        </div>
        <?php
      }

     ?>

     <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirmation</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete records of <?php echo "".$usn.""; ?>?</p>
      </div>
      <div class="modal-footer">
        <a href="deleteStudentUsnDetails.php?usn=<?php echo "".$usn.""; ?>" style="float:left"><button type="button" class="btn btn-danger" name="button">Delete</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  </body>
</html>
