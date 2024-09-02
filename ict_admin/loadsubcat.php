<?php 
include('../includes/config.php');

$bu_parent_cat = $_GET['bu_category']; // where clause $_GET the id of the parent table from the database = 1
$bu_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$bu_parent_cat}");
while($row = mysqli_fetch_array($bu_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}

?>