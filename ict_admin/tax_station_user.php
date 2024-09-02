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

$asstQry = fetchAllAsset('allasset','scan_code');

$Qry = fetchAssetLimit('allasset','id');
$akureExpress = mysqli_num_rows(getLocationCount('allasset', 'Akure Express'));
$bolorunduro = mysqli_num_rows(getLocationCount('allasset', 'Bolorunduro'));
$ijuItagbolu = mysqli_num_rows(getLocationCount('allasset', 'Iju-Itaogbolu'));
$ijokaOshinle = mysqli_num_rows(getLocationCount('allasset', 'Ijoka-Oshinle'));
$ileOluji = mysqli_num_rows(getLocationCount('allasset', 'Ileoluji'));
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
                                    
                                    <?php include('includes/tax_stations_qrprint.php');?>

                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                        </div>


                        <div class="row">
                            
                            
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Akure Express</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\akure_express.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\bolorunduro.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-heading">Iju/Itagbolu</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\iju_itaogbolu.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ijuItagbolu; ?></div>
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
                                                 <div class="widget-subheading"><a href="..\tax_stations\qrprint\ijoka_oshinle.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $ijokaOshinle; ?></div>
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
                                                 <div class="widget-subheading"><a href="..\tax_stations\qrprint\ile_oluji.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ileOluji; ?></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\isua.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\idanre.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\igbaraoke.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-heading">Igbekebo</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\igbekebo.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\ikare_akoko.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\ifon.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-heading">Igbokoda</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\igbokoda.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-heading">Oba Adesida</div>
                                               <div class="widget-subheading"><a href="..\tax_stations\qrprint\oba_adesida.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\ode_irele.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                               <div class="widget-subheading"><a href="..\tax_stations\qrprint\oyemekun.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\ondo_sabo.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\ondo_yaba.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-heading">OkeAro-Isikan</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\oke_aro.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-heading">Oke Agbe</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\oke_agbe.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                               <div class="widget-subheading"><a href="..\tax_stations\qrprint\ore_lagos.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                               <div class="widget-subheading"><a href="..\tax_stations\qrprint\ore_benin.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\owo.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\oka_akoko.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\okitipupa.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $okitipupa; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">FRSC OFFICE</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\frsc.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $FRSC; ?></div>
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
                                                <div class="widget-heading">Hall</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\hall.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $Hall; ?></div>
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
                                                <div class="widget-heading">Head Admin</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\ada.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $HeadAdmin; ?></div>
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
                                                <div class="widget-heading">Head HR</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\headhr.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $HeadHR; ?></div>
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
                                                <div class="widget-heading">Head ICT</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\headict.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $HeadICT; ?></div>
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
                                                <div class="widget-heading">Head MLA</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\headmla.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $HeadMLA; ?></div>
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
                                                <div class="widget-heading">ICT</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\ictasset.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $ICT; ?></div>
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
                                                <div class="widget-heading">Internal Audit</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\intaudit.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $InternalAudit; ?></div>
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
                                                <div class="widget-heading">Legal</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\legal.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $Legal; ?></div>
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
                                                <div class="widget-heading">Legal Library</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\legallib.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $LegalLibrary; ?></div>
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
                                                <div class="widget-heading">LUC</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\luc.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $LUC; ?></div>
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
                                                <div class="widget-heading">LUC Billing</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\lucbilling.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $LUCBilling; ?></div>
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
                                                <div class="widget-heading">Main Reception</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\mreception.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $MainReception; ?></div>
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
                                                <div class="widget-heading">MDA and Others</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\DMAothers.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $MDANOthers; ?></div>
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
                                                <div class="widget-heading">Meeting Room1</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\mroom1.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $MeetingRoom1; ?></div>
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
                                                <div class="widget-heading">Meeting Room2</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\mroom2.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $MeetingRoom1; ?></div>
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
                                                <div class="widget-heading">MIS</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\mis.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $MIS; ?></div>
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
                                                <div class="widget-heading">MLA Open Office</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\mlaopen.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $MLAOpenOffice; ?></div>
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
                                                <div class="widget-heading">Open Office</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\openoffice.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $OpenOffice; ?></div>
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
                                                <div class="widget-heading">Open Registry</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\openreg.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $OpenRegistry; ?></div>
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
                                                <div class="widget-heading">PASA</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\pasa.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $PASA; ?></div>
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
                                                <div class="widget-heading">PAYE</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\paye.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $PAYE; ?></div>
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
                                                <div class="widget-heading">Pay Master</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\paymaster.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $PayMaster; ?></div>
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
                                                <div class="widget-heading">RMU</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\rmu.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $RMU; ?></div>
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
                                                <div class="widget-heading">Secretary Chairman</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\secchairman.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $SecChairman; ?></div>
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
                                                <div class="widget-heading">Security</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\security.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $Security; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="col-md-6 col-xl-4">-->
                            <!--    <div class="card mb-3 widget-content">-->
                            <!--        <div class="widget-content-outer">-->
                            <!--            <div class="widget-content-wrapper">-->
                            <!--                <div class="widget-content-left">-->
                            <!--                    <div class="widget-heading">Server Room</div>-->
                            <!--                    <div class="widget-subheading"><a href="..\tax_stations\qrprint\serverroom.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>-->
                            <!--                </div>-->
                            <!--                <div class="widget-content-right">-->
                            <!--                    <div class="widget-numbers text-success"><?php echo $ServerRoom; ?></div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <!--div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">SLO</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\slo.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $SLO; ?></div>
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
                                                <div class="widget-heading">Stamp Duty</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\stampduty.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $StampDuty; ?></div>
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
                                                <div class="widget-heading">Store Office1</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\storeoffo.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $StoreOfficer1; ?></div>
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
                                                <div class="widget-heading">Store Office2</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\storeofft.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $StoreOfficer2; ?></div>
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
                                                <div class="widget-heading">Tax Audit Field</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\security.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $TaxAuditField; ?></div>
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
                                                <div class="widget-heading">Tax Audit Services</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\taservices.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $TaxAuditServices; ?></div>
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
                                                <div class="widget-heading">TEET</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\teet.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $TEET; ?></div>
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
                                                <div class="widget-heading">TEET Teamlead</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\teettl.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $TEETTeamlead; ?></div>
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
                                                <div class="widget-heading">TIN</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\tin.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $TIN; ?></div>
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
                                                <div class="widget-heading">Withholding Tax</div>
                                                <div class="widget-subheading"><a href="..\tax_stations\qrprint\wth.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $WithholdingTax; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                            
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
                url: "ict_admin_dashboardAjax.php",
                type: "POST",
                data: transmissionData,
                success: function (res) {
                    let jsonObj = JSON.parse(res);
                    console.log(jsonObj);
                    if(jsonObj.success){
                        $("#assetModal").modal('show');
                        $(".modalImage").html(`<img src="${jsonObj.imageFile}" alt="Assename" width="100%" height="200">`)
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



<!-- Modal --
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
</div-->





