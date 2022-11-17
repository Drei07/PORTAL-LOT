<?php
// Initialize the session
session_start();
 




$up = $_SESSION['uid'];


				$servername = "localhost";
				$username = "rou867039073_portallotot";
				$password = "Portallot2022";
				$dbname = "u867039073_portallot";
				
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				
				$sql = "UPDATE user SET stat='Offline now' WHERE uid='$up'";
				
				if ($conn->query($sql) === TRUE) {
				  
				} else {
				 
				}

// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: index.php");
exit;
?>