<?php
include("../includes/config.php");

if(isset($_POST['transmissionType']) && $_POST['transmissionType'] == "deleteData"){
    $scan_code = $_POST['scan_code'];
        deleteSingleData('tbl_vehicles', 'scan_code', $scan_code);
        echo json_encode(array("success" => "success"));
}

else{
    echo json_encode(array("error" => "error"));
}

    
?>