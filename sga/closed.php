<?php
session_destroy();
unset($_SESSION['code'], 
$_SESSION['nome']);
header("Location: index-login.php");

?>