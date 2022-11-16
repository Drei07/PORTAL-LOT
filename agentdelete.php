<?php
include("config.php");
$pid = $_GET['id'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestatephp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM property where agent = '$pid' and status = 'available' or status = 'Pending'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $msg="<p class='alert alert-warning'>Agent has a Property please remove before Deleting</p>";
	header("Location:agent_view.php?msg=$msg");
} else {
 





$sql = "DELETE FROM user WHERE uid = {$pid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Agent Deleted</p>";
	header("Location:agent_view.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Agent Not Deleted</p>";
	header("Location:agent_view.php?msg=$msg");
}

}


mysqli_close($con);
?>