<?php 
include('../includes/config.php');

  $ve_parent_cat = $_GET['ve_category']; // where clause $_GET the id of the parent table from the database = 2
  $ve_query = mysqli_query($conn, "SELECT * FROM sub_category WHERE sub_cat_id = {$ve_parent_cat}");
  while($row = mysqli_fetch_array($ve_query)) {
      echo "<option value='$row[sub_cat_name]'>$row[sub_cat_name]</option>";
  }
?>