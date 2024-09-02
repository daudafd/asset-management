<?php
/*//////////////////////////////////////////////////////////////////////
AUTHOR: ODIRS ICT Software Development Team
COPYRIGHT: Ondo State Internal Revenue
DATE: October, 2020
//////////////////////////////////////////////////////////////////////*/ 
include("includes/config.php");
include("phpqrcode/qrlib.php");
//since we have six tab with different input field, then we have chosen
//to set location variable as the unique variable for all input field.
    if(isset($_POST['scan_code'])){
    $scan_code = "ODIRS-FF-".date("Y")."-".time();
    $ff_sub_category = htmlentities(mysqli_real_escape_string($conn, $_POST['ff_sub_category']));
    $name = htmlentities(mysqli_real_escape_string($conn, $_POST['name']));
    $location = htmlentities(mysqli_real_escape_string($conn, $_POST['location']));
    $own_degree = htmlentities(mysqli_real_escape_string($conn, $_POST['own_degree']));
    $status = htmlentities(mysqli_real_escape_string($conn, $_POST['status']));
    $asset_condition = htmlentities(mysqli_real_escape_string($conn, $_POST['asset_condition']));
    $initial_value = htmlentities(mysqli_real_escape_string($conn, $_POST['initial_value']));
    $procure_date = htmlentities(mysqli_real_escape_string($conn, $_POST['procure_date']));
    $deprec_value = htmlentities(mysqli_real_escape_string($conn, $_POST['deprec_value']));
    $address = htmlentities(mysqli_real_escape_string($conn, $_POST['address']));
    $size = htmlentities(mysqli_real_escape_string($conn, $_POST['size']));
    $quantity = htmlentities(mysqli_real_escape_string($conn, $_POST['quantity']));
    $dept = htmlentities(mysqli_real_escape_string($conn, $_POST['dept']));
    $descriptn = htmlentities(mysqli_real_escape_string($conn, $_POST['descriptn']));
    $created_date = date('Y-m-d h:i:s');
     
    $sql = "INSERT INTO tbl_furnitures (scan_code, ff_sub_category, name, location, own_degree, status, asset_condition, initial_value,
    procure_date, deprec_value, address, size, quantity, dept, descriptn, created_date) VALUES ('$scan_code', '$ff_sub_category', '$name',
    '$location',  '$own_degree',  '$status', '$asset_condition', '$initial_value', '$procure_date', '$deprec_value', '$address',
    '$size', '$quantity', '$dept', '$descriptn', '$created_date')";
    $qry = mysqli_query($conn, $sql);

    $sql2 = "INSERT INTO allasset (scan_code, sub_category, name, location, own_degree, status, asset_condition, initial_value,
    procure_date, deprec_value, address, size, quantity, dept, description, created_date) VALUES ('$scan_code', '$ff_sub_category', '$name',
    '$location',  '$own_degree',  '$status', '$asset_condition', '$initial_value', '$procure_date', '$deprec_value', '$address',
    '$size', '$quantity', '$dept', '$descriptn', '$created_date')";
    $qry2 = mysqli_query($conn, $sql2);
    
    if ($qry) {
        
   $qrcode = "http://asset.odirs.com/ict_admin/viewasset.php?scan_code=".$scan_code;
    
	$path = 'qrimage/'.$dept.'/'; 
	$file = $path.$scan_code.".png"; 
	  
	// $ecc stores error correction capability('L') 
	$ecc = 'L'; 
	$pixel_Size = 3; 
	$frame_Size = 4; 
	  
	// Generates QR Code and Stores it in directory given 
	QRcode::png($qrcode, $file, $ecc, $pixel_Size, $frame_Size);

    }



    $url = "viewFurniture.php";
    echo '<script language="javascript">location.href ="'.$url.'"</script>';
    
    $fileInput1 = $_FILES['fileUpload1']['name'];
    
    //UPLOAD FILE
    $fileToUploadOne = prepareFileForUpload($_FILES['fileUpload1']['name'], $scan_code);
    $fileToUploadOneResult = move_uploaded_file($_FILES['fileUpload1']['tmp_name'], $fileToUploadOne);
   
    
}
        
?>