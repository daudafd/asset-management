<?php
  include("includes/config.php");

  if(isset($_POST['popBtnValue'])){
    $popBtnValue = mysqli_real_escape_string($conn, $_POST['popBtnValue']);

    $imgSql = "SELECT * FROM attachments WHERE application_number = '$popBtnValue'";
    $imgQuery = mysqli_query($conn, $imgSql);
    if($imgQuery){
      $res = mysqli_fetch_array($imgQuery);
      $imageFile = $res['attachment'];
    }

    $sql = "SELECT * FROM allasset WHERE scan_code = '$popBtnValue'";
    $query = mysqli_query($conn, $sql);
    if($query){
      $row = mysqli_fetch_array($query);
      $scanCode = $row['scan_code'];
      $name = $row['name'];
      $location = $row['location'];
      $own_degree = $row['own_degree'];
      $asset_condition = $row['asset_condition'];
      $description = $row['description'];
      $serial_number = $row['serial_number'];
      $model = $row['model'];
      $brand = $row['brand'];
      $procure_date = $row['procure_date'];
      $address = $row['address'];

      echo json_encode(array("success" => true, "scanCode" => $scanCode, "imageFile" => $imageFile, "name" => $name, "location" => $location, "own_degree" => $own_degree, "asset_condition" => $asset_condition, "description" => $description, "serial_number" => $serial_number, "model" => $model, "brand" => $brand,"procure_date" => $procure_date, "address" => $address));
    }else{
      echo json_encode(array("success" => false));
    }
  }
?>