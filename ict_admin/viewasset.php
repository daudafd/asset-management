<?php 
include("includes/config.php"); 
include 'phpqrcode/qrlib.php'; 

// Start your initialization here with 'application' variable image passed into previous viewAsset button
    if(isset($_GET['scan_code'])){
    $scan_code = $_GET['scan_code'];
    $execQry = fetchSingleData("allasset", "scan_code", $scan_code);
    $rows = mysqli_fetch_array($execQry);
    $scan_code = $rows['scan_code'];  
    $name = $rows['name'];
    $id = $rows['id'];
    $just_scan = $rows['scan_code'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>ODIRS Asset Management System</title>
</head>
<body>
    <nav>
        <div class="navbar mr-auto p-3 bg-primary" style="justify-content: center;">ODIRS Asset Management System</div>
    </nav>
    <div class="container">
        <div class="card card-body my-5" style="border:1px solid #3f6ad8;">
            <h6>Asset Details: <span style="font-size: 13px;"><?php echo $rows['scan_code'];?></span></h6>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <?php 
                        /*///////////////////////////////// A call to function is done here//////////////////////////////////////*/
                        $receipt1ExecQry = getUploadedDocuments($scan_code);
                        $receipt1Rows = mysqli_fetch_array($receipt1ExecQry);
                    ?>
                    <div class="card card-body asset-img" style="border:1px solid #3f6ad8;">
                        <img src="<?php echo $receipt1Rows['attachment'] ; ?>" alt="Assename" width="100%" height="220">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <lebel><b>Asset Name :</b></lebel>
                                <span><?php echo $rows['name'];?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <lebel><b>Asset Description :</b></lebel>
                                <span><?php echo $rows['description'];?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <lebel><b>Registered Date :</b></lebel>
                                <span><?php echo $rows['serial_no'];?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <lebel><b>Procurement Date :</b></lebel>
                                <span><?php echo $rows['procure_date'];?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <lebel><b>Asset Location :</b></lebel>
                                <span><?php echo $rows['location'];?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <lebel><b>Reg-Date :</b></lebel>
                                <span><?php echo $rows['created_date'];?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="margin-top: 1rem; margin-bottom: 1rem; border: 0; border-top: 1px solid #0404a2;">
            <div class="table-responsive p-3">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th style="width: 20%">Asset Type :</th>
                        <td style="width: 30%"><?php echo $rows['ee_sub_category'];?></td>
                        <th style="width: 20%">Asset Location :</th>
                        <td style="width: 30%"><?php echo $rows['location'];?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%">Owner Degree :</th>
                        <td style="width: 30%"><?php echo $rows['own_degree'];?></td>
                        <th style="width: 20%">Asset Status :</th>
                        <td style="width: 30%"><?php echo $rows['status'];?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%">Asset condition :</th>
                        <td style="width: 30%"><?php echo $rows['asset_condition']?></td>
                        <th style="width: 20%">Initial Value :</th>
                        <td style="width: 30%"><?php echo $rows['initial_value']?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%">Procurement Date :</th>
                        <td style="width: 30%"><?php echo $rows['procure_date']?></td>
                        <th style="width: 20%">Depreciation Value :</th>
                        <td style="width: 30%"><?php echo $rows['deprec_value'];?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%">Address :</th>
                        <td style="width: 30%"><?php echo $row['address'];?></td>
                        <th style="width: 20%">Size :</th>
                        <td style="width: 30%"><?php echo $row['size'];?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%">Quantity :</th>
                        <td style="width: 30%"><?php echo $row['quantity'];?></td>
                        <th style="width: 20%">Department :</th>
                        <td style="width: 30%"><?php echo $row['dept'];?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>