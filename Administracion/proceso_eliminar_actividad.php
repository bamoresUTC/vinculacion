<?php 
 include("../conex.php");
	$idPla=$_GET['idPla'];
	$cad="delete from planificacion where idPla=".$idPla;
	mysql_query($cad,$conex);
	header("Location: actividades.php");

 ?>