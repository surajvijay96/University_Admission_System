<?php
  $host = "localhost";
  $user = "root";
  $pass = "password";
  $db   = "gech";

  $conn = mysqli_connect($host,$user,$pass,$db);
  if(!$conn)
    echo "not connected";
 ?>
