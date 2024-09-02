<?php 

/*//////////////////////////////////////////////////////////////////////
AUTHOR: ODIRS ICT Software Development Team
COPYRIGHT: Ondo State Internal Revenue
DATE: October, 2020
//////////////////////////////////////////////////////////////////////*/

include('includes/header.php');
include('includes/navbar.php');

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
                                    
                                    <?php include('includes/furniture_dashboard.php');?>

                                </div>
                            </div>
                        </div>
                            <?php 
                          
                            //Get the parent query for loading category here. Then call the corresponding child query in the req file.
                            //$conn = mysqli_connect("localhost", "root", "", "odirs_assets") or die("Sorry, cannot connect to the database");
                            $ff_query_parent = mysqli_query($conn, "SELECT * FROM ff_category") or die("Query failed: ".mysqli_error());
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
                                                        <a role="tab" class="nav-link active" id="tab-c-2" data-toggle="tab" href="#tab-animated-2">
                                                            <span>Furniture & Fittings</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-3">
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
                         
                          <!--/////////////////////////////////////////BUILDING FORM ENDS HERE////////////////////////////////////-->                                       


                         <!--/////////////////////////////////////////VEHICLE FORM STARTS HERE////////////////////////////////////-->
                            <div class="tab-pane" id="tab-animated-1" role="tabpanel"><p class="mb-0">
                                    <hr/>  
                                    <h5 class="card-title">Vehicle Details</h5>
                                    <hr/>  
                            
                                </p>
                                </div>
                            <!--/////////////////////////////////////////VEHICLE FORM ENDS HERE////////////////////////////////////-->


                            <!--/////////////////////////////////////////FURNITURE FORM STARTS HERE////////////////////////////////////-->
                                <div class="tab-pane active" id="tab-animated-2" role="tabpanel"> <p class="mb-0">
                                <hr/>  
                                    <h5 class="card-title">Furniture & Fitting Details</h5>
                                    <hr/>
                                    <form action = "" method = "POST" enctype="multipart/form-data"  onsubmit="return validateForm()" id = "assetRegistrationForm" class="needs-validation"  novalidate>
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Category</label>
                                            <select type="text" class="form-control" name= "ff_category" id="ff_category" required>
                                                            <option value="">Select Category</option>
                                                            <?php while($row = mysqli_fetch_array($ff_query_parent)): ?>
                                                            <option value ="<?php echo $row['id'];?>"><?php echo $row['cat_name']; ?></option>
                                                            <?php endwhile; ?>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid Category</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Sub Category</label>
                                            <select type="text" class="form-control" name = "ff_sub_category" id="ff_sub_category" required>
                                                            <option value="">Select Asset Sub Category</option>
                                                            
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid Sub Category</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Furniture Name</label>
                                            <input type="text" class="form-control" name = "name"  id="name" placeholder="Name"   required>
                                            <input type="hidden" name="scan_code" id = "scan_code"/>
                                            <div class="invalid-feedback">Please provide a valid furniture  name</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Furniture Location</label>
                                            <select name="location" name = "location" id="location" class="form-control" required>
                                                        <option value="">Select Your Tax Station </option>
                                                        <option value="Akure Express">Akure Express</option>
                                                        <option value="Bolorunduro">Bolorunduro</option>
                                                        <option value="Iju-Itaogbolu">Iju-Itaogbolu</option>
                                                        <option value="Ijoka-Oshinle">Ijoka-Oshinle</option>
                                                        <option value="Ileoluji">Ileoluji</option>
                                                        <option value="Isua">Isua</option>
                                                        <option value="Idanre">Idanre</option>
                                                        <option value="Igbaraoke">Igbaraoke</option>
                                                        <option value="Igbekebo">Igbekebo</option>
                                                        <option value="Igbokoda">Igbokoda</option>
                                                        <option value="Ikare Akoko">Ikare Akoko</option>
                                                        <option value="Ifon">Ifon</option>  
                                                        <option value="Oba Adesida">Oba Adesida</option>
                                                        <option value="Ode Irele">Ode Irele</option>
                                                        <option value="Oyemekun">Oyemekun</option>
                                                        <option value="Ondo-Sabo">Ondo-Sabo</option>
                                                        <option value="Ondo Yaba">Ondo Yaba</option>
                                                        <option value="Oke Aro-Isikan">Oke Aro-Isikan</option>
                                                        <option value="OkeAgbe">OkeAgbe</option>
                                                        <option value="Ore-Lagos">Ore-Lagos</option>
                                                        <option value="Ore Benin">Ore Benin</option>
                                                        <option value="Owo">Owo</option>
                                                        <option value="Oka Akoko">Oka Akoko</option>
                                                        <option value="Okitipupa">Okitipupa</option>

                                                    </select>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Owners Degree</label>
                                            <select type="text" class="form-control" name = "own_degree" id="own_degree" required>
                                                            <option value="">Select Owners Degree</option>
                                                            <option value="100% Government">100% Government</option>
                                                            <option value="Partialy Owned by Government">Partialy Owned by Government</option>
                                            </select>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>
                                     
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Status</label>
                                            <select type="text" class="form-control" name = "status" id="status" required>
                                                            <option value="">Select Status</option>
                                                            <option value="Occupied by Govt.">Occupied by Govt.</option>
                                                            <option value="Unused">Unused</option>
                                                            <option value="Rented">Rented</option>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Furniture Condition</label>
                                            <select type="text" class="form-control" name = "asset_condition" id="asset_condition" required>
                                                            <option value="">Select Condition</option>
                                                            <option value="Good">Good</option>
                                                            <option value="Fair">Fair</option>
                                                            <option value="Bad">Bad</option>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Initial Value</label>
                                            <input type="text" class="form-control" name = "initial_value" id="initial_value" placeholder="Initial Value"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Procurement Date</label>
                                            <input type="date" class="form-control" name = "procure_date" id="procure_date" placeholder="Procurement Date"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Depreciation Value</label>
                                            <input type="text" class="form-control" name = "deprec_value" id="deprec_value" placeholder="Depreciation Value"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Furniture Address</label>
                                            <input type="text" class="form-control" name = "address" id="address" placeholder="Address"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Furniture Size</label>
                                            <input type="text" class="form-control" name = "size" id="size" placeholder="Size"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Furniture Quantity</label>
                                            <input type="text" class="form-control" name = "quantity" id="quantity" placeholder="Quantity"   required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>

                                        <!--<div class="col-md-4 mb-3">-->
                                        <!--    <label for="validationCustom02">Department</label>-->
                                        <!--    <input type="text" class="form-control" name = "dept" id="dept" placeholder="Department"  required>-->
                                            
                                        <!--    <div class="invalid-feedback">Please provide a valid description</div>-->
                                        <!--</div>-->
                                        
                                        <!--div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Department</label>
                                            <select type="text" class="form-control" name = "dept" id="dept" required>
                                                            <option value="Account">Account Dept</option>
                                                            <option value="Accountant">Accountant</option>
                                                            <option value="Admin">Admin Dept</option>
                                                            <option value="ADPT">ADPT</option>
                                                            <option value="Chairman">Chairman</option>
                                                            <option value="ChairmanOpenOffice">Chairman's Open Office</option>
                                                            <option value="ConsultantOffice1">Consultant Office1</option>
                                                            <option value="ConsultantOffice2">Consultant Office2</option>
                                                             <option value="ConsultantOffice3">Consultant Office3</option>
                                                             <option value="ConsultantOpenOffice">Consultant Open Office</option>
                                                            <option value="ConsumptionTax">Consumption Tax</option>
                                                            <option value="ContactCentre">Contact Centre</option>
                                                            <option value="CorporateServices">Corporate Services</option>
                                                            <option value="DFA">DFA</option>
                                                            <option value="DHIA">DHIA</option>
                                                            <option value="DirectAssessment">Direct Assessment</option>
                                                            <option value="DirLegal">DirLegal</option>
                                                             <option value="DirReception">Directorate Reception</option>
                                                            <option value="DMDA">DMDA</option>
                                                             <option value="DPIT">DPIT</option>
                                                            <option value="EReceipt">E-Receipt</option>
                                                             <option value="ETCC">ETCC</option>
                                                            <option value="ExternalAudit">External Audit</option>
                                                             <option value="FRSC">FRSC</option>
                                                            <option value="Hall">Hall</option>
                                                             <option value="HeadAdmin">Head Admin</option>
                                                            <option value="HeadHR">Head HR</option>
                                                             <option value="HeadICT">Head ICT</option>
                                                            <option value="HeadMLA">Head MLA</option>
                                                             <option value="ICT">ICT</option>
                                                            <option value="InternalAudit">Internal Audit</option>
                                                             <option value="Legal">Legal</option>
                                                            <option value="LegalLibrary">Legal Library</option>
                                                            <option value="LUC">LUC</option>
                                                            <option value="LUCBilling">LUC Billing</option>
                                                            <option value="MainReception">Main Reception</option>
                                                            <option value="MDANOthers">MDA & Others</option>
                                                            <option value="MeetingRoom1">Meeting Room1</option>
                                                            <option value="MeetingRoom2">Meeting Room2</option>
                                                            <option value="MIS">MIS</option>
                                                            <option value="MLAOpenOffice">MLA Open Office</option>
                                                            <option value="OpenOffice">Open Office</option>
                                                            <option value="OpenRegistry">Open Registry</option>
                                                            <option value="PASA">PASA</option>
                                                            <option value="PAYE">PAYE</option>
                                                            <option value="PayMaster">Pay Master</option>
                                                            <option value="PropertyTax">Property Tax</option>
                                                             <option value="RMU">RMU</option>
                                                            <option value="SecChairman">Sec Chairman</option>
                                                             <option value="Security">Security</option>
                                                            <option value="SLO">SLO</option>
                                                             <option value="StampDuty">StampDuty</option>
                                                            <option value="StoreOfficer1">Store Officer1</option>
                                                             <option value="StoreOfficer2">Store Officer2</option>
                                                            <option value="TaxAuditServices">Tax Audit Services</option>
                                                             <option value="TaxAuditField">TaxAudit Field</option>
                                                            <option value="TEET">TEET</option>
                                                             <option value="TEETTeamlead">TEET Teamlead</option>
                                                            <option value="TIN">TIN</option>
                                                            <option value="WithholdingTax">Withholding Tax</option>
                                                            
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid status</div>
                                        </div-->

                                        <div class="col-md-4 mb-3">
                                            <label for="buildingImage">Upload Furniture Image</label>
                                            <input type="file" class="form-control" name="fileUpload1" id="fileUpload1" required />
                                            <div class="invalid-feedback">Please upload image</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Furniture Description</label>
                                            <textarea class="form-control" name="descriptn" id="descriptn" placeholder="Description"   required>

                                                    </textarea>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>
                                    </div><hr/>
                                   
                                    <button class="btn btn-primary" type="submit"  name="assetRegistrationForm" value="assetRegistrationForm">Submit form</button>
                                </form>
                                </p></div>
                                <!--/////////////////////////////////////////FURNITURE FORM ENDS HERE////////////////////////////////////-->


                                
                                <!--/////////////////////////////////////////EQUIPMENT FORM STARTS HERE////////////////////////////////////-->

                                <div class="tab-pane" id="tab-animated-3" role="tabpanel"> <p class="mb-0">
                                    <hr/>  
                                    <h5 class="card-title">Equipment Details</h5>
                                    <hr/>
                                                        
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
                                    <h5 class="card-title">Other Items</h5>
                                    <hr/> 
                        
                                </p>
                                </div>
                               
                                <!--////////////////////////////////////////OTHER ITEMS FORM ENDS HERE////////////////////////////////////-->
                                </div></div></div> </div>
                                
                                <?php include "addFurnitureAjax.php"; ?>
                                
                                <script>
                              //Example starter JavaScript for disabling form submissions if there are invalid fields
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
                                        
                                        // Javascript for ff_category is for asset vechicle
                                        $("#ff_category").change(function() {
                                            $(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
                                            $.get('loadsubcat.php?ff_category=' + $(this).val(), function(data) {
                                                $("#ff_sub_category").html(data);
                                                $('#loader').slideUp(2000, function() {
                                                    $(this).remove();
                                                });
                                            });	
                                        });

                                    });
                                    </script>
                       
                      
                        </div></div></div>
                        <?php include('includes/footer.php'); ?>
                        
                        
                        
                        
                        <!--script type="text/javascript">
                                    $(function() {
                                        $( "#dept" ).autocomplete({
                                        source: 'ajax-dept-search.php',
                                        });
                                    });
                                    </script-->
                                    
                        
                        
                        
                        
                        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
                        crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
                        </script>
                        
                        
                        
                             <!-- jQuery --
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        
                        <!-- jQuery UI --
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script-->
                        
                        
                        
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
                       
                          
                        
                        

                           
                   




