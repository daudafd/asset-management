<?php
/*//////////////////////////////////////////////////////////////////////
AUTHOR: ODIRS ICT Software Development Team
COPYRIGHT: Ondo State Internal Revenue
DATE: October, 2020
//////////////////////////////////////////////////////////////////////*/
// Update all table form script with this chunks of code.

if(isset($_POST['assetRegistrationForm']) && $_POST['assetRegistrationForm'] == 'assetRegistrationForm'){
$scan_code = $_POST['scan_code'];

$name = trim($_POST['name']);
$bu_sub_category = trim($_POST['bu_sub_category']);
$location = trim($_POST['location']);
$own_degree = trim($_POST['own_degree']);
$status = trim($_POST['status']);
$asset_condition = trim($_POST['asset_condition']);
$descriptn = trim($_POST['descriptn']);
$created_date = date('Y-m-d h:i:s');
//$exeQuery = "";
$oi_sql = "UPDATE tbl_buildings SET name = '$name', bu_sub_category = '$bu_sub_category', location = '$location', 
own_degree = '$own_degree', status = '$status',  descriptn = '$descriptn', 
asset_condition = '$asset_condition', created_date = '$created_date' WHERE scan_code ='$scan_code' ";
$oi_exeQuery = mysqli_query($conn, $oi_sql);

$oi_sql2 = "UPDATE allasset SET name = '$name', sub_category = '$bu_sub_category', location = '$location', 
own_degree = '$own_degree', status = '$status',  description = '$descriptn', 
asset_condition = '$asset_condition', created_date = '$created_date' WHERE scan_code ='$scan_code' ";
$oi_exeQuery2 = mysqli_query($conn, $oi_sql2);

$fileInput1 = $_FILES['fileUpload1']['name'];


//UPLOAD FILE ONE
if($fileInput1 != ""){
    if(deleteFileRef($scan_code)){
$fileToUploadOne = prepareFileForUpload($_FILES['fileUpload1']['name'], $scan_code);
$fileToUploadOneResult = move_uploaded_file($_FILES['fileUpload1']['tmp_name'], $fileToUploadOne);
    }
}


$url = "viewBuilding.php";
echo '<script language="javascript">location.href ="'.$url.'"</script>';

}

?>