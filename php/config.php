<?php
  $hostname = "localhost";
  $username = "u867039073_portallot";
  $password = "Portallot2022";
  $dbname = "u867039073_portallot";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
