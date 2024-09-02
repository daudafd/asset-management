<?php
/*//////////////////////////////////////////////////////////////////////
AUTHOR: ODIRS ICT Software Development Team
COPYRIGHT: Ondo State Internal Revenue
DATE: October, 2020
//////////////////////////////////////////////////////////////////////*/
// Update all table form script with this chunks of code.

if(isset($_POST['assetRegistrationForm']) && $_POST['assetRegistrationForm'] == 'assetRegistrationForm'){
$scan_code = $_POST['scan_code'];

 $oi_name = trim($_POST['name']);
$oi_sub_category = trim($_POST['oi_sub_category']);
$oi_location = trim($_POST['location']);
$oi_brand = trim($_POST['brand']);
$oi_own_degree = trim($_POST['own_degree']);
$oi_status = trim($_POST['status']);
$oi_asset_condition = trim($_POST['asset_condition']);
$oi_descriptn = trim($_POST['descriptn']);

$created_date = date('Y-m-d h:i:s');
//$exeQuery = "";
$oi_sql = "UPDATE tbl_otheritems SET name = '$oi_name', oi_sub_category = '$oi_sub_category', location = '$oi_location', 
brand = '$oi_brand', own_degree = '$oi_own_degree', status = '$oi_status',  descriptn = '$oi_descriptn', 
asset_condition = '$oi_asset_condition', created_date = '$created_date' WHERE scan_code ='$scan_code' ";
$oi_exeQuery = mysqli_query($conn, $oi_sql);

$oi_sql2 = "UPDATE allasset SET name = '$oi_name', sub_category = '$oi_sub_category', location = '$oi_location', 
brand = '$oi_brand', own_degree = '$oi_own_degree', status = '$oi_status',  descriptn = '$descriptn',
asset_condition = '$oi_asset_condition', created_date = '$created_date' WHERE scan_code ='$scan_code' ";
$oi_exeQuery2 = mysqli_query($conn, $oi_sql2);

$fileInput1 = $_FILES['fileUpload1']['name'];


//UPLOAD FILE ONE
if($fileInput1 != ""){
    if(deleteFileRef($scan_code)){
$fileToUploadOne = prepareFileForUpload($_FILES['fileUpload1']['name'], $scan_code);
$fileToUploadOneResult = move_uploaded_file($_FILES['fileUpload1']['tmp_name'], $fileToUploadOne);
    }
}


$url = "viewOtherItems.php";
echo '<script language="javascript">location.href ="'.$url.'"</script>';

}

?>