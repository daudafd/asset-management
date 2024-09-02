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
$akureHQ = mysqli_num_rows(getLocationCount('allasset', 'Akure HQ'));
$akureSouth = mysqli_num_rows(getLocationCount('allasset', 'Akure South'));
$bolorunduro = mysqli_num_rows(getLocationCount('allasset', 'Bolorunduro'));
$ijuItaogbolu = mysqli_num_rows(getLocationCount('allasset', 'Iju/Itaogbolu'));
$ijokaOshinle = mysqli_num_rows(getLocationCount('allasset', 'Ijoka/Oshinle'));
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
$okeAroIsikan = mysqli_num_rows(getLocationCount('allasset', 'Oke Aro/Isikan'));
$okeAgbe = mysqli_num_rows(getLocationCount('allasset', 'OkeAgbe'));
$oreLagos = mysqli_num_rows(getLocationCount('allasset', 'Ore-Lagos'));
$oreBenin = mysqli_num_rows(getLocationCount('allasset', 'Ore Benin'));
$owo = mysqli_num_rows(getLocationCount('allasset', 'Owo'));
$okaAkoko = mysqli_num_rows(getLocationCount('allasset', 'Oka Akoko'));
$okitipupa = mysqli_num_rows(getLocationCount('allasset', 'Okitipupa'));


$Account = mysqli_num_rows(getDept('allasset', 'Account'));
$Accountant = mysqli_num_rows(getDept('allasset', 'Accountant'));
$Admin = mysqli_num_rows(getDept('allasset', 'Admin'));
$ADPT = mysqli_num_rows(getDept('allasset', 'ADPT'));
$Chairman = mysqli_num_rows(getDept('allasset', 'Chairman'));
$ChairmanOpenOffice = mysqli_num_rows(getDept('allasset', 'ChairmanOpenOffice'));
$ConsultantOffice1 = mysqli_num_rows(getDept('allasset', 'ConsultantOffice1'));
$ConsultantOffice2 = mysqli_num_rows(getDept('allasset', 'ConsultantOffice2'));
$ConsultantOffice3 = mysqli_num_rows(getDept('allasset', 'ConsultantOffice3'));
$ConsultantOpenOffice = mysqli_num_rows(getDept('allasset', 'ConsultantOpenOffice'));
$ConsumptionTax = mysqli_num_rows(getDept('allasset', 'ConsumptionTax'));
$ContactCentre = mysqli_num_rows(getDept('allasset', 'ContactCentre'));
$CorporateServices = mysqli_num_rows(getDept('allasset', 'CorporateServices'));
$DFA = mysqli_num_rows(getDept('allasset', 'DFA'));
$DHIA = mysqli_num_rows(getDept('allasset', 'DHIA'));
$DirectAssessment = mysqli_num_rows(getDept('allasset', 'DirectAssessment'));
$DirLegal = mysqli_num_rows(getDept('allasset', 'DirLegal'));
$DirReception = mysqli_num_rows(getDept('allasset', 'DirReception'));
$DMDA = mysqli_num_rows(getDept('allasset', 'DMDA'));
$DPIT = mysqli_num_rows(getDept('allasset', 'DPIT'));
$EReceipt = mysqli_num_rows(getDept('allasset', 'EReceipt'));
$ETCC = mysqli_num_rows(getDept('allasset', 'ETCC'));
$ExternalAudit = mysqli_num_rows(getDept('allasset', 'ExternalAudit'));
$FRSC = mysqli_num_rows(getDept('allasset', 'FRSC'));
$Hall = mysqli_num_rows(getDept('allasset', 'Hall'));
$HeadAdmin = mysqli_num_rows(getDept('allasset', 'HeadAdmin'));
$HeadHR = mysqli_num_rows(getDept('allasset', 'HeadHR'));
$HeadICT = mysqli_num_rows(getDept('allasset', 'HeadICT'));
$HeadMLA = mysqli_num_rows(getDept('allasset', 'HeadMLA'));
$ICT = mysqli_num_rows(getDept('allasset', 'ict'));
$InternalAudit = mysqli_num_rows(getDept('allasset', 'InternalAudit'));
$Legal = mysqli_num_rows(getDept('allasset', 'Legal'));
$LegalLibrary = mysqli_num_rows(getDept('allasset', 'LegalLibrary'));
$LUC = mysqli_num_rows(getDept('allasset', 'LUC'));
$LUCBilling = mysqli_num_rows(getDept('allasset', 'LUCBilling'));
$MainReception = mysqli_num_rows(getDept('allasset', 'MainReception'));
$MDANOthers = mysqli_num_rows(getDept('allasset', 'MDANOthers'));
$MeetingRoom1 = mysqli_num_rows(getDept('allasset', 'MeetingRoom1'));
$MeetingRoom2 = mysqli_num_rows(getDept('allasset', 'MeetingRoom2'));
$MIS = mysqli_num_rows(getDept('allasset', 'MIS'));
$MLAOpenOffice = mysqli_num_rows(getDept('allasset', 'MLAOpenOffice'));
$OpenOffice = mysqli_num_rows(getDept('allasset', 'OpenOffice'));
$OpenRegistry = mysqli_num_rows(getDept('allasset', 'OpenRegistry'));
$PASA = mysqli_num_rows(getDept('allasset', 'PASA'));
$PAYE = mysqli_num_rows(getDept('allasset', 'PAYE'));
$PayMaster = mysqli_num_rows(getDept('allasset', 'PayMaster'));
$PropertyTax = mysqli_num_rows(getDept('allasset', 'PropertyTax'));
$RMU = mysqli_num_rows(getDept('allasset', 'RMU'));
$SecChairman = mysqli_num_rows(getDept('allasset', 'SecChairman'));
$Security = mysqli_num_rows(getDept('allasset', 'Security'));
// $ServerRoom = mysqli_num_rows(getDept('allasset', 'ServerRoom'));
$SLO = mysqli_num_rows(getDept('allasset', 'SLO'));
$StampDuty = mysqli_num_rows(getDept('allasset', 'StampDuty'));
$StoreOfficer1 = mysqli_num_rows(getDept('allasset', 'StoreOfficer1'));
$StoreOfficer2 = mysqli_num_rows(getDept('allasset', 'StoreOfficer2'));
$TaxAuditField = mysqli_num_rows(getDept('allasset', 'TaxAuditField'));
$TaxAuditServices = mysqli_num_rows(getDept('allasset', 'TaxAuditServices'));
$TEET = mysqli_num_rows(getDept('allasset', 'TEET'));
$TEETTeamlead = mysqli_num_rows(getDept('allasset', 'TEETTeamlead'));
$TIN = mysqli_num_rows(getDept('allasset', 'TIN'));
$WithholdingTax = mysqli_num_rows(getDept('allasset', 'WithholdingTax'));
$PoolDrivers = mysqli_num_rows(getDept('allasset', 'PoolDrivers'));
$ServerRoom = mysqli_num_rows(getDept('allasset', 'ServerRoom'));


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
                                    
                                    <?php include('includes/asset_manager_qrprint.php');?>

                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                        </div>


                        <div class="row">
                            
                             <!--div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">ALL HQASSET</div>
                                                <div class="widget-subheading"><a href="allassetqr.php" style="color:black" target = '_blank'>Print QRcode for all assets</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $akureHQ; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                            
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Account</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\accasset.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning"><?php echo $Account; ?></div>
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
                                                <div class="widget-heading">Accountant</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\actasset.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $Accountant; ?></div>
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
                                                <div class="widget-heading">Admin</div>
                                                 <div class="widget-subheading"><a href="..\asset_manager\qrprint\adminasset.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $Admin; ?></div>
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
                                                <div class="widget-heading">ADPT</div>
                                                 <div class="widget-subheading"><a href="..\asset_manager\qrprint\adpt.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ADPT; ?></div>
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
                                                <div class="widget-heading">Execute Chairman</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\chairman.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $Chairman; ?></div>
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
                                                <div class="widget-heading">Chairman's Open Office</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\chairmanOpenOff.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ChairmanOpenOffice; ?></div>
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
                                                <div class="widget-heading">Consumption Tax</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\consumptax.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ConsumptionTax; ?></div>
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
                                                <div class="widget-heading">Consultant 1</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\consultanto.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ConsultantOffice1; ?></div>
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
                                                <div class="widget-heading">Consultant2</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\consultantt.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ConsultantOffice2; ?></div>
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
                                                <div class="widget-heading">Consultant3</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\consultanth.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ConsultantOffice3; ?></div>
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
                                                <div class="widget-heading">Consultant Open Office</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\consultantOO.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ConsultantOpenOffice; ?></div>
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
                                                <div class="widget-heading">Contact Centre</div>
                                               <div class="widget-subheading"><a href="..\asset_manager\qrprint\contactcentre.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ContactCentre; ?></div>
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
                                                <div class="widget-heading">Corporate Services</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\corpservices.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $CorporateServices; ?></div>
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
                                                <div class="widget-heading">DFA</div>
                                               <div class="widget-subheading"><a href="..\asset_manager\qrprint\dfa.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $DFA; ?></div>
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
                                                <div class="widget-heading">DHIA</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\dhia.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $DHIA; ?></div>
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
                                                <div class="widget-heading">Direct Assessment</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\directassessment.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $DirectAssessment; ?></div>
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
                                                <div class="widget-heading">Dir Legal</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\dirlegal.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $DirLegal; ?></div>
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
                                                <div class="widget-heading">Directorate Reception</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\direcption.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $DirReception; ?></div>
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
                                                <div class="widget-heading">DMDA</div>
                                               <div class="widget-subheading"><a href="..\asset_manager\qrprint\dmda.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $DMDA; ?></div>
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
                                                <div class="widget-heading">DPIT</div>
                                               <div class="widget-subheading"><a href="..\asset_manager\qrprint\dpit.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $DPIT; ?></div>
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
                                                <div class="widget-heading">e-Receipt</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\ereceipt.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $EReceipt; ?></div>
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
                                                <div class="widget-heading">ETCC</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\etcc.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ETCC; ?></div>
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
                                                <div class="widget-heading">External Audit</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\extaudit.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger"><?php echo $ExternalAudit; ?></div>
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
                                                <div class="widget-heading">FRSC OFFICE</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\frsc.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\hall.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\ada.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\headhr.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\headict.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\headmla.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\ictasset.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\intaudit.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\legal.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\legallib.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\luc.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\lucbilling.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\mreception.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\DMAothers.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\mroom1.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\mroom2.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\mis.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\mlaopen.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\openoffice.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\openreg.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\pasa.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\paye.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\paymaster.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\rmu.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\secchairman.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\security.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                            <!--                    <div class="widget-subheading"><a href="..\asset_manager\qrprint\serverroom.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>-->
                            <!--                </div>-->
                            <!--                <div class="widget-content-right">-->
                            <!--                    <div class="widget-numbers text-success"><?php echo $ServerRoom; ?></div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">SLO</div>
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\slo.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\stampduty.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\storeoffo.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\storeofft.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\security.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\taservices.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\teet.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\teettl.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\tin.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
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
                                                <div class="widget-subheading"><a href="..\asset_manager\qrprint\wth.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $WithholdingTax; ?></div>
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
                                                <div class="widget-heading">Drivers & Pool</div>
                                                <div class="widget-subheading"><a href="qrprint/drivers_pool.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $PoolDrivers; ?></div>
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
                                                <div class="widget-heading">Server Room</div>
                                                <div class="widget-subheading"><a href="qrprint/server_room.php" style="color:black" target = '_blank'>Print Asset QR Code</a></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success"><?php echo $ServerRoom; ?></div>
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





