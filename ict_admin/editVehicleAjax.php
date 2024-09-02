<?php
/*//////////////////////////////////////////////////////////////////////
AUTHOR: ODIRS ICT Software Development Team
COPYRIGHT: Ondo State Internal Revenue
DATE: October, 2020
//////////////////////////////////////////////////////////////////////*/
// Update all table form script with this chunks of code.

if(isset($_POST['assetRegistrationForm']) && $_POST['assetRegistrationForm'] == 'assetRegistrationForm'){
$scan_code = $_POST['scan_code'];

$ve_sub_category = trim($_POST['ve_sub_category']);
$name = trim($_POST['name']);
$location = trim($_POST['location']);
$no_plate = trim($_POST['no_plate']);
$chasis_no = trim($_POST['chasis_no']);
$own_degree = trim($_POST['own_degree']);
$status = trim($_POST['status']);
$asset_condition = trim($_POST['asset_condition']);
$dept = trim($_POST['dept']);
$driver = trim($_POST['driver']);
$model = trim($_POST['model']);
$brand = trim($_POST['brand']);
$year = trim($_POST['year']);
$procure_date = trim($_POST['procure_date']);
$initial_value = trim($_POST['initial_value']);
$deprec_value = trim($_POST['deprec_value']);
$address = trim($_POST['address']);
$descriptn = trim($_POST['descriptn']);

$created_date = date('Y-m-d h:i:s');
//$exeQuery = "";
$sql = "UPDATE tbl_vehicles SET name = '$name', ve_sub_category = '$ve_sub_category', location = '$location', no_plate = '$no_plate', 
chasis_no = '$chasis_no',  own_degree = '$own_degree', status = '$status', asset_condition = '$asset_condition', dept = '$dept',  
driver = '$driver', model = '$model', brand = '$brand', year = '$year', procure_date = '$procure_date', initial_value = '$initial_value',
deprec_value = '$deprec_value', address = '$address', descriptn = '$descriptn', created_date = '$created_date' WHERE scan_code ='$scan_code' ";
$exeQuery = mysqli_query($conn, $sql);


$sql2 = "UPDATE allasset SET name = '$name', sub_category = '$ve_sub_category', location = '$location', no_plate = '$no_plate', 
chasis_no = '$chasis_no',  own_degree = '$own_degree', status = '$status', asset_condition = '$asset_condition', dept = '$dept',  
driver = '$driver', model = '$model', brand = '$brand', year = '$year', procure_date = '$procure_date', initial_value = '$initial_value',
deprec_value = '$deprec_value', address = '$address', description = '$descriptn', created_date = '$created_date' WHERE scan_code ='$scan_code' ";
$exeQuery2 = mysqli_query($conn, $sql2);

$fileInput1 = $_FILES['fileUpload1']['name'];


//UPLOAD FILE ONE
if($fileInput1 != ""){
    if(deleteFileRef($scan_code)){
$fileToUploadOne = prepareFileForUpload($_FILES['fileUpload1']['name'], $scan_code);
$fileToUploadOneResult = move_uploaded_file($_FILES['fileUpload1']['tmp_name'], $fileToUploadOne);
    }
}


$url = "viewVehicle.php";
echo '<script language="javascript">location.href ="'.$url.'"</script>';

}

?>