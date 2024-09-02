<?php 

/*//////////////////////////////////////////////////////////////////////
AUTHOR: ODIRS ICT Software Development Team
COPYRIGHT: Ondo State Internal Revenue
DATE: October, 2020
//////////////////////////////////////////////////////////////////////*/

include("includes/config.php"); 
include('includes/header.php');
include('includes/navbar.php');
// Start your initialization here with 'application' variable image passed into previous viewAsset button
if(isset($_GET['assetApplicationNumber'])){
    $scan_code = $_GET['assetApplicationNumber'];
    $execQry = fetchSingleData("tbl_vehicles", "scan_code", $scan_code);
    $rows = mysqli_fetch_array($execQry);
    $scan_code = $rows['scan_code'];
    
}
// End your initialization here
?>

<!--////////////////Start your HTML forms and do your function call here/////////////////////////////--->
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
<!--/////////////////////////////////////Do your delete and edit here///////////////////////////////////-->
                        
                                                       

                                   
                        <hr style="border-top:1px dotted #ccc;"/>
                        <div class="col-md-10  text-white text-center">
                        <a id="backBtn" href=""
                        type="button" class="popUpModal mb-2 mr-2 btn-transition btn btn-outline-primary"><i
                            class="fa fa-arrow-alt-circle-left mr-3"></i>Back to Vehicle List
                            </a>
                            <a href="editVehicle.php?scan_code=<?php echo $scan_code;?>"
                            type="button" class="popUpModal mb-2 mr-2 btn-transition btn btn-outline-success" id="application-print"><i
                            class=""></i>Edit Vehicle Details
                            </a>
                            <button type="button" class="popUpModal mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal"
                            data-target="#deleteBtn">
                            <i class="fa fa-arrow-alt-circle-delete"></i>Delete Vehicle List</button>
                        </div>
                        <hr style="border-top:1px dotted #ccc;"/>
<!--/////////////////////////////////End your Delete & Edit Stuff Here//////////////////////////////////--> 
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5><b>Asset ID: <span><?php echo $rows['scan_code'];?></span></b></h5><hr/>        
                    <div class="list-section">
                      <div class="list-menu">
                        <div class="row p-3">
                            <div class="col-lg-4 col-md-4 ">
                                <div class="card asset-img">
                                    <div class="card-body">
                                    <?php 
/*///////////////////////////////// A call to function is done here//////////////////////////////////////*/
                                    $receipt1ExecQry = getUploadedDocuments($scan_code);
                                    $receipt1Rows = mysqli_fetch_array($receipt1ExecQry);
                                    ?>
                                    <img src="<?php echo $receipt1Rows['attachment'] ; ?>" width="100%" height="100%" />
    
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
                                            <span><?php echo $rows['scan_code'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Asset Name :</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $rows['name'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Asset Description :</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $rows['descriptn'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <lebel><b>Reg.Date:</b></lebel>
                                        </div>
                                        <div class="col-sm-8">
                                            <span><?php echo $rows['created_date'];?></span>
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
                                    
                                    <td style="width: 30%"><?php echo $rows['ve_sub_category'];?></td>
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
                                    <td style="width: 30%"><?php echo $rows['asset_condition'];?></td>
                                    <th style="width: 20%">Asset Brand :</th>
                                    <td style="width: 30%"><?php echo $rows['brand'];?></td>
                                </tr>

                                <tr>
                                    <th style="width: 20%">Chasis No :</th>
                                    <td style="width: 30%"><?php echo $rows['chasis_no'];?></td>
                                    <th style="width: 20%">Driver's Name :</th>
                                    <td style="width: 30%"><?php echo $rows['driver'];?></td>
                                </tr>

                                <tr>
                                    <th style="width: 20%">Number Plate :</th>
                                    <td style="width: 30%"><?php echo $rows['no_plate'];?></td>
                                    <th style="width: 20%">Model :</th>
                                    <td style="width: 30%"><?php echo $rows['model'];?></td>
                                </tr>
                            </table>
                        </div>
                      </div><hr>
                    </div></div></div>

                    <script src="../vendor/jquery/jquery.min.js"></script>
                    <!-- Page level plugins -->
                    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
                        <!-- Page level custom scripts -->
                    <script src="../js/datatables-demo.js"></script>  
                    <script src="../js/deleteVehicle.js"></script> 

                        </div>
                    <?php include('includes/footer.php'); ?>

<!--/////////////////////////////////////// Modal for Delete ///////////////////////////////////////////////-->

                    <div class="modal fade" id="deleteBtn">
                            <div class="modal-dialog" style="max-width: 500px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                            <i class="mdi mdi-plus-bold"></i>Confirm Operation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <div class="modal-body">
                    <div class="col-12 grid-margin">

                        <p class="alert alert-success" style="display:none">Asset record has been successfully deleted!
                        </p>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p><b>Are you sure you want to delete this asset record?</b></p>
                            </div>
                            <input type="hidden" id="scan_code" value="<?php echo $scan_code ?>" />
                        </div>
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <button type="button" class="popUpModal mb-2 mr-2 btn-transition btn btn-outline-danger" id="sra-btn">Delete</button>
                                <button data-dismiss="modal" type="button" class="popUpModal mb-2 mr-2 btn-transition btn btn-outline-success" id="btn-cancel">Cancel</button>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>  </div> 
<!--//////////////////////////////////////////////////// End modal //////////////////////////////////////////////////////////////-->