<?php
include('../includes/config.php');

///////////// oi_category is for other items///////////////////////////
$oi_parent_cat = $_GET['oi_category']; // where clause $_GET the id of the parent table from the database = 6
$oi_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$oi_parent_cat}");
while($row = mysqli_fetch_array($oi_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}

?>