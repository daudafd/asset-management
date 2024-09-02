<?php
 //$conn = mysqli_connect("localhost", "root", "", "odirsorg_asset") or die("Sorry, cannot connect to the database");
$conn = mysqli_connect("localhost", "root", "", "odirs_assets") or die("Sorry, cannot connect to the database");
//ini_set('display_error',1);
// user authentication
function authenticateUser($username, $password,$usertype){
    global $conn ;
    $sql = "SELECT * FROM login  WHERE username = '$username' AND password='$password' AND usertype = '$usertype' ";
    $execQry = mysqli_query($conn, $sql);
    if(mysqli_num_rows($execQry) > 0) {
         $rows = mysqli_fetch_assoc($execQry) ;
         session_start();
         $data[] = array();
         $_SESSION['username'] = $rows['username'];
        // $_SESSION['usertype'] = $rows['usertype'];
         $_SESSION['fullname'] = $rows['name'] ;
         $_SESSION['branchId'] = $rows['branch_id'];
         $_SESSION['branchName'] = $rows['branch_name'];
         $_SESSION['loginId'] = $rows['login_id'];
         $data['userType']  = $rows['usertype'];
         $data['success'] = true;
         return $data;
    }
    return false; 
}


function fetchAssetLimit($tblname, $tblId){
    global $conn;
    $sql = "SELECT * FROM $tblname ORDER BY $tblId DESC LIMIT 5";
    $qry = mysqli_query($conn,$sql);
    return $qry;
}

// Function initialization starts here
function fetchAllAsset($tblname, $tblId){
global $conn;
$sql = "SELECT * FROM $tblname ORDER BY $tblId";
$qry = mysqli_query($conn, $sql);
return $qry;
}

// GET TABLE SINGLE DATA 
function fetchSingleData($tablename, $wclId, $tableId){
    global $conn ;
    $sql = "SELECT * FROM $tablename where $wclId = '$tableId'";
    $execQry = mysqli_query($conn, $sql);
    return $execQry;
}


function fetchSingleRecord($tablename, $tableColumn, $tableColumnValue){
    global $conn;
    $sql = "SELECT * from $tablename where $tableColumn='$tableColumnValue'";
    $qry = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($qry);
    return $row;
}


function deleteSingleData($tablename, $tableColumn, $tableId){
    global $conn ;
    $sql = "DELETE FROM $tablename WHERE $tableColumn='$tableId'";
    $execQry = mysqli_query($conn, $sql);
}


function prepareFileForUpload($fileInput, $scan_code){
    global $conn ;
    $appNo = str_replace("/","-",$scan_code);
    $ext = explode('.', basename($fileInput));   // Explode file name from dot(.)
    if (!file_exists("../ecirs/uploads/".$appNo)){
        $mkdir = mkdir("../ecirs/uploads/".$appNo) ;
        $mkdir = mkdir("../dhia/uploads/".$appNo) ;
        $mkdir = mkdir("../asset_manager/uploads/".$appNo) ;
        $mkdir = mkdir("../ict_admin/uploads/".$appNo) ;
        $mkdir = mkdir("../tax_stations/uploads/".$appNo) ;
        
        $mkdir = mkdir("uploads/".$appNo) ;
    }
    $filename = rand(10, 100000).".".$ext[1];
    $target_path = "../ecirs/uploads/".$appNo."/";   // Declaring Path for uploaded images.
    $target_file = ($target_path.$filename);

    $sql = "INSERT INTO attachments(application_number, attachment, status) 
    VALUES ('$scan_code', '$target_file', 'active')";
    $execQry = mysqli_query($conn, $sql);
    
    return $target_file;
}

function doInsert($scan_code, $attachment, $conn){
    $isInserted = false;
    $sql = "INSERT INTO attachments(application_number, attachment, status) 
            VALUES ('$scan_code', '$attachment', 'active')";
    $execQry = mysqli_query($conn, $sql);
    if($execQry){
        $isInserted = true;
    }
    return $isInserted;
}


function deleteFileRef($applicationNumber){
    //isDeleted
    global $conn ;
    $sql = "DELETE FROM attachments WHERE application_number = '$applicationNumber'";
    $execQry = mysqli_query($conn, $sql);
    return $execQry;
}


//GET DOCUMENTS
function getUploadedDocuments($scan_code){
    global $conn ;
    $sql = "SELECT * FROM attachments where application_number = '$scan_code' ";
    $execQry = mysqli_query($conn, $sql);
    return $execQry;
}

?>
