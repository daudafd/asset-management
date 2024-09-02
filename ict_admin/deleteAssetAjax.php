<?php
include("includes/config.php");

if(isset($_POST['transmissionType']) && $_POST['transmissionType'] == "deleteData"){
    $id = $_POST['id'];
        deleteSingleData('asset', 'id', $id);
        echo json_encode(array("success" => "success"));
}

else{
    echo json_encode(array("error" => "error"));
}

    
?>