<?php 
session_start();
$_SESSION['user']=[''];
session_unset();
session_destroy();
header("location:../admin/index.php");
?>