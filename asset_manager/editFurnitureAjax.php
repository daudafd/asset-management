<?php
/*//////////////////////////////////////////////////////////////////////
AUTHOR: ODIRS ICT Software Development Team
COPYRIGHT: Ondo State Internal Revenue
DATE: October, 2020
//////////////////////////////////////////////////////////////////////*/
// Update all table form script with this chunks of code.

if(isset($_POST['assetRegistrationForm']) && $_POST['assetRegistrationForm'] == 'assetRegistrationForm'){
$scan_code = $_POST['scan_code'];
$ff_sub_category = trim($_POST['ff_sub_category']);
$name = trim($_POST['name']);
$location = trim($_POST['location']);
$own_degree = trim($_POST['own_degree']);
$status = trim($_POST['status']);
$asset_condition = trim($_POST['asset_condition']);
$initial_value = trim($_POST['initial_value']);
$procure_date = trim($_POST['procure_date']);
$deprec_value = trim($_POST['deprec_value']);
$address = trim($_POST['address']);
$size = trim($_POST['size']);
$quantity = trim($_POST['quantity']);
$dept = trim($_POST['dept']);
$descriptn = trim($_POST['descriptn']);
$created_date = date('Y-m-d h:i:s');
//$exeQuery = "";
$sql = "UPDATE tbl_furnitures SET  ff_sub_category = '$ff_sub_category', name = '$name', location = '$location', own_degree = '$own_degree',
status = '$status', asset_condition = '$asset_condition', initial_value = '$initial_value', procure_date = '$procure_date',
deprec_value = '$deprec_value', address = '$address', size = '$size', quantity = '$quantity', dept = '$dept',  descriptn = '$descriptn', 
created_date = '$created_date' WHERE scan_code ='$scan_code' ";
$exeQuery = mysqli_query($conn, $sql);

$sql2 = "UPDATE allasset SET  sub_category = '$ff_sub_category', name = '$name', location = '$location', own_degree = '$own_degree',
status = '$status', asset_condition = '$asset_condition', initial_value = '$initial_value', procure_date = '$procure_date',
deprec_value = '$deprec_value', address = '$address', size = '$size', quantity = '$quantity', dept = '$dept',  description = '$descriptn', 
created_date = '$created_date' WHERE scan_code ='$scan_code' ";
$exeQuery2 = mysqli_query($conn, $sql2);

$fileInput1 = $_FILES['fileUpload1']['name'];


//UPLOAD FILE ONE
if($fileInput1 != ""){
    if(deleteFileRef($scan_code)){
$fileToUploadOne = prepareFileForUpload($_FILES['fileUpload1']['name'], $scan_code);
$fileToUploadOneResult = move_uploaded_file($_FILES['fileUpload1']['tmp_name'], $fileToUploadOne);
    }
}


$url = "viewFurniture.php";
echo '<script language="javascript">location.href ="'.$url.'"</script>';

}

?>