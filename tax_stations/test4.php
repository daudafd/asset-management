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
        Akure HQ e-TCC Applicant Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="akure_hq_report.php"><i class="fa fa-dashboard"></i>Back</a></li>
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
                  <th>Name</th>
                  <th>TIN</th>
                  <th>TYPE</th>
                  <th>Application No</th>
                  <th>Payment(Y1)</th>  
                  <th>Payment(Y2)</th>  
                  <th>Payment(Y3)</th>  
                  <th>Tax Station</th>    
                  <th>Application Date</th>
                  <th>Print</th>
                </thead>

                <tbody>
                  <?php
                    $sql = "SELECT *, tcc_applications.tccApplicationsId AS attid FROM tcc_applications LEFT JOIN applicant_profile_info 
                    ON applicant_profile_info.uuId=tcc_applications.uuId WHERE station LIKE '%Akure HQ%' AND process_code LIKE '%5555' 
                    ORDER BY reg_date DESC";
                    
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                        
                          <td><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['organisation_name']; ?></td>
                          <td><?php echo $row['uuId']; ?></td>
                          <td><?php echo $row['uuid_type']; ?></td>
                          <td><?php echo $row['applicationNumber']; ?></td>
                          <td><?php echo $row['taxPY1']; ?></td>
                          <td><?php echo $row['taxPY2']; ?></td>
                          <td><?php echo $row['taxPY3']; ?></td>
                          <td><?php echo $row['station']; ?></td>
                          <td><?php echo $row['reg_date']; ?></td>
                          <th><a href="cert.php?applicationNumber=<?php echo $row['applicationNumber']; ?>" target ='_blank'><i class="fa fa-print"></i></a></th>
                          <th> </th>
                        </tr>
                      <?php
                    }
                  ?>
                </tbody>

                <!--tbody>
                <?php
                //$sql = "SELECT tcc_applications.tccApplicationsId  AS attid, od_tin, file_no, applicationNumber FROM tcc_applications";
                $sql = "SELECT *, tcc_applications.tccApplicationsId AS attid FROM tcc_applications LEFT JOIN applicant_profile_info 
                ON applicant_profile_info.uuId=tcc_applications.uuId WHERE station LIKE '%Akure HQ%' AND process_code LIKE '%5555'";
                  $query = $conn->query($sql);
                   while($row = $query->fetch_assoc()){
                      echo "
                      <tr>
                        <td class='hidden'></td>
                        <td>".$row['firstname']." ".$row['middlename']." ".$row['lastname']." ".$row['organisation_name']." </td>
                        <td>".$row['uuId']."</td>
                        <td>".$row['uuid_type']."</td>
                        <td>".$row['applicationNumber']."</td>
                        <td>".$row['station']."</td>
                        <td>".$row['reg_date']."</td>
                      
                      </tr>
                    ";

                   }
                  ?>
                  
                </tbody-->
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
