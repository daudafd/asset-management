<?php
include('../includes/config.php');
///////////// ff_category is for furnitures/////////////////////////////
$ff_parent_cat = $_GET['ff_category']; // where clause $_GET the id of the parent table from the database = 3
$ff_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$ff_parent_cat}");
while($row = mysqli_fetch_array($ff_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}
?>