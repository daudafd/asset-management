<?php
include('../includes/config.php');

///////////// b_category is electronics//////////////////////////////
$ee_parent_cat = $_GET['ee_category']; // where clause $_GET the id of the parent table from the database = 5
$ee_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$ee_parent_cat}");
while($row = mysqli_fetch_array($ee_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}
?>