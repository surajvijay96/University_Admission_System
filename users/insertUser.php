<?php

include("config.php");

$priv = $_POST['priv'];
$user = $_POST['user'];
$pass = $_POST['password'];
$branch = $_POST['branch'];


//echo "string";

$exist = "select * from login where username like '".$user."' ";echo "$exist";
$resExist = mysqli_query($conn,$exist);
if(mysqli_num_rows($resExist) >= '1')
{
	header("location:addProfile.php?exist=true");
}
else
{
	$insert = "insert into login(username,password,priority,branch) values('".$user."','".$pass."','".$priv."','".$branch."')";
	$res = mysqli_query($conn,$insert);
	if(!$res)
	{
		header("location:addProfile.php?error=true");
	}
	else
	{
		header("location:update.php");
	}
}

?>
