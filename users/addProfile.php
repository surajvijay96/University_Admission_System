<?php
	include("config.php");
	if(!isset($login_session))
	{
		header("location:index.php");
	}

  $findPriv = "select priority from login where username like '".$username."'";//echo "$findPriv";
  $resPriv = mysqli_query($conn,$findPriv);
  $rowPriv = mysqli_fetch_assoc($resPriv);
  $prev = $rowPriv['priv'];//echo "$prev";

	include("navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>History</title>


	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/jqui.css">
  	<script src="../jq_cal1.js"></script>
 	<script src="../js/jq_cal2.js"></script>
 	<!-- for datepicker -->
 	<script type="text/javascript" src="../datepicker/bootstrap-datepicker.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="../datepicker/bootstrap-datepicker3.css">
</head>

<style type="text/css">

	#header-image {
		width: 100%;
	}

	th{
    text-transform: uppercase;
		background-color: 333333;
		color: white;
	}
	html {
 		min-height: 100%;
    	position: relative;
	}
	body {
  		/* Margin bottom by footer height */
  		margin-bottom: 60px;
	}
	#footer {
  		position: absolute;
  		bottom: 0;
  		width: 100%;
  		min-height: 80px;
  		height: 60px;
  		background-color: rgba(0,0,0,0.7);
	}
  .top-form {
    position: absolute;
    background-color: #f3f3f3;
    height: 400px;
    width: 100%;
    border: solid;
  }
  .main-form {
    position: absolute;
    margin-top: 400px;
    align-self: center;
    align-content: center;

  }
  select{
    text-transform: uppercase;
  }


  .input-label {
    background-color: #f3f3f3;
    padding-top: 0px;
    width: 100%;
    padding-bottom: 10px;
    padding-left: 10px;
    border-radius: 3px;

  }

  .input-label:hover
  {
    background-color: #f3f3f0;
  }

  .input {
    margin-left: 0px;
    width: 40%;
    height: 40px;
    transition: width .5s ease 0s;
  }

  .input:hover
  {
    width: 60%;
    border-color: #4fbbbe;
    border-width: 2px;
    transition: width .5s ease 0s;
  }


</style>


 <script>

    $( function() {
      $( ".datepicker" ).datepicker();
    } );



  </script>

  <script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>


<body>

<div>
<h1 style="text-align: center;"><b>ADD PROFILE</b></h1>

</div>
<br><br>
<div align="center" style="margin-top: 0px;position: static;width: 100%;"   >



  <?php



    $findPriv = "select priority from login where username like '".$username."'";//echo "$findPriv";
    $resPriv = mysqli_query($conn,$findPriv);
    $rowPriv = mysqli_fetch_assoc($resPriv);
    $prev = $rowPriv['priority'];//echo "$prev";

    echo '<form action="insertUser.php" method="post" >';
    echo "<div style='border:1;border-style:solid;width:70%;'>";
      echo "<h4><b>Privilege:</b></h4>";
      echo "<input class='input' type='number' min='".$prev."' value='".$prev."' required name='priv' ><br><br>";
      echo "<h4><b>Username:</b></h4>";
      echo "<input class='input' type='text' required name='user' pattern='[a-zA-Z]*' ><br><br>";
      if(isset($_GET['exist']))
      {
        echo "<div style='color:red'>Sorry. This username has already been taken</div><br>";
      }
			echo "<h4><b>Branch:</b></h4>";
			echo '<div class="form-group">
						<select class="form-group selector" name="branch">
						<option value="all">All(Administrator)</option>
						<option value="cse">Computer Science & Engineering</option>
						<option value="ece">Electronics & Communication Engineering</option>
						<option value="civil">Civil Engineering</option>
						<option value="mechanical">Mechanical Engineering</option>
					</select>
			</div>';
      echo "<h4><b>Password:</b></h4>";
      echo "<input class='input' type='text' required pattern='[a-zA-Z]*' name='password'><br><br>";
    echo "<input type='submit' class='btn-lg btn-info' value='Add User'></form><br><br>";



  ?>
</div>
</body>
</html>


<script>

  //$("#date").datepicker();
  $("#date").datepicker( {
    format: "yyyy-mm",
    startView: "months",
    minViewMode: "months",
    endDate: "-1m"
    });

  $("#date").on("keyup", function(e) {
      var date, day, month, newYear, value, year;
      value = e.target.value;
      if (value.search(/(.*)\/(.*)\/(.*)/) !== -1) {
        date = e.target.value.split("/");
        year = date[2];
        month = date[0];

        if (year === "") {
            year = "0";
        }
        if (year.length < 4) {
            newYear = String(2000 + parseInt(year));
            $(this).datepicker("setValue", "" + newYear + "/" + month + "/" + day);
            if (year === "0") {
              year = "";
            }
            return $(this).val("" + year + "/" + month + "/" + day);
        }
      }
  });
</script>
