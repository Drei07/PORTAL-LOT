<?php

session_start();
require("config.php");

$pid=$_REQUEST['id'];

$status = 'Decline';

$msg="";

$sql = "UPDATE property SET status='{$status}' WHERE pid = {$pid}";

$result=mysqli_query($con,$sql);
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Property Approve</p>";
		header("Location:pending.php?msg=$msg");
	}
	else{
	
	}

?>