<?php 
include("includes/config.php"); 
include('includes/header.php');
include('includes/navbar.php');


$asstQry = fetchAllAsset('tbl_vehicles','scan_code');
?>

<div class="app-main__outer">
<div class="scrollbar-container">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    
                                    <?php include('includes/vehicle_dashboard.php');?>

                                </div>
                            </div>
                        </div>

                       
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-8 card">
                                    <div class="card-body"><h5 class="card-title">View ODIRS Vehicles</h5>
                                    <div class="table-responsive">
                                        <table class="mb-0 table table-hover" id="dataTable">
                                            <thead>
                                            <tr>
                                                <th>S/No.</th>
                                                <th>Asset ID</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Location</th>
                                                <!--th>Degree</th>
                                                <th>Status</th>
                                                <th>Condition</th-->
                                                <th>View Details</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sn = 0; while($rows = mysqli_fetch_array($asstQry)){?>
                                            <tr>
                                            
                                                <td><?php echo ++$sn ?></td>
                                                <td><?php echo $rows['scan_code']?></td>
                                                <td><?php echo $rows['name']?></td>
                                                <td><?php echo $rows['ve_sub_category']?></td>
                                                <td><?php echo $rows['location'];?></td>
                                                <td><a href="vehicleDetails.php?assetApplicationNumber=<?php echo $rows['scan_code'];?>"><type="button" class="popUpModal mb-2 mr-2 btn-transition btn btn-outline-primary">Asset Details</a></td>
                                            </tr>
                                                <?php } ?>
                                            </tbody></table></div></div></div></div></div></div>

                                    <script src="vendor/jquery/jquery.min.js"></script>
                                    <!-- Page level plugins -->
                                    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                                    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
                                        <!-- Page level custom scripts -->
                                    <script src="js/datatables-demo.js"></script>                        
                                    </div>
                                    <?php include('includes/footer.php'); ?>

