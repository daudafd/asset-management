<?php include 'includes/session.php'; ?>
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
      Tax Stations Cumulative TCC Report (2021)
      </h1>
      <ol class="breadcrumb">
        <li><a href="etcc_station.php"><i class="fa fa-dashboard"></i>Back</a></li>
        <li class="active">TCC Applicants</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h6><i class='icon fa fa-warning'></i> Error!</h6>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h6><i class='icon fa fa-check'></i> Success!</h6>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
          
              <!--a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Add Returns</a-->
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
              <thead>
                  <th class="hidden"></th>
                  <th>Stations</th>
                  <th>TCC</th>
                  <th>Jan</th>
                  <th>Feb</th>
                  <th>Mar</th>
                  <th>Apr</th>  
                  <th>May</th>  
                  <th>Jun</th>  
                  <th>JuL</th>    
                  <th>Aug</th>
                  <th>Sep</th>
                  <th>Oct</th>    
                  <th>Nov</th>
                  <th>Dec</th>
                  <th>Total</th>
                </thead>



                <!---------------------------------START AKURE HQ------------------------->
                <tbody>
                                    <th><h6><b>Akure HQ</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total1 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total1; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec1 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec1);
                                    ?>
                                    </th>

                                    
                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan1 + $feb1 + 
                                    $mar1 + $apr1 + $may1 + $jun1 + $jul1 + $aug1 + $sep1
                                    + $oct1 + $nov1 + $dec1); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE HQ-------------------------------->


                              <!---------------------------------START AKURE Express------------------------->
                            <tbody>
                                    <th><h6><b>Akure Epress</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total2 FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total2; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure Express%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec2 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec2);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan2 + $feb2 + 
                                    $mar2 + $apr2 + $may2 + $jul2 + $jul2 + $aug2 + $sep2
                                    + $oct2 + $nov2 + $dec2); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE EXPRESS-------------------------------->

                             <!---------------------------------START Bolorunduro------------------------->
                            <tbody>
                                    <th><h6><b>Bolorunduro</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total3 FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total3; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov3);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec3 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec3);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan3 + $feb3 + 
                                    $mar3 + $apr3 + $may3 + $jun3 + $jul3 + $aug3 + $sep3
                                    + $oct3 + $nov3 + $dec3); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Bolorunduro-------------------------------->

                              <!---------------------------------START Iju/Itaogbolu------------------------->
                            <tbody>
                                    <th><h6><b>Iju/Itaogbolu</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total4 FROM tcc_applications WHERE station LIKE '%Iju/Itaogbolu%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total4; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Iju/Itaogbolu%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Iju/Itaogbolu%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Iju/Itaogbolu%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Iju/Itaogbolu%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Bolorunduro%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov4);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Iju%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec4 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec4);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan4 + $feb4 + 
                                    $mar4 + $apr4 + $may4 + $jun4 + $jul4 + $aug4 + $sep4
                                    + $oct4 + $nov4 + $dec4); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Iju/Itaogbolu-------------------------------->

                              <!---------------------------------START Ijoka/Oshinle------------------------->
                            <tbody>
                                    <th><h6><b>Ijoka/Oshinle</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total5 FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total5; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov5);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ijoka/Oshinle%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec5 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec5);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan5 + $feb5 + 
                                    $mar5 + $apr5 + $may5 + $jun5 + $jul5 + $aug5 + $sep5
                                    + $oct5 + $nov5 + $dec5); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Iju/Itaogbolu-------------------------------->

                              <!---------------------------------START Ileoluji------------------------->
                            <tbody>
                                    <th><h6><b>Ileoluji</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total6 FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total6; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may6= $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov6);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ileoluji%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec6 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec6);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan6 + $feb6 + 
                                    $mar6 + $apr6 + $may6 + $jun6 + $jul6 + $aug6 + $sep6
                                    + $oct6 + $nov6 + $dec6); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END Ileoluji-------------------------------->

                              <!---------------------------------START Isua------------------------->
                            <tbody>
                                    <th><h6><b>Isua</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total7 FROM tcc_applications WHERE station LIKE '%Isua%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total7; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov7);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Isua%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec7 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec7);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan7 + $feb7 + 
                                    $mar7 + $apr7 + $may7 + $jun7 + $jul7 + $aug7 + $sep7
                                    + $oct7 + $nov7 + $dec7); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Isua-------------------------------->

                              <!---------------------------------START Idanre------------------------->
                            <tbody>
                                    <th><h6><b>Idanre</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total8 FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total8; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov8);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Idanre%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec8 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec8);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan8 + $feb8 + 
                                    $mar8 + $apr8 + $may8 + $jun8 + $jul8 + $aug8 + $sep8
                                    + $oct8 + $nov8 + $dec8); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Idanre-------------------------------->

                              <!---------------------------------START Igbaraoke------------------------->
                            <tbody>
                                    <th><h6><b>Igbaraoke</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total9 FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total9; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%igbaraoke%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov9);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbaraoke%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec9 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec9);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan9 + $feb9 + 
                                    $mar9 + $apr9 + $may9 + $jun9 + $jul9 + $aug9 + $sep9
                                    + $oct9 + $nov9 + $dec9); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Igbaraoke-------------------------------->

                              <!---------------------------------START Igbekebo------------------------->
                            <tbody>
                                    <th><h6><b>Igbekebo</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total10 FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total10; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov10);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbekebo%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec10 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec10);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan10 + $feb10 + 
                                    $mar10 + $apr10 + $may10 + $jun10 + $jul10 + $aug10 + $sep10
                                    + $oct10 + $nov10 + $dec10); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Igbekebo-------------------------------->

                              <!---------------------------------START Igbokoda------------------------->
                            <tbody>
                                    <th><h6><b>Igbokoda</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total11 FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total11; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov11);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Igbokoda%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec11 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec11);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan11 + $feb11 + 
                                    $mar11 + $apr11 + $may11 + $jun11 + $jul11 + $aug11 + $sep11
                                    + $oct11 + $nov11 + $dec11); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Igbokoda-------------------------------->

                              <!---------------------------------START Ikare Akoko------------------------->
                            <tbody>
                                    <th><h6><b>Ikare Akoko</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total12 FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total12; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov12);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ikare Akoko%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec12 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec12);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan12 + $feb12 + 
                                    $mar12 + $apr12 + $may12 + $jun12 + $jul12 + $aug12 + $sep12
                                    + $oct12 + $nov12 + $dec12); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Ikare-------------------------------->

                              <!---------------------------------START Ifon------------------------->
                            <tbody>
                                    <th><h6><b>Ifon</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total13 FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total13; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov13);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ifon%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec13 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec13);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan13 + $feb13 + 
                                    $mar13 + $apr13 + $may13 + $jun13 + $jul13 + $aug13 + $sep13
                                    + $oct13 + $nov13 + $dec13); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Ifon-------------------------------->

                              <!---------------------------------START Oba Adesida------------------------->
                            <tbody>
                                    <th><h6><b>Oba Adesida</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total14 FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total14; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov14);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oba Adesida%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec14 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec14);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan14 + $feb14 + 
                                    $mar14 + $apr14 + $may14 + $jun14 + $jul14 + $aug14 + $sep14
                                    + $oct14 + $nov14 + $dec14); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Oba Adesida-------------------------------->

                              <!---------------------------------START Ode Irele------------------------->
                            <tbody>
                                    <th><h6><b>Ode-Irele</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total15 FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total15; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov15);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ode Irele%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec15 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec15);
                                    ?>
                                    </th>
                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan15 + $feb15 + 
                                    $mar15 + $apr15 + $may15 + $jun15 + $jul15 + $aug15 + $sep15
                                    + $oct15 + $nov15 + $dec15); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Ode-Irele-------------------------------->

                              <!---------------------------------START Oyemekun------------------------->
                            <tbody>
                                    <th><h6><b>Oyemekun</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total16 FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total16; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov16);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oyemekun%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec16 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec16);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan16 + $feb16 + 
                                    $mar16 + $apr16 + $may16 + $jun16 + $jul16 + $aug16 + $sep16
                                    + $oct16 + $nov16 + $dec16); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Oyemekun-------------------------------->

                              <!---------------------------------START ONDO YABA------------------------->
                            <tbody>
                                    <th><h6><b>Ondo-Yaba</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total17 FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total17; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov17);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo Yaba%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec17 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec17);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan17 + $feb17 + 
                                    $mar17 + $apr17 + $may17 + $jun17 + $jul17 + $aug17 + $sep17
                                    + $oct17 + $nov17 + $dec17); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Oyemekun-------------------------------->

                              <!---------------------------------START Ondo Sabo------------------------->
                            <tbody>
                                    <th><h6><b>Ondo Sabo</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total18 FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total18; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov18);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ondo-Sabo%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec18 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec18);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan18 + $feb18 + 
                                    $mar18 + $apr18 + $may18 + $jun18 + $jul18 + $aug18 + $sep18
                                    + $oct18 + $nov18 + $dec18); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Ondo Sabo-------------------------------->
                            
                             <!---------------------------------START Ondo Oke Aro/Isikan------------------------->
                             <tbody>
                                    <th><h6><b>Oke Aro/Isikan</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total19 FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total19; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov19);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oke Aro/Isikan%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec19 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec19);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan19 + $feb19 + 
                                    $mar19 + $apr19 + $may19 + $jun19 + $jul19 + $aug19 + $sep19
                                    + $oct19 + $nov19 + $dec19); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Oke Aro/Isikan-------------------------------->

                              <!---------------------------------START Ondo Okeagbe------------------------->
                              <tbody>
                                    <th><h6><b>Okeagbe</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total20 FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total20; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov20);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okeagbe%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec20 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec20);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan20 + $feb20 + 
                                    $mar20 + $apr20 + $may20 + $jun20 + $jul20 + $aug20 + $sep20
                                    + $oct20 + $nov20 + $dec20); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Okeagbe-------------------------------->

                              <!---------------------------------START Ore-Lagos------------------------->
                              <tbody>
                                    <th><h6><b>Ore-Lagos</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total21 FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total21; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov21);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore-Lagos%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec21 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec21);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan21 + $feb21 + 
                                    $mar21 + $apr21 + $may21 + $jun21 + $jul21 + $aug21 + $sep21
                                    + $oct21 + $nov21 + $dec21); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Ore-Lagos-------------------------------->

                              <!---------------------------------START Ore Benin------------------------->
                              <tbody>
                                    <th><h6><b>Ore Benin</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total22 FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total22; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan22= $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov22);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Ore Benin%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec22 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec22);
                                    ?>
                                    </th>
                                    
                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan22 + $feb22 + 
                                    $mar22 + $apr22 + $may22 + $jun22 + $jul22 + $aug22 + $sep22
                                    + $oct22 + $nov22 + $dec22); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Ore Benin-------------------------------->

                             <!---------------------------------START Oka Akoko------------------------->
                             <tbody>
                                    <th><h6><b>Oka Akoko</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total23 FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total23; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov23);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Oka Akoko%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec23 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec23);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan23 + $feb23 + 
                                    $mar23 + $apr23 + $may23 + $jun23 + $jul23 + $aug23 + $sep23
                                    + $oct23 + $nov23 + $dec23); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Oka Akoko-------------------------------->

                             <!---------------------------------START Okitipupa------------------------->
                             <tbody>
                                    <th><h6><b>Okitipupa</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total24 FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total24; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov24);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Okitipupa%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec24 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec24);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan24 + $feb24 + 
                                    $mar24 + $apr24 + $may24 + $jun24 + $jul24 + $aug24 + $sep24
                                    + $oct24 + $nov24 + $dec24); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Okitipupa-------------------------------->

                             <!---------------------------------START Owo------------------------->
                             <tbody>
                                    <th><h6><b>Owo</b></h6></th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total25 FROM tcc_applications WHERE station LIKE '%Owo%' 
                                    AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total25; 
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov25);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Owo%' 
                                     AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec25 = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec25);
                                    ?>
                                    </th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan25 + $feb25 + 
                                    $mar25 + $apr25 + $may25 + $jun25 + $jul25 + $aug25 + $sep25
                                    + $oct25 + $nov25 + $dec25); ?>  
                                    </b></th>
                                </tbody>
                             <!----------------------------------END AKURE Owo-------------------------------->

                              <!---------------------------------START Total------------------------->
                              <tbody>
                                    <th><h6><b>Cummulative Total</b></h6></th>

                                    <th><b> 
                                    <?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total FROM tcc_applications WHERE  process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h6>" .$row->total; 
                                    ?>
                                    </b>
                                    </th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jan);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($feb);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($mar);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $apr = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($apr);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $may = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($may);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jun = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jun);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jul = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($jul);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $aug = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($aug);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $sep = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($sep);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $oct = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($oct);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $nov = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($nov);
                                    ?>
                                    </b></th>

                                    <th><b> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $dec = $record['count'];
                                    }
                                    echo "<h6> &#x20A6 ".number_format($dec);
                                    ?>
                                    </b></th>

                                    <th><b> <?php  echo "<h6> &#x20A6 ".number_format($jan + $feb + 
                                    $mar + $apr + $may + $jun + $jul + $aug + $sep
                                    + $oct + $nov + $dec); ?>  
                                    </b></th>
                                </tbody>
                             <!--------------------------------END of Cumm Total-------------------------------->

              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  
</div>
<?php include 'includes/scripts.php'; ?>



</body>
</html>
