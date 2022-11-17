<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['uid'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);


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
   
    
    $sql_check_search = "SELECT * FROM user where uid = '$outgoing_id' and utype = 'agent' or utype = 'user'";
    $result_check_search = $conn->query($sql_check_search);
    
    if ($result_check_search->num_rows > 0) {
      // output data of each row
      while($row_check_search = $result_check_search->fetch_assoc()) {

        $check = $row_check_search['utype'];

       


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

    $sql = "SELECT * FROM user WHERE NOT uid = {$outgoing_id} AND (uname LIKE '%{$searchTerm}%') AND utype = '$ace' ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>