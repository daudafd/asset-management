<?php
include('../includes/config.php');
///////////// b_category is for equipments/////////////////////////////
$eq_parent_cat = $_GET['eq_category']; // where clause $_GET the id of the parent table from the database = 4
$eq_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$eq_parent_cat}");
while($row = mysqli_fetch_array($eq_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}
?>