<?php 
session_start();
unset($_SESSION['user']);
$_SESSION['success'] = "";
header("Location:index.php");
exit();
?>
