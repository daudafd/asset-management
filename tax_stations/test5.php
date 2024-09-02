
<!--THE CHUNK OF CODE HERE DISPLAYS TAX STATIONS MONTHLY TCC REPORT IN A TABLE, IT DISPLAYS THE PRINT PAGE AND OTHER COUNT OF RECORDS-->
<!--
    AUTHOR: EHINJU, Caleb Ayodeji
    Date Written: 26th April, 2020.
    Copyright: ODIRS
-->
<style>
table {
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif;
}

#tBorder th,
#tBorder {
    border: solid 1px;
    border-collapse: collapse;
}
</style>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	
            	<h5 class="modal-title"><img src="../../images/bir_logo.png" width="40px" height="40px"> Akure Head Quarters TCC Report Summary</h5>
          	</div>
          	<div class="modal-body">
                  <tr>
                    <td colspan="4">
                            <!--table style="width:100%;  color:#000000"  id="tBorder" class="table table-bordered">
                                <tr style="width:100%;  border: solid 4px; color:#000000"-->
                                <table id="example1" class="table table-bordered">
                             <thead>
                                    <th><h5><center>MONTHS</h5></center></th>
                                    <th><h5><center>2019 REVENUE</h5></center></th>
                                    <th><h5><center>2020 REVENUE</h5></center></th>  
                                    <th><h5><center>2021 REVENUE</h5></center></th>
                                    <th><h5><center>2021 TCC</h5></center></th>     
                                </tr>

                                </thead>
                                <!----------------JANUARY------------------------>
                                <tr>
                                    <th><h5>January</h5></th>
                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan_total1 = $record['count'];
                                    }
                                    echo "<h5> &#x20A6 ".number_format($jan_total1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan_total2 = $record['count'];
                                    }
                                    echo "<h5> &#x20A6 ".number_format($jan_total2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $jan_total3 = $record['count'];
                                    }
                                    echo "<h5> &#x20A6 ".number_format($jan_total3);
                                    ?>
                                    </th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total1 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-01-%' AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h5>" .$row->total1; 
                                    ?>
                                    </th>
                                </tr>


                                    <!----------------FEBRUARY------------------------>
                                <tr>
                                    <th><h5>February</h5></th>
                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                    AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb_total1 = $record['count'];
                                    }
                                    echo "<h5> &#x20A6 ".number_format($feb_total1);
                                    ?>
                                    </th>
                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                    AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb_total2 = $record['count'];
                                    }
                                    echo "<h5> &#x20A6 ".number_format($feb_total2);
                                    ?>
                                    </th>
                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                     AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $feb_total3 = $record['count'];
                                    }
                                    echo "<h5> &#x20A6 ".number_format($feb_total3);
                                    ?>
                                    </th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total2 FROM tcc_applications WHERE station LIKE '%Akure HQ%'  
                                    AND reg_date LIKE  '%2021-02-%' AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h5>" .$row->total2; 
                                    ?>
                                    </th>
                                </tr>


                                    <!----------------MARCH------------------------>
                                <tr>
                                    <th><h5>March</h5></th>
                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                    AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar_total1 = $record['count'];
                                    }
                                    echo "<h5> &#x20A6 ".number_format($mar_total1);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                    AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar_total2 = $record['count'];
                                    }
                                    echo "<h5> &#x20A6 ".number_format($mar_total2);
                                    ?>
                                    </th>

                                    <th> 
                                    <?php 
                                    $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                    AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $duration = $conn->query($sql_qry);
                                    while($record = $duration->fetch_array()){
                                        $mar_total3 = $record['count'];
                                    }
                                    echo "<h5> &#x20A6 ".number_format($mar_total3);
                                    ?>
                                    </th>

                                    <th><?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total3 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                    AND reg_date LIKE  '%2021-03-%' AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo "<h5>" .$row->total3; 
                                    ?>
                                    </th>

                                </tr>
                                

                                 <!----------------APRIL------------------------>
                                 <tr>
                                   <th><h5>April</h5></th>
                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $apr_total1 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($apr_total1);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $apr_total2 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($apr_total2);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $apr_total3 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($apr_total3);
                                   ?>
                                   </th>

                                   <th><?php 
                                   $queryString = " SELECT reg_date, COUNT(*) AS total4 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-04-%' AND process_code LIKE '%5555'";
                                   $query = mysqli_query($conn, $queryString);
                                   $row = mysqli_fetch_object($query);
                                   echo "<h5>" .$row->total4; 
                                   ?>
                                   </th>
                               </tr> 


                               <!----------------MAY------------------------>
                               <tr>
                               <th><h5>May</h5></th>
                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $may_total1 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($may_total1);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $may_total2 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($may_total2);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $may_total3 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($may_total3);
                                   ?>
                                   </th>

                                   <th><?php 
                                   $queryString = " SELECT reg_date, COUNT(*) AS total5 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-05-%' AND process_code LIKE '%5555'";
                                   $query = mysqli_query($conn, $queryString);
                                   $row = mysqli_fetch_object($query);
                                   echo "<h5>" .$row->total5; 
                                   ?>
                                   </th>

                               </tr> 


                                <!----------------June------------------------>
                               <tr>
                                   <th><h5>June</h5></th>
                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $jun_total1 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($jun_total1);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $jun_total2 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($jun_total2);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $jun_total3 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($jun_total3);
                                   ?>
                                   </th>

                                   <th><?php 
                                   $queryString = " SELECT reg_date, COUNT(*) AS total6 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-06-%' AND process_code LIKE '%5555'";
                                   $query = mysqli_query($conn, $queryString);
                                   $row = mysqli_fetch_object($query);
                                   echo "<h5>" .$row->total6; 
                                   ?>
                                   </th>
                               </tr>


                                <!----------------July------------------------>
                               <tr>
                                   <th><h5>July</h5></th>
                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $jul_total1 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($jul_total1);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $jul_total2 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($jul_total2);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $jul_total3 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($jul_total3);
                                   ?>
                                   </th>

                                   <th><?php 
                                   $queryString = " SELECT reg_date, COUNT(*) AS total7 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-07-%' AND process_code LIKE '%5555'";
                                   $query = mysqli_query($conn, $queryString);
                                   $row = mysqli_fetch_object($query);
                                   echo "<h5>" .$row->total7; 
                                   ?>
                                   </th>
                               </tr>


                                <!----------------August------------------------>
                               <tr>
                                   <th><h5>August</h5></th>
                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $aug_total1 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($aug_total1);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $aug_total2 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($aug_total2);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $aug_total3 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($aug_total3);
                                   ?>
                                   </th>

                                   <th><?php 
                                   $queryString = " SELECT reg_date, COUNT(*) AS total8 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-08-%' AND process_code LIKE '%5555'";
                                   $query = mysqli_query($conn, $queryString);
                                   $row = mysqli_fetch_object($query);
                                   echo "<h5>" .$row->total8; 
                                   ?>
                                   </th>
                               </tr>


                                <!----------------Spetember------------------------>
                                <tr>
                                   <th><h5>September</h5></th>
                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $sep_total1 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($sep_total1);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $sep_total2 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($sep_total2);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $sep_total3 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($sep_total3);
                                   ?>
                                   </th>

                                   <th><?php 
                                   $queryString = " SELECT reg_date, COUNT(*) AS total9 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-09-%' AND process_code LIKE '%5555'";
                                   $query = mysqli_query($conn, $queryString);
                                   $row = mysqli_fetch_object($query);
                                   echo "<h5>" .$row->total9; 
                                   ?>
                                   </th>
                               </tr>


                                <!----------------October------------------------>
                                <tr>
                                   <th><h5>October</h5></th>
                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $oct_total1 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($oct_total1);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $oct_total2 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($oct_total2);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $oct_total3 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($oct_total3);
                                   ?>
                                   </th>

                                   <th><?php 
                                   $queryString = " SELECT reg_date, COUNT(*) AS total10 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-10-%' AND process_code LIKE '%5555'";
                                   $query = mysqli_query($conn, $queryString);
                                   $row = mysqli_fetch_object($query);
                                   echo "<h5>" .$row->total10; 
                                   ?>
                                   </th>
                               </tr>

                                <!----------------November------------------------>
                                <tr>
                                   <th><h5>November</h5></th>
                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $nov_total1 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($nov_total1);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $nov_total2 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($nov_total2);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $nov_total3 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($nov_total3);
                                   ?>
                                   </th>

                                   <th><?php 
                                   $queryString = " SELECT reg_date, COUNT(*) AS total11 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-11-%' AND process_code LIKE '%5555'";
                                   $query = mysqli_query($conn, $queryString);
                                   $row = mysqli_fetch_object($query);
                                   echo "<h5>" .$row->total11; 
                                   ?>
                                   </th>
                               </tr>

                                <!----------------December------------------------>
                                <tr>
                                   <th><h5>December</h5></th>
                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY1),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                       $dec_total1 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($dec_total1);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY2),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $dec_total2 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($dec_total2);
                                   ?>
                                   </th>

                                   <th> 
                                   <?php 
                                   $sql_qry="SELECT SUM(REPLACE((taxPY3),',','') ) AS count FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                   $duration = $conn->query($sql_qry);
                                   while($record = $duration->fetch_array()){
                                    $dec_total3 = $record['count'];
                                   }
                                   echo "<h5> &#x20A6 ".number_format($dec_total3);
                                   ?>
                                   </th>

                                   <th><?php 
                                   $queryString = " SELECT reg_date, COUNT(*) AS total12 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                   AND reg_date LIKE  '%2021-12-%' AND process_code LIKE '%5555'";
                                   $query = mysqli_query($conn, $queryString);
                                   $row = mysqli_fetch_object($query);
                                   echo "<h5>" .$row->total12; 
                                   ?>
                                   </th>
                               </tr>
                                <!----------------CUMMULATIVE TOTAL------------------------>                            
                                <tr style="width:100%;  border: solid 4px; color:#000000">
                                    <th><h5><center>TOTAL</center></h5></th>
                                    
                                    <th> <?php  echo "<h5> &#x20A6 ".number_format($jan_total1 + $feb_total1 + 
                                    $mar_total1 + $apr_total1 + $may_total1 + $jun_total1 + $jul_total1 + $aug_total1 + $sep_total1
                                    + $oct_total1 + $nov_total1 + $dec_total1); ?>  </th>
                                    
                                    <th> <?php  echo "<h5> &#x20A6 ".number_format($jan_total2 + $feb_total2 + 
                                    $mar_total2 + $apr_total2 + $may_total2 + $jun_total2 + $jul_total2 + $aug_total2 + $sep_total2
                                    + $oct_total2 + $nov_total2 + $dec_total2); ?>  </th>

                                    <th> <?php  echo "<h5> &#x20A6 ".number_format($jan_total3 + $feb_total3 + 
                                    $mar_total3 + $apr_total3 + $may_total3 + $jun_total3 + $jul_total3 + $aug_total3 + $sep_total3
                                    + $oct_total3 + $nov_total3 + $dec_total3); ?>  </th>
                                    
                                    <th><h5>
                                    <?php 
                                    $queryString = " SELECT reg_date, COUNT(*) AS total1 FROM tcc_applications WHERE station LIKE '%Akure HQ%' 
                                      AND process_code LIKE '%5555'";
                                    $query = mysqli_query($conn, $queryString);
                                    $row = mysqli_fetch_object($query);
                                    echo $row->total1; 
                                    ?></h5></th>
                        </tr>
                    </table>
                    </td>
                </tr>
          	</div>
        </div>
    </div>
</div>

