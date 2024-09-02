<?php 
//require_once "includes/header.php" 
include('includes/header.php');
include('includes/navbar.php');
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

                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Asset Details</h5><hr/>

                                <form action = "" method = "POST" onsubmit="return validateForm()" id = "assetRegistrationForm"
                                 class="needs-validation"  novalidate>
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Name</label>
                                            <input type="text" class="form-control"  id="name" placeholder="Asset Name"  required>
                                            <div class="invalid-feedback">Please provide a valid name</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Asset Type/Category</label>
                                            <!--input type="text" class="form-control" id="type" placeholder="Asset Type"  required-->
                                            <select type="text" class="form-control" id="type" required>
                                                            <option value="">Select Category</option>
                                                            <option value="Building">Building</option>
                                                            <option value="Vehicle">Vehicle</option>
                                                            <option value="Furniture & Fitting">Furniture & Fitting</option>
                                                            <option value="Equipment">Equipment</option>
                                                            <option value="Electrical Electronics">Electrical Electronics</option>
                                                            <option value="Other Items">Other Items</option>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid asset type</div>
                                        </div>
                                        
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Location</label>
                                            <!--input type="text" class="form-control"  id="location" placeholder="Asset Location"  required-->
                                            <select name="location" id="location" class="form-control" required>
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
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Owners Degree</label>
                                            <!--input type="text" class="form-control" id="own_degree" placeholder="Owners Degree"  required-->
                                            <select type="text" class="form-control" id="own_degree" required>
                                                            <option value="">Select Owners Degree</option>
                                                            <option value="100% Government">100% Government</option>
                                                            <option value="Partialy Owned by Government">Partialy Owned by Government</option>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid owners degree</div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Status</label>
                                            <!--input type="text" class="form-control"  id="status" placeholder="Asset Status"  required-->
                                            <select type="text" class="form-control" id="status" required>
                                                            <option value="">Select Asset Status</option>
                                                            <option value="Occupied by Govt.">Occupied by Govt.</option>
                                                            <option value="Unused">Unused</option>
                                                            <option value="Rented">Rented</option>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid name</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Condition</label>
                                            <!--input type="text" class="form-control" id="asset_condition" placeholder="Asset Condition"  required-->
                                            <select type="text" class="form-control" id="asset_condition" required>
                                                            <option value="">Select Asset Condition</option>
                                                            <option value="Good">Good</option>
                                                            <option value="Fair">Fair</option>
                                                            <option value="Bad">Bad</option>
                                                        </select>
                                            <div class="invalid-feedback">Please provide a valid asset condition</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Initial Value</label>
                                            <input type="text" class="form-control"  id="initial_value" placeholder="Enter Asset Initial Value"  required>
                                            <div class="invalid-feedback">Please provide a valid name</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Procurement Date</label>
                                            <input type="date" class="form-control" id="procure_date" placeholder="Asset Procurement Date"  required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Depreciation Value</label>
                                            <input type="text" class="form-control"  id="deprec_value" placeholder="Enter Depreciation Value"  required>
                                            <div class="invalid-feedback">Please provide a valid depreciation value</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Address</label>
                                            <input type="text" class="form-control"  id="address" placeholder="Asset Address"  required>
                                            <div class="invalid-feedback">Please provide a valid asset address</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Size</label>
                                            <input type="text" class="form-control"  id="size" placeholder="Asset Size"  required>
                                            <div class="invalid-feedback">Please provide a valid asset size</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Quantity</label>
                                            <input type="text" class="form-control"  id="quantity" placeholder="Asset Quantity"  required>
                                            <div class="invalid-feedback">Please provide a valid asset quantity</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Area</label>
                                            <input type="text" class="form-control"  id="area" placeholder="Asset Department"  required>
                                            <div class="invalid-feedback">Please provide a valid asset area</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Description</label>
                                            <input type="text" class="form-control" id="description" placeholder="Asset Description"  required>
                                            <div class="invalid-feedback">Please provide a valid description</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Date</label>
                                            <input type="date" class="form-control" id="created_date" placeholder="Registered Date"  required>
                                            <div class="invalid-feedback">Please provide a valid date</div>
                                        </div>
                                    </div><hr/>
                                   
                                    <button class="btn btn-primary" type="submit" id="linkButton">Submit form</button>
                                    </form></div></div></div>


                            <?php include('includes/footer.php'); ?>
                            <script>
                                function validateForm() {
                                    document.documentElement.scrollTop = 0
                                }
                            </script>

                            <!--script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script-->

                        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
                        crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
                        </script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
                        <script src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
                        <script src = "js/addAsset.js"></script>
                        
                        <script src="js/toastr.min.js"></script>
                            
                            <script type="text/javascript">
                            $(document).ready(function() {
                                toastr.options.timeOut = 1500; // 1.5s
                                toastr.info('Add new ODIRS Asset');
                                $('#linkButton').click(function() {
                                toastr.success('Asset has been successfull added!');
                                toastr.options.timeOut = 1500;
                               // window.location.href = 'viewAsset.php'
                                });
                            });
                            </script>
            
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
                                <script type="text/javascript" src="assets/scripts/main.js"></script>   

                                
                           
                   




