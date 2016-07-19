<?php 
 include("../conex.php");
	$idEva=$_GET['idEva'];
	$cad="delete from evalucionactividad where idEva=".$idEva;
	mysql_query($cad,$conex);
	header("Location: evaluacion_actividades.php");

 ?>