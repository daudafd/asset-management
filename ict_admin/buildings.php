<?php 
include("includes/config.php"); 
include('includes/header.php');
include('includes/navbar.php');
//$asstQry = fetchAllAsset('asset','id');
?>

<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    
                                    <?php include('includes/dashboard_msg.php');?>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-8 card">
                                    <div class="card-body"><h5 class="card-title">ODIRS Buildings</h5>
                                    <div class="table-responsive">
                                    <table id="" class="table table-bordered">
                                        <!--table class="mb-0 table table-hover" id="dataTable"-->
                                            <thead>
                                            <tr>
                                                
                                                <th>Asset ID</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Location</th>
                                                <!--th>Degree</th>
                                                <th>Status</th>
                                                <th>Condition</th-->
                                                <th>Details</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $sql = "SELECT * FROM asset WHERE sub_category LIKE '%Office Accommodation%' OR sub_category LIKE '%Pool%' 
                                                OR sub_category LIKE '%Generator House%' ORDER BY created_date DESC";
                                                //$sql = "SELECT sub_category FROM asset";
                                                
                                                $query = $conn->query($sql);
                                                while($rows = $query->fetch_assoc()){
                                                ?>
                                                <!--?php $sn = 0; while($rows = mysqli_fetch_array($asstQry)){?-->
                                            <tr>
                                            
                                                
                                                <td><?php echo $rows['scan_code']?></td>
                                                <td><?php echo $rows['name']?></td>
                                                <td><?php echo $rows['sub_category']?></td>
                                                <td><?php echo $rows['location']?></td>
                                                <!--td><?php echo $rows['own_degree']?></td>
                                                <td><?php echo $rows['status']?></td>
                                                <td><?php echo $rows['asset_condition']?></td-->
                                                <td><a href="assetDetails.php?id=<?php echo $rows['id'];?>"><i class="fa fa-eye"> </i></a></td>
                                            </tr>
                                                <?php } ?>
                                            </tbody></table></div></div></div></div></div>

                                    <script src="vendor/jquery/jquery.min.js"></script>
                                    <!-- Page level plugins -->
                                    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                                    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
                                        <!-- Page level custom scripts -->
                                    <script src="js/datatables-demo.js"></script>                        
                                    </div>
                                    <?php include('includes/footer.php'); ?>

