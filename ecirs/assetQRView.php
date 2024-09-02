<?php 
include("includes/config.php"); 
include('includes/header.php');
//include('includes/navbar.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $row = fetchSingleRecord('asset','id', $id);
    
    }
?>
        <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="lnr-picture text-danger">
                                        </i>
                                    </div>
                                    <?php include('includes/dashboard_msg.php');?>

                                </div>    
                            </div>
                        </div> 

                <div class="container">
                    <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h3>Asset Details</h3><hr/> 
                                

                    <div class="list-section">
                      <div class="list-menu">
                        <div class="row p-3">
                            <div class="col-lg-4 col-md-4 ">
                                <div class="card asset-img">
                                    <div class="card-body">
                                        <img src="uploads/demo-image.png.png" alt="Asset name" width="100%" height="220">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Asset Scan Code :</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $row['scan_code'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Asset Name :</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $row['name'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Asset Description :</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $row['description'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Registered Date :</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $row['created_date'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Procurement Date :</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $row['procure_date'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Asset Location :</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $row['location'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Quantity :</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $row['quantity'];?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive p-3">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th style="width: 20%">Asset Type :</th>
                                    <td style="width: 30%"><?php echo $row['type'];?></td>
                                    <th style="width: 20%">Asset Location :</th>
                                    <td style="width: 30%"><?php echo $row['location'];?></td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Owner Degree :</th>
                                    <td style="width: 30%"><?php echo $row['own_degree'];?></td>
                                    <th style="width: 20%">Asset Status :</th>
                                    <td style="width: 30%"><?php echo $row['status'];?></td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Asset condition :</th>
                                    <td style="width: 30%"><?php echo $row['asset_condition'];?></td>
                                    <th style="width: 20%">Initial Value :</th>
                                    <td style="width: 30%"><?php echo $row['initial_value'];?></td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Depritiation Value :</th>
                                    <td style="width: 30%"><?php echo $row['deprec_value'];?></td>
                                    <th style="width: 20%">Assest Address :</th>
                                    <td style="width: 30%"><?php echo $row['address'];?></td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Size :</th>
                                    <td style="width: 30%"><?php echo $row['size'];?></td>
                                    <th style="width: 20%">Area :</th>
                                    <td style="width: 30%"><?php echo $row['area'];?></td>
                                </tr>
                            </table>
                        </div>
                      </div>
                    </div>
                </div> 
                </div> 
            </div>
        </div>
<?php include('includes/footer.php'); ?>