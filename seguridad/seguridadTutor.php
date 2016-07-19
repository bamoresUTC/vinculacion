<?php
session_start();
$_SESSION['cedulaUsuarioT'];
if (!isset($_SESSION['usuarioT']))
header("location:login.php");
?>