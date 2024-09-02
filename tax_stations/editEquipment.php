<?php 
/*//////////////////////////////////////////////////////////////////////
AUTHOR: ODIRS ICT Software Development Team
COPYRIGHT: Ondo State Internal Revenue
DATE: October, 2020
//////////////////////////////////////////////////////////////////////*/
include('includes/config.php'); 
include('includes/header.php');
include('includes/navbar.php');

if(isset($_GET['scan_code'])){
    $scan_code = $_GET['scan_code'];
    $execQry = fetchSingleData("tbl_equipments", "scan_code", $scan_code);
    $row = mysqli_fetch_array($execQry);
    $scan_code = $row['scan_code'];
    $eq_sub_category = $row['eq_sub_category'];
    $name = $row['name'];
    $brand = $row['brand'];
    $model = $row['model'];
    $serial_no = $row['serial_no'];
    $location = $row['location'];
    $own_degree = $row['own_degree'];
    $status = $row['status'];
    $asset_condition = $row['asset_condition'];
    $initial_value = $row['initial_value'];
    $procure_date = $row['procure_date'];
    $deprec_value = $row['deprec_value'];
    $address = $row['address'];
    $size = $row['size'];
    $quantity = $row['quantity'];
    $dept = $row['dept'];
    $descriptn = $row['descriptn'];
    $created_date = date('Y-m-d h:i:s');
////////////////////////////////////////////////////////////////////////// 
}
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
                                    
                                    <?php include('includes/furniture_dashboard.php');?>

                                </div>
                            </div>
                        </div>
                            <?php 
                          
                            //Get the parent query for loading category here. Then call the corresponding child query in the req file.
                            $eq_query_parent = mysqli_query($conn, "SELECT * FROM eq_category") or die("Query failed: ".mysqli_error());
                            //End your parent query and continue with your HTML tagging.
                            ?>
                           <!--/////////////////////////////////Start your animated Tab View Here////////////////////////////////////-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3 card">
                                            <div class="card-body">
                                                <ul class="tabs-animated-shadow tabs-animated nav">
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-0" data-toggle="tab" href="#tab-animated-0">
                                                            <span>Buildings</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-1" data-toggle="tab" href="#tab-animated-1">
                                                            <span>Vehicles</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-2">
                                                            <span>Furniture & Fittings</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link active" id="tab-c-2" data-toggle="tab" href="#tab-animated-3">
                                                            <span>Equipments</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-4">
                                                            <span>Electrical & Electronics</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-5">
                                                            <span>Other Items</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                    <div class="tab-content">
                            <!--/////////////////////////////////Start your animated Tab View Here////////////////////////////////////-->


                            <!--/////////////////////////////////////////BUILDING FORM STARTS HERE////////////////////////////////////-->
                                    <div class="tab-pane" id="tab-animated-0" role="tabpanel"><p class="mb-0">
                                    <hr/>  
                                    <h5 class="card-title">Building Details</h5>
                                    <hr/>                     
                                   
                            </p>   
                          </div>


                        <!--/////////////////////////////////BULDING FORM ENDS HERE////////////////////////////////////-->


                            <!--/////////////////////////////////////////VEHICLE FORM STARTS HERE////////////////////////////////////-->


                            <div class="tab-pane" id="tab-animated-1" role="tabpanel"><p class="mb-0">
                                    <hr/>  
                                    <h5 class="card-title">Vehicle Details</h5>
                                    <hr/>  
                                </p>
                                </div>
                            <!--/////////////////////////////////////////VEHICLE FORM ENDS HERE////////////////////////////////////-->


                            <!--/////////////////////////////////////////FURNITURE FORM STARTS HERE////////////////////////////////////-->
                                <div class="tab-pane" id="tab-animated-2" role="tabpanel"> <p class="mb-0">
                                <hr/>  
                                    <h5 class="card-title">Furniture & Fitting Details</h5>
                                    <hr/>
                                    </p></div>
                                <!--/////////////////////////////////////////FURNITURE FORM ENDS HERE////////////////////////////////////-->

                                
                                <!--/////////////////////////////////////////EQUIPMENT FORM STARTS HERE////////////////////////////////////-->

                                <div class="tab-pane active" id="tab-animated-3" role="tabpanel"> <p class="mb-0">
                                    <hr/>  
                                    <h5 class="card-title">Equipment Details</h5>
                                    <hr/>
                                    <form action = "" method = "POST" enctype="multipart/form-data" onsubmit="return validateForm()" id = "assetRegistrationForm" 
                                    class="needs-validation"  novalidate>
                                    <div class="form-row">
                    
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Category</label>
                                           
                                            <select type="text" class="form-control" name= "eq_category" id="eq_category" required>
                                                            <option value="">Select Category</option>
                                                            <?php while($row = mysqli_fetch_array($eq_query_parent)): ?>
                                                            <option value ="<?php echo $row['id'];?>"><?php echo $row['cat_name']; ?></option>
                                                            <?php endwhile; ?>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid building category</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Sub Category</label>
                                            
                                            <select type="text" class="form-control" name = "eq_sub_category" id="eq_sub_category" required>
                                            <option value="<?php echo $eq_sub_category; ?>">
                                            <?php echo $eq_sub_category; ?></option>
                                                            
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid building sub category</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Name</label>
                                            <input type="text" class="form-control" name = "name"  id="name" value = "<?php echo $name; ?>" placeholder="Name"   required>
                                            <input type="hidden" name="scan_code" value="<?php echo $scan_code; ?>" />
                                             <div class="invalid-feedback">Please provide a valid building name</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Serial No.</label>
                                            <input type="text" class="form-control" name = "serial_no"  id="serial_no" value = "<?php echo $serial_no; ?>" placeholder="Serial No"   required>
                                            <div class="invalid-feedback">Please provide a valid serial number</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Model</label>
                                            <input type="text" class="form-control" name = "model"  id="model" value = "<?php echo $model; ?>"  placeholder="Model"   required>
                                            
                                            <div class="invalid-feedback">Please provide a valid model</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Brand</label>
                                            <input type="text" class="form-control" name = "brand"  id="brand" value = "<?php echo $brand; ?>"  placeholder="Brand"   required>
                                            
                                            <div class="invalid-feedback">Please provide a valid brand name</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Location</label>
                                            <input type="text" class="form-control" name = "location"  id="location" value = "<?php echo $location; ?>" placeholder="Brand"   required readonly>
                                            
                                            <div class="invalid-feedback">Please provide a valid location name</div>
                                        </div>

                                        <!--div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Equipment Location</label>        
                                            <select name="location" name = "location" id="location" class="form-control" required disabled>
                                            <option value="<?php echo $location; ?>"><?php echo $location; ?></option>
                                                        <option value="">Select Location</option>
                                                        <option value="Akure HQ">Akure HQ</option>
                                                        <option value="Akure South">Akure Express</option>
                                                        <option value="Bolorunduro">Bolorunduro</option>
                                                        <option value="Iju/Itaogbolu">Iju/Itaogbolu</option>
                                                        <option value="Ijoka/Oshinle">Ijoka/Oshinle</option>
                                                        <option value="Ileoluji">Ileoluji</option>
                                                        <option value="Isua">Isua</option>
                                                        <option value="Idanre">Idanre</option>
                                                        <option value="Igbaraoke">Igbaraoke</option>
                                                        <option value="Igbekebo">Igbokoda</option>
                                                        <option value="Ikare Akoko">Ikare Akoko</option>
                                                        <option value="Ifon">Ifon</option>
                                                        <option value="Igbokoda">Igbokoda</option>
                                                        <option value="Oba Adesida">Oba Adesida</option>
                                                        <option value="Ode Irele">Ode Irele</option>
                                                        <option value="Oyemekun">Oyemekun</option>
                                                        <option value="Ondo-Sabo">Ondo-Sabo</option>
                                                        <option value="Ondo Yaba">Ondo Yaba</option>
                                                        <option value="Oke Aro/Isikan">Oke Aro/Isikan</option>
                                                        <option value="OkeAgbe">OkeAgbe</option>
                                                        <option value="Ore- Lagos">Ore - Lagos</option>
                                                        <option value="Ore Benin">Ore Benin</option>
                                                        <option value="Owo">Owo</option>
                                                        <option value="Oka Akoko">Oka Akoko</option>
                                                        <option value="Okitipupa">Okitipupa</option>

                                                    </select>
                                            <div class="invalid-feedback">Please provide a valid location</div>
                                        </div-->

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Owners Degree</label>
                                            <select type="text" class="form-control" name = "own_degree" id="own_degree" required>
                                            <option value="<?php echo $own_degree; ?>"><?php echo $own_degree; ?></option>
                                                            <option value="100% Government">100% Government</option>
                                                            <option value="Partialy Owned by Government">Partialy Owned by Government</option>
                                            </select>
                                            <div class="invalid-feedback">Please provide a valid owners degree</div>
                                        </div>
                                     
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Status</label>
                                            <select type="text" class="form-control" name = "status" id="status" required>
                                            <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                                            <option value="Occupied by Govt.">Occupied by Govt.</option>
                                                            <option value="Unused">Unused</option>
                                                            <option value="Rented">Rented</option>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid status</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Condition</label>
                                            <select type="text" class="form-control" name = "asset_condition" id="asset_condition" required>
                                            <option value="<?php echo $asset_condition; ?>"><?php echo $asset_condition; ?></option>
                                                            <option value="Good">Good</option>
                                                            <option value="Fair">Fair</option>
                                                            <option value="Bad">Bad</option>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid condition</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Initial Value</label>
                                            <input type="text" class="form-control" name = "initial_value" id="initial_value" value = "<?php echo $initial_value?>" placeholder="Initial Value"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Procurement Date</label>
                                            <input type="date" class="form-control" name = "procure_date" id="procure_date" value = "<?php echo $procure_date?>" placeholder="Procurement Date"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Depreciation Value</label>
                                            <input type="text" class="form-control" name = "deprec_value" id="deprec_value" value = "<?php echo $deprec_value?>" placeholder="Depreciation Value"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Furniture Address</label>
                                            <input type="text" class="form-control" name = "address" id="address"  value = "<?php echo $address?>"placeholder="Address"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Furniture Size</label>
                                            <input type="text" class="form-control" name = "size" id="size" value = "<?php echo $size?>" placeholder="Size"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Furniture Quantity</label>
                                            <input type="text" class="form-control" name = "quantity" id="quantity" value = "<?php echo $quantity?>" placeholder="Quantity"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Department</label>
                                            <input type="text" class="form-control" name = "dept" id="dept" value = "<?php echo $dept?>" placeholder="Department"  required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="buildingImage">Building Upload Image</label>
                                            <input type="file" class="form-control" name="fileUpload1" id="fileUpload1" required />
                                            <div class="invalid-feedback">Please upload image</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Description</label>
                                            <textarea class="form-control" name="descriptn" id="descriptn" placeholder="Asset Description"   required>
                                            <?php echo $descriptn;?>
                                            </textarea>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>
                                    </div><hr/>
                                   
                                    <button class="btn btn-primary" type="submit"  name="assetRegistrationForm" value="assetRegistrationForm">Submit form</button>
                                </form>
                                                        
                                 </p></div>
                                <!--/////////////////////////////////////////EQUIPMENT FORM ENDS HERE////////////////////////////////////-->

                    
                               <!--/////////////////////////////////////////ELECTRICAL FORM STARTS HERE////////////////////////////////////-->

                                <div class="tab-pane" id="tab-animated-4" role="tabpanel"><p class="mb-0">
                                    <hr/>  
                                    <h5 class="card-title">Electrical/Electronic Details</h5>
                                    <hr/> 
                                    
                                </p></div>
                                <!--/////////////////////////////////////////ELECTRICAL FORM ENDS HERE////////////////////////////////////-->


                                <!--//////////////////////////////////////OTHER ITEMS FORM STARTS HERE////////////////////////////////////-->
                                <div class="tab-pane" id="tab-animated-5" role="tabpanel"> <p class="mb-0">
                                <hr/>  
                                    <h5 class="card-title">Edit Other Items</h5>
                                    <hr/> 
                                    
                                   
                               
                                </p>
                                </div>



                                
                                <!--////////////////////////////////////////OTHER ITEMS FORM ENDS HERE////////////////////////////////////-->
                                </div></div></div></div>
                                <?php include "editEquipmentAjax.php"; ?>
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>

                                <script type="text/javascript" src="../js/jquery.js"></script>
                                
                                <script type="text/javascript">
                                // Javascript responsible for loading various categories of asset
                                    $(document).ready(function() {
                                        

                                        // Javascript for eq_category is for asset vechicle
                                        $("#eq_category").change(function() {
                                            $(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
                                            $.get('loadsubcat.php?eq_category=' + $(this).val(), function(data) {
                                                $("#eq_sub_category").html(data);
                                                $('#loader').slideUp(2000, function() {
                                                    $(this).remove();
                                                });
                                            });	
                                        });

                                    });
                                    </script>

                               

                                <!--?php include "editVehAssetAjax.php";?-->
                                
                                    



                            </div></div></div>
                        <?php include('includes/footer.php'); ?>

                            
                           
                   




