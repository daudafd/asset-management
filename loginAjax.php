<?php
//require('config.php');
include("includes/config.php");
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])){
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    $usertype = $_POST['usertype'];
    $rows = authenticateUser($username, $password, $usertype);
    
    if($rows['success']) {
        echo json_encode($rows);
    }
    else {
        $rows['success'] = "";
        $rows['error']  = "error" ;
        echo json_encode($rows);
    }
     
}

?>