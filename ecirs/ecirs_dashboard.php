<?php 
//require_once "includes/header.php" 
include('includes/header.php');
include('includes/navbar.php');
include("includes/config.php"); 
//session_start();
$bu_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_buildings"));
$ve_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_vehicles"));
$ff_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_furnitures"));
$eq_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_equipments"));
$ee_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_electronics"));
$oi_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_otheritems"));

$asstQry = fetchAllAsset('tbl_buildings','scan_code');

$Qry = fetchAssetLimit('allasset','id');
$akureHQ = mysqli_num_rows(getLocationCount('allasset', 'Akure HQ'));
$akureExpress = mysqli_num_rows(getLocationCount('allasset', 'Akure Express'));
$bolorunduro = mysqli_num_rows(getLocationCount('allasset', 'Bolorunduro'));
$ijuItaogbolu = mysqli_num_rows(getLocationCount('allasset', 'Iju-Itaogbolu'));
$ijokaOshinle = mysqli_num_rows(getLocationCount('allasset', 'Ijoka-Oshinle'));
$ileoluji = mysqli_num_rows(getLocationCount('allasset', 'Ileoluji'));
$isua = mysqli_num_rows(getLocationCount('allasset', 'Isua'));
$idanre = mysqli_num_rows(getLocationCount('allasset', 'Idanre'));
$igbaraoke = mysqli_num_rows(getLocationCount('allasset', 'Igbaraoke'));
$igbekebo = mysqli_num_rows(getLocationCount('allasset', 'Igbekebo'));
$ikareAkoko = mysqli_num_rows(getLocationCount('allasset', 'Ikare Akoko'));
$ifon = mysqli_num_rows(getLocationCount('allasset', 'Ifon'));
$igbokoda = mysqli_num_rows(getLocationCount('allasset', 'Igbokoda'));
$obaAdesida = mysqli_num_rows(getLocationCount('allasset', 'Oba Adesida'));
$odeIrele = mysqli_num_rows(getLocationCount('allasset', 'Ode Irele'));
$oyemekun = mysqli_num_rows(getLocationCount('allasset', 'Oyemekun'));
$ondoSabo = mysqli_num_rows(getLocationCount('allasset', 'Ondo-Sabo'));
$ondoYaba = mysqli_num_rows(getLocationCount('allasset', 'Ondo Yaba'));
$okeAroIsikan = mysqli_num_rows(getLocationCount('allasset', 'Oke Aro-Isikan'));
$okeAgbe = mysqli_num_rows(getLocationCount('allasset', 'OkeAgbe'));
$oreLagos = mysqli_num_rows(getLocationCount('allasset', 'Ore-Lagos'));
$oreBenin = mysqli_num_rows(getLocationCount('allasset', 'Ore Benin'));
$owo = mysqli_num_rows(getLocationCount('allasset', 'Owo'));
$okaAkoko = mysqli_num_rows(getLocationCount('allasset', 'Oka Akoko'));
$okitipupa = mysqli_num_rows(getLocationCount('allasset', 'Okitipupa'));

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
                        <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                        <div class="widget-heading">Buildings</div>
                                            <div class="widget-subheading"><a href="viewBuilding.php" style="color:white">Total No. of Buildings</a></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $bu_count;?></span></div>
                                        </div>
                                    </div>
                                   </div>
                                </div> 

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Vehicles</div>
                                            <div class="widget-subheading"><a href="viewVehicle.php"style="color:white">Total No. of Vehicles</a></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $ve_count;?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Furnitures & Fittings</div>
                                            <div class="widget-subheading"><a href="viewFurniture.php"style="color:white">Total No. of Furnitures & Fittings</a></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $ff_count;?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                        <div class="widget-heading">Equipments</div>
                                            <div class="widget-subheading"><a href="viewEquipment.php"style="color:white">Total No. of Equipment</a></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $eq_count;?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Electrical Electronics</div>
                                            <div class="widget-subheading"><a href="viewElectronics.php"style="color:white">Total No. of Electronics</a></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $ee_count;?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Other Items</div>
                                            <div class="widget-subheading"><a href="viewOtherItems.php" style="color:white">Total No. of Other Items</a></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $oi_count;?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

<!--================================================================================-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Recently Added Items
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <!--button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">S/No.</th>
                                                    <th>Assets Full Description</th>
                                                    <th class="text-center">Location</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">View Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $sn = 1; while($rows = mysqli_fetch_array($Qry)){?>
                                                <tr>
                                                    <td class="text-center text-muted"><?php echo $sn; ?></td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <div class="widget-content-left tableImage">
                                                                        <img width="40" height="40" class="rounded-circle" src="<?php echo $rows['assetImage']; ?>" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading"><?php echo $rows['assetName']; ?></div>
                                                                    <div class="widget-subheading opacity-7"><?php echo $rows['scanCode']; ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center"><?php echo $rows['assetLocation']; ?></td>
                                                    <td class="text-center">
                                                        <div class="badge badge-success"><?php echo $rows['assetStatus']; ?></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="hidden" name="scanCode" id="scanCode" value="<?php echo $rows['scanCode'];?>">
                                                        <button type="button" class="popUpModal mb-2 mr-2 btn-transition btn btn-outline-primary">View Asset Details</button>
                                                    </td>
                                                </tr>
                                            <?php $sn = $sn+1; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- ================================================================================== -->
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Akure Head Quarters</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $akureHQ; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Akure Express</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning"><?php echo $akureExpress; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Bolorunduro</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $bolorunduro; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Iju/Itaogbolu</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ijuItaogbolu; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ijoka/Oshinle</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ijokaOshinle; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ile-Oluji</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ileoluji; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Isua</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $isua; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Idanre</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $idanre; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Igbaraoke</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $igbaraoke; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Igbokoda</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $igbokoda; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Igbekebo</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $igbekebo; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ikare Akoko</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ikareAkoko; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ifon</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ifon; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Oba Adesida</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $obaAdesida; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ode Irele</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $odeIrele; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Oyemekun</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $oyemekun; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ondo Sabo</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ondoSabo; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ondo Yaba</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ondoYaba; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Oke Aro/Isikan</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $okeAroIsikan; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Oke-Agbe</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $okeAgbe; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ore-Lagos</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $oreLagos; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ore Benin</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $oreBenin; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Owo</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $owo; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Oka Akoko</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $okaAkoko; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Okitipupa</div>
                                                <div class="widget-subheading">Total No. of Asset</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $okitipupa; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--=================================================================================  -->
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php include('includes/footer.php'); ?>

<script>
    $(document).ready(function () {
        console.log("ict_admin_dasboard is connected");
        $(".popUpModal").click(function (e) {
            e.preventDefault();
            let popBtn = e.target.previousElementSibling;
            let popBtnValue = popBtn.value;
            let transmissionData = {popBtnValue};
            $.ajax({
                url: "ecirs_dashboardAjax.php",
                type: "POST",
                data: transmissionData,
                success: function (res) {
                    let jsonObj = JSON.parse(res);
                    console.log(jsonObj);
                    if(jsonObj.success){
                        $("#assetModal").modal('show');
                        $(".modalImage").html(`<img src="${jsonObj.imageFile}" alt="Asset Image" width="100%" height="200">`)
                        $("#assetName").html(jsonObj.name);
                        $("#location").html(jsonObj.location);
                        $("#ownDegree").html(jsonObj.own_degree);
                        $("#assetCodition").html(jsonObj.asset_condition);
                        $("#description").html(jsonObj.description);
                        $("#serialNumber").html(jsonObj.serial_number);
                        $("#model").html(jsonObj.model);
                        $("#brand").html(jsonObj.brand);
                        $("#procureDate").html(jsonObj.procure_date);
                        $("#address").html(jsonObj.address);
                    }else if(!jsonObj.success){
                        alert("An unknown error occured please try again...");
                    }
                }
            });
        });
    });

</script>


 <script>
  setInterval(function() {
    window.location.reload()
  }, 10000)
  </script>


<!-- Modal -->
<div class="modal fade" id="assetModal" tabindex="-1" role="diria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Asset Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-5 col-md-5 mb-4">
                    <div class="card asset-img">
                        <div class="card-body modalImage" id="modalImage">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="border-bottom py-1"><b>Asset Name :</b> <span class="ml-2" id="assetName"></span></div>
                    <div class="border-bottom py-1"><b>Asset Location :</b> <span class="ml-2" id="location"></span></div>
                    <div class="border-bottom py-1"><b>Owner Degree :</b> <span class="ml-2" id="ownDegree"></span></div>
                    <div class="border-bottom py-1"><b>Asset Condition :</b> <span class="ml-2" id="assetCodition"></span></div>
                    <div class="border-bottom py-1"><b>Description :</b> <span class="ml-2" id="description"></span></div>
                    <div class="border-bottom py-1"><b>Serial Number :</b> <span class="ml-2" id="serialNumber"></span></div>
                    <div class="border-bottom py-1"><b>Model :</b> <span class="ml-2" id="model"></span></div>
                    <div class="border-bottom py-1"><b>Brand :</b> <span class="ml-2" id="brand"></span></div>
                    <div class="border-bottom py-1"><b>Procurement Date :</b> <span class="ml-2" id="procureDate"></span></div>
                    <div class="border-bottom py-1"><b>Address :</b> <span class="ml-2" id="address"></span></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>





