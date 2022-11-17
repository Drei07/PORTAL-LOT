<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['uid'];



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
   
    
    $sql_check = "SELECT * FROM user where uid = '$outgoing_id' and utype = 'agent' or utype = 'user'";
    $result_check = $conn->query($sql_check);
    
    if ($result_check->num_rows > 0) {
      // output data of each row
      while($row_check = $result_check->fetch_assoc()) {

        $check = $row_check['utype'];

       


      }
    }
    if($check == "user")
    {
        $ace = "agent";
    }
    elseif($check == "agent")
    {
        $ace = "user";
    }



    $sql = "SELECT * FROM user WHERE NOT uid = {$outgoing_id} and utype = '$ace'  ORDER BY uid DESC";

    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No user are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>