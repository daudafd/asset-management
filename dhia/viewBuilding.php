<?php
 include("includes/config.php"); 
include('includes/header.php');
include('includes/navbar.php');
$asstQry = fetchAllAsset('tbl_buildings','scan_code');

/*//////////////////////////////////////////////////////////////////////
AUTHOR: ODIRS ICT Software Development Team
COPYRIGHT: Ondo State Internal Revenue
DATE: October, 2020
//////////////////////////////////////////////////////////////////////*/ 
?>

<div class="app-main__outer">
<div class="scrollbar-container">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    
                                    <?php include('includes/building_dashboard.php');?>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-8 card">
                                    <div class="card-body"><h5 class="card-title">View ODIRS Buildings</h5>
                                    <div class="table-responsive">
                                        <table class="mb-0 table table-hover" id="dataTable">
                                            <thead>
                                            <tr>
                                                <th>S/No.</th>
                                                <th>Building Name</th>
                                                <th>Condition</th>
                                                <th>Owners Degree</th>
                                                <th>Category</th>
                                                <th>Tax Station</th>
                                                <th>View Details</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sn = 0; while($rows = mysqli_fetch_array($asstQry)){?>
                                            <tr>
                                            
                                                <td><?php echo ++$sn ?></td>
                                                <td><?php echo $rows['name']?></td>
                                                <td><?php echo $rows['asset_condition']?></td>
                                                <td><?php echo $rows['own_degree']?></td>
                                                <td><?php echo $rows['bu_sub_category']?></td>
                                                <td><?php echo $rows['location'];?></td>
                                                <td><a href="buildingDetails.php?assetApplicationNumber=<?php echo $rows['scan_code'];?>"><type="button" class="popUpModal mb-2 mr-2 btn-transition btn btn-outline-primary">Asset Details</a></td>
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

