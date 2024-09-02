<?php 
include('../includes/config.php');
///////////// bu_category is for buildings/////////////////////////////
$bu_parent_cat = $_GET['bu_category']; // where clause $_GET the id of the parent table from the database = 1
$bu_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$bu_parent_cat}");
while($row = mysqli_fetch_array($bu_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}
///////////// ve_category is for vehicles//////////////////////////////
$ve_parent_cat = $_GET['ve_category']; // where clause $_GET the id of the parent table from the database = 2
$ve_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$ve_parent_cat}");
while($row = mysqli_fetch_array($ve_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}
///////////// ff_category is for furnitures/////////////////////////////
$ff_parent_cat = $_GET['ff_category']; // where clause $_GET the id of the parent table from the database = 3
$ff_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$ff_parent_cat}");
while($row = mysqli_fetch_array($ff_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}
///////////// b_category is for equipments/////////////////////////////
$eq_parent_cat = $_GET['eq_category']; // where clause $_GET the id of the parent table from the database = 4
$eq_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$eq_parent_cat}");
while($row = mysqli_fetch_array($eq_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}
///////////// b_category is electronics//////////////////////////////
$ee_parent_cat = $_GET['ee_category']; // where clause $_GET the id of the parent table from the database = 5
$ee_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$ee_parent_cat}");
while($row = mysqli_fetch_array($ee_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}
///////////// oi_category is for other items///////////////////////////
$oi_parent_cat = $_GET['oi_category']; // where clause $_GET the id of the parent table from the database = 6
$oi_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$oi_parent_cat}");
while($row = mysqli_fetch_array($oi_query)) {
    echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
}
?>