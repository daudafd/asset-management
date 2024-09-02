<?php
session_start();
session_unset();
session_destroy();
header('Location: index.php');

/*session_start();
include("includes/config.php");
session_destroy();
$_GLOBALS['message']="You are Loggged Out Successfully.";
header('location:index.php');

exit;*/
?>