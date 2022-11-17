<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

$done = isset($_GET['done']);
$error = isset($_GET['error']);
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<!--star--->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  

	<script src="bootstrap4/jquery/sweetalert.min.js"></script>
<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--	Title
	=========================================================-->
<title>Real Estate PHP</title>
</head>
<style>
    div.ex3 {

  width: 100%;
  height: 1000px;
 
  overflow: auto;
}
.checked {
  color: orange;
}
.circle {
 border-radius: 50%;
 height: 70px;
 width: 70px;
}
.rating{
  display : flex;
}

.rating input{
  position : absolute;
  left     : -100vw;
}

.rating label{
  width      : 48px;
  height     : 48px;
  padding    : 48px 0 0;
  overflow   : hidden;
  background : url('stars.svg') no-repeat top left;
}

.rating:not(:hover) input:indeterminate + label,
.rating:not(:hover) input:checked ~ input + label,
.rating input:hover ~ input + label{
  background-position : -48px 0;
}

.rating:not(:hover) input:focus-visible + label{
  background-position : -96px 0;
}
    </style>
<body>
<?php

if($done){
  echo 
    '<script>swal("","Successfully send Feedback!","success");</script>';
  }
  
if($error){
  echo 
    '<script>swal("","Something Wrong!","error");</script>';
  }

?>
<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Detail</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Property Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

		
        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<?php
						$id=$_REQUEST['pid']; 
						$query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id' ");
						while($row=mysqli_fetch_array($query))
						{
					  ?>
				  
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage1'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage2'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 4-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage3'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 5-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage4'];?>" class="ls-bg" alt="" /> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                              
                                <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['title'];?></h5>
                                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i> &nbsp;<?php echo $row['location'];?></span>
							</div>
                            <div class="col-md-6">
                                <div class="text-success text-left h5 my-2 text-md-right">₱ <?php echo $row['price'];?></div>
                                <div class="text-left text-md-right">Price</div>
                            </div>
                        </div>
                        <div class="property-details">
                            <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <ul>
                                    <li><span class="text-secondary"><?php echo $row['size'];?></span> Sqft</li>
                                   
                                </ul>
                            </div>
                            <h4 class="text-secondary my-4">Description</h4>
                            <p><?php echo $row['pcontent'];?></p>
                            
                            <h5 class="mt-5 mb-4 text-secondary">Property Summary</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        
                                        <tr>
                                            <td>City :</td>
                                            <td class="text-capitalize"><?php echo $row['city'];?></td>
                                            <td>State :</td>
                                            <td class="text-capitalize"><?php echo $row['state'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mt-5 mb-4 text-secondary">Features</h5>
                            <div class="row">
								<?php echo $row['feature'];?>
								
                            </div>   
                            <h5 class="mt-5 mb-4 text-secondary">Location</h5>
                            <div class="row">
                            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src = "https://maps.google.com/maps?q=<?php echo $row['Latitude'];?>,<?php echo $row['Longtitude'];?>&hl=es;z=14&amp;output=embed">

</iframe>
                            </div> 
                            <h5 class="mt-5 mb-4 text-secondary">360 View</h5>
                            <div class="row">
                            <iframe src="<?php echo $row['view'];?>" width="1200" height="750" style="border: solid 5px lightgreen;" allowfullscreen="" loading="lazy"></iframe>
                         
                            </div>  


                            <?php
                             $user_agent = $row['agent'];
                             $servername = "localhost";
                             $username = "u867039073_portallot";
                             $password = "Portallot2022";
                             $dbname = "u867039073_portallot";
                            
                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                            }
                            
                            $sql_agent = "SELECT * FROM user where uid = '$user_agent'";
                            $result_agent = $conn->query($sql_agent);
                            
                            if ($result_agent->num_rows > 0) {
                              // output data of each row
                              while($row_agent = $result_agent->fetch_assoc()) {
                              $agent_id = $row_agent["uid"];
                              $agent_name = $row_agent["uname"];
                              $agent_image =$row_agent['uimage'];
                              $agent_phone = $row_agent['uphone'];
                              $agent_email = $row_agent['uemail'];
                              }
                            } else {
                             
                            }
                            
                            ?>
                            

                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact Agent</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <div class="col-sm-4 col-lg-3"> <img src="admin/user/<?php echo $agent_image; ?>" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-success text-capitalize"><?php echo $agent_name;?></h6>
                                            <ul class="mb-3">
                                                <li><?php echo  $agent_phone;?></li>
                                                <li><?php echo $agent_email;?></li>
                                            </ul>
                                            
                                            <div class="mt-3 text-secondary hover-text-success">
                                                <ul>
                                                    <?php
                                                    if(isset($_SESSION['uid']) == '')
                                                    {
                                                    
                                                    ?>
                                                    
                                                    <?php }else{
$agent_id_status_id = $_SESSION['uid'];
$servername = "localhost";
$username = "u867039073_portallot";
$password = "Portallot2022";
$dbname = "u867039073_portallot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql_agent = "SELECT * FROM user where uid = '$agent_id_status_id'";
$result_agent = $conn->query($sql_agent);

if ($result_agent->num_rows > 0) {
  // output data of each row
  while($row_agent = $result_agent->fetch_assoc()) {
  $agent_id_status = $row_agent["utype"];

  }
} else {
 
}

                                                        if($agent_id_status == 'user'){
                                                        ?>
                                                        <li class="float-left mr-3"><a href="chat.php?uid=<?php echo $agent_id;?>"><i class="fab fa-facebook-messenger" style="font-size:30px;"></i></a></li>
                                                        <?php } } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } ?>
					
                    <div class="col-lg-4">
                        
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4>
                        <form class="d-inline-block w-100" action="calc.php" method="post">
                            <label class="sr-only">Property Amount</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">₱</div>
                                </div>
                                <input type="number" class="form-control" name="amount" placeholder="Property Price" required>
                            </div>
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="number" class="form-control" name="month" placeholder="Duration Year" required>
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="number" class="form-control" name="interest" placeholder="Interest Rate" required>
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-danger mt-4">Calclute Instalment</button>
                        </form>
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Featured Property</h4>
                        <ul class="property_list_widget">
							
                            <?php 

if(isset($_SESSION['uid']) == '')
{
    $query=mysqli_query($con,"SELECT * FROM `property` WHERE  isFeatured = 1 and status = 'available'  ORDER BY date DESC LIMIT 3");
}
else{
    $query=mysqli_query($con,"SELECT * FROM `property` WHERE uid != {$_SESSION['uid']} and isFeatured = 1 and status = 'available'  ORDER BY date DESC LIMIT 3");
}

                           
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                            <li> <img src="admin/property/<?php echo $row['pimage'];?>" alt="pimage">
                                <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['pid'];?>"><?php echo $row['1'];?></a></h6>
                                <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['location'];?></span>
                                
                            </li>
                            <?php } ?>

                        </ul>

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently Added Property</h4>
                            <ul class="property_list_widget">
							
								<?php 
                                if(isset($_SESSION['uid']) == '')
                                {
                                    $query=mysqli_query($con,"SELECT * FROM `property` where status = 'available'  ORDER BY date DESC LIMIT 7");
                                }
                                else{
                                    $query=mysqli_query($con,"SELECT * FROM `property` where status = 'available' and uid != {$_SESSION['uid']} ORDER BY date DESC LIMIT 7");
                                }
								
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="admin/property/<?php echo $row['pimage'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['pid'];?>"><?php echo $row['1'];?></a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['location'];?></span>
                                    
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
<?php
if(!isset($_SESSION['uid']) == '')
{

$user_id_status_id = $_SESSION['uid'];
$servername = "localhost";
$username = "u867039073_portallot";
$password = "Portallot2022";
$dbname = "u867039073_portallot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql_user = "SELECT * FROM user where uid = '$user_id_status_id'";
$result_user = $conn->query($sql_user);

if ($result_user->num_rows > 0) {
  // output data of each row
  while($row_user = $result_user->fetch_assoc()) {
  $user_id_status = $row_user["utype"];

  }
} else {
 
}
  $user_id_status;
    if($user_id_status == 'user')
    {
    
?>
                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Reviews and feedbacks Form</h4>
                            <ul class="property_list_widget">
							
								<form action="feedback.php" method="POST">
                                    <input type="text" name="user_id" value="<?php echo $_SESSION['uid'];?>" hidden>
                                    <input type="text" name="property_id" value="<?php echo $id;?>" hidden>
                                <div class="rating">
  <input id="rating1" type="radio" name="rating" value="1" required>
  <label for="rating1">1</label>
  <input id="rating2" type="radio" name="rating" value="2">
  <label for="rating2">2</label>
  <input id="rating3" type="radio" name="rating" value="3">
  <label for="rating3">3</label>
  <input id="rating4" type="radio" name="rating" value="4">
  <label for="rating4">4</label>
  <input id="rating5" type="radio" name="rating" value="5">
  <label for="rating5">5</label>
</div>
                                <textarea style="resize: none;width:100%;height:200px;" name="review" required></textarea>
                                <br>
                                <button type="submit" name="feedback" class="btn btn-success">Submit feedback</button>
                                </form>

                            </ul>
                        </div>

                        <?php } }?>

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Reviews and feedbacks</h4>
                            <ul class="property_list_widget">
							
							<div class="ex3">
<?php
				$servername = "localhost";
				$username = "u867039073_portallot";
				$password = "Portallot2022";
				$dbname = "u867039073_portallot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql_user = "SELECT * FROM review where unit_id = '$id' ORDER BY id DESC";
$result_user = $conn->query($sql_user);

if ($result_user->num_rows > 0) {
  // output data of each row
  while($row_user = $result_user->fetch_assoc()) {
 
    $review_user_id = $row_user['user_id'];
    $review_user_star = $row_user['star'];
    $review_user_message = $row_user['feedback'];


$sql_user_review = "SELECT * FROM user where uid = '$review_user_id' ";
$result_user_review = $conn->query($sql_user_review);

if ($result_user_review->num_rows > 0) {
  // output data of each row
  while($row_user_review = $result_user_review->fetch_assoc()) {

    $user_review_image = $row_user_review['uimage'];
    $user_review_name = $row_user_review['uname'];

?>
                                        <br>
                                        <div style="width:100%;height:auto;display:inline-block">
                                        <center>
                                        <div >
                                        <img src="admin/user/<?php echo $user_review_image; ?>" class="circle" alt="" >
                                        </div>
                                        <p><b><?php echo $user_review_name;?></b></p>
<?php
if($review_user_star == 1)
{
?>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
<br>
<?php }
elseif($review_user_star == 2)
{
?>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
<br>
<?php }
elseif($review_user_star == 3)
{
?>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
<br>

<?php }
elseif($review_user_star == 4)
{
?>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<br>
<?php }
elseif($review_user_star == 5)
{
?>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<br>

<?php }

?>
                                        <p><?php echo $review_user_message?></p>
                                        </center>
                                        </div>
                                        <br>
                                        <hr>

                                        <?php }}  }
} else {
 echo "No review Yet be the First one";
}?>

                           </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script> 

</body>

</html>