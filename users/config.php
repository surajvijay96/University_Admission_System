<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'password';

	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,'gech');


	session_start();
	$username=$_SESSION['login_user'];
    $sql="SELECT  username, password,priority,branch FROM login WHERE username='".$username."'";//echo "$sql";
    $res =  mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
	$login_session =$row['username'];//echo "$login_session<br /><br /><br /><br>";
	$privilege = $row['priority'];
	$session_branch = $row['branch'];
	if(!isset($login_session)){
		mysql_close($conn); // Closing Connection
		header('Location: ../login.php'); // Redirecting To Home Page
	}
	if(time() > $_SESSION['expire'])
	{
    	header("location:logout.php");
	}

	else { $_SESSION['expire'] = time()+15*60; }


?>
<link rel="icon"
      type="image/png"
      href="./favicon.jpg">
