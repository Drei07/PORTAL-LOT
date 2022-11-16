<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(isset($_REQUEST['feedback']))
{
    $user_id = $_POST['user_id'];
    $property_id = $_POST['property_id'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];


    $sql="INSERT INTO review (unit_id,user_id,star,feedback) VALUES ('$property_id','$user_id','$rating','$review')";
			$result=mysqli_query($con, $sql);
			   if($result){
                header("Location: propertydetail.php?done&pid=$property_id");
			   }
			   else{
                header("Location: propertydetail.php?error&pid=$property_id");
			   }

}



?>