<?php include 'includes/session.php'; ?>
<?php 
  include '../timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  	<?php include 'includes/navbar.php'; ?>
  	<?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Cumulative Total of LUC Generated Per Tax Station (Effective from 1st January, 2021)
      </h1>
      <ol class="breadcrumb">
        <li><a href="a_dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User's Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <!-------------------------------START HERE----------------------------------------->
      <!---------------------------------------------------------------------------------->

      <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-green">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>LUC Overall Cumulative Total</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="cumm_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Akure HQ' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Akure HQ Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="akure_hq_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

         <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Akure Express%' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Akure Express Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="akure_express_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Bolorunduro' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Bolorunduro Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="bolorunduro_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Iju/Itaogbolu' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Iju/Itaogbolu Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="iju_itaogbolu_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->



  
        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Ijoka/Oshinle' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Ijoka/Oshinle Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ijoka_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


<div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Ileoluji' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Ile-Oluji Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ileoluji_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Isua' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Isua Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="isua_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        
        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Idanre' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Idanre Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="idanre_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Igbaraoke' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Igbaraoke Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="igbaraoke_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Igbekebo' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Igbekebo Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="igbekebo_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%igbokoda' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Igbokoda Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="igbokoda_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Ikare Akoko' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Ikare Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ikare_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Ifon' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Ifon Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ifon_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->



        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Oba Adesida' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Oba Adesida Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="oba_adesida_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Ode Irele' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Ode Irele Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ode_irele_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Oyemekun' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Oyemekun Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="oyemekun_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Ondo Yaba' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Ondo Yaba Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ondo_yaba_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Ondo-Sabo' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Ondo Sabo Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ondo_sabo_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Oke Aro/Isikan' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>OkeAro/Isikan Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="okearo_isikan_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        
        
        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Okeagbe' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Okeagbe Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="okeagbe_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Ore-Lagos' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Ore Lagos Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ore_lagos_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Ore Benin' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Ore Benin Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ore_benin_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Oka Akoko' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Oka Akoko Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="oka_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Okitipupa' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Okitipupa Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="okitipupa_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- returns small box -->
         <div class="small-box bg-aqua">
            <div class="inner">
              <?php
              $sql_qry="SELECT SUM(lucAmtY4) AS count FROM tcc_applications WHERE 
              station LIKE '%Owo' AND process_code LIKE '%5555'";

              $duration = $conn->query($sql_qry);
              while($record = $duration->fetch_array()){
                  $total = $record['count'];
              }
              echo "<h3> &#x20A6 ".number_format($total);
              ?>
              <h5>Owo Total LUC Report</h5>
            </div>
            
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="owo_luc_details.php" class="small-box-footer">Click to View Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        
        
        




        <!--div class="col-lg-3 col-xs-6">
          <!--small box--
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM attendance";
                $query = $conn->query($sql);
                $total = $query->num_rows;

                $sql = "SELECT * FROM attendance WHERE status = 1";
                $query = $conn->query($sql);
                $early = $query->num_rows;
                
                $percentage = ($early/$total)*100;

                echo "<h3>".number_format($percentage, 2)."<sup style='font-size: 20px'>%</sup></h3>";
              ?>
          
              <p>Print Report</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <!--div class="col-lg-3 col-xs-6">
          <!-- small box --
          <div class="small-box bg-gray">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM tblcategory";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>"
              ?>
             
              <p>Add TaxPayer Categories</p>
            </div>
            <div class="icon">
              <i class="ion ion-clock"></i>
            </div>
            <a href="category.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->



        <!--div class="col-lg-3 col-xs-6">
          <!-- small box --
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM tblmla";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>"
              ?>

              <p>MLA Monthly Returns</p>
            </div>
            <div class="icon">
              <i class="ion ion-alert-circled"></i>
            </div>
            <a href="mla.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->



      </div>
      <!-- /.row --
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Taxpayer Statistics</h3>
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Select Year: </label>
                    <select class="form-control input-sm" id="select_year">
                      <?php
                        for($i=2018; $i<=2040; $i++){
                          $selected = ($i==$year)?'selected':'';
                          echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <br>
                <div id="legend" class="text-center"></div>
                <canvas id="barChart" style="height:350px"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- Chart Data -->
<?php
  $and = 'AND YEAR(date) = '.$year;
  $months = array();
  $ontime = array();
  $late = array();
  for( $m = 1; $m <= 12; $m++ ) {
    $sql = "SELECT * FROM tblreturns WHERE MONTH(date) = '$m'  $and";
    $oquery = $conn->query($sql);
  array_push($ontime, $oquery->num_rows);

    $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND status = 0 $and";
    $lquery = $conn->query($sql);
    array_push($late, $lquery->num_rows);

    

    $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
    $month =  date('M', mktime(0, 0, 0, $m, 1));
    array_push($months, $month);
  }

  $months = json_encode($months);
 $late = json_encode($late);
 $ontime = json_encode($ontime);

?>
<!-- End Chart Data -->
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  var barChartCanvas = $('#barChart').get(0).getContext('2d')
  var barChart = new Chart(barChartCanvas)
  var barChartData = {
    labels  : <?php echo $months; ?>,
    datasets: [
      {
        //label               : 'Monthly Target',
        fillColor           : 'rgba(210, 214, 222, 1)',
        strokeColor         : 'rgba(210, 214, 222, 1)',
        pointColor          : 'rgba(210, 214, 222, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : <?php echo $late; ?>
      },
      {
        label               : 'Monthly Statistics',
        fillColor           : 'rgba(60,141,188,0.9)',
        strokeColor         : 'rgba(60,141,188,0.8)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : <?php echo $ontime; ?>
      }
    ]
  }
  barChartData.datasets[1].fillColor   = '#00a65a'
  barChartData.datasets[1].strokeColor = '#00a65a'
  barChartData.datasets[1].pointColor  = '#00a65a'
  var barChartOptions                  = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero        : true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : true,
    //String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    //Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    //Boolean - If there is a stroke on each bar
    barShowStroke           : true,
    //Number - Pixel width of the bar stroke
    barStrokeWidth          : 2,
    //Number - Spacing between each of the X value sets
    barValueSpacing         : 5,
    //Number - Spacing between data sets within X values
    barDatasetSpacing       : 1,
    //String - A legend template
    legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
    //Boolean - whether to make the chart responsive
    responsive              : true,
    maintainAspectRatio     : true
  }

  barChartOptions.datasetFill = false
  var myChart = barChart.Bar(barChartData, barChartOptions)
  document.getElementById('legend').innerHTML = myChart.generateLegend();
});
</script>
<script>
$(function(){
  $('#select_year').change(function(){
    window.location.href = 'luc_station.php?year='+$(this).val();
  });
});
</script>
</body>
</html>
