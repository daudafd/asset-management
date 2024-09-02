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
    $scan_code = "ODIRS-BLD-".date("Y")."-".time();
    //$cdate = date('Y-m-d h:i:s');
    $mdate = date('Y-m-d h:i:s');
    
    $name = htmlentities(mysqli_real_escape_string($conn, $_POST['name']));
    $bu_sub_category = htmlentities(mysqli_real_escape_string($conn, $_POST['bu_sub_category']));
    $location = htmlentities(mysqli_real_escape_string($conn, $_POST['location']));
    $own_degree = htmlentities(mysqli_real_escape_string($conn, $_POST['own_degree']));
    $status = htmlentities(mysqli_real_escape_string($conn, $_POST['status']));
    $asset_condition = htmlentities(mysqli_real_escape_string($conn, $_POST['asset_condition']));
    //$dept = htmlentities(mysqli_real_escape_string($conn, $_POST['dept']));
    $descriptn = htmlentities(mysqli_real_escape_string($conn, $_POST['descriptn']));
    $created_date = date('Y-m-d h:i:s');
     
    $sql = "INSERT INTO tbl_buildings (scan_code, name, bu_sub_category, location, own_degree, status, asset_condition, descriptn, created_date)
    VALUES ('$scan_code', '$name', '$bu_sub_category', '$location',  '$own_degree',  '$status', '$asset_condition', '$descriptn', '$created_date')";
    $qry = mysqli_query($conn, $sql);

    $sql2 = "INSERT INTO allasset (scan_code, name, sub_category, location, own_degree, status, asset_condition,  description, created_date)
    VALUES ('$scan_code', '$name', '$bu_sub_category', '$location',  '$own_degree',  '$status', '$asset_condition',  '$descriptn', '$created_date')";
    $qry2 = mysqli_query($conn, $sql2);

   /* if ($qry) {
        
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
*/
    $url = "viewBuilding.php";
    echo '<script language="javascript">location.href ="'.$url.'"</script>';
    
    $fileInput1 = $_FILES['fileUpload1']['name'];
    
    //UPLOAD FILE
    $fileToUploadOne = prepareFileForUpload($_FILES['fileUpload1']['name'], $scan_code);
    $fileToUploadOneResult = move_uploaded_file($_FILES['fileUpload1']['tmp_name'], $fileToUploadOne);
   
    
}
        
?>