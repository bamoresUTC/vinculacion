<?php 
 include("../conex.php");
 
 $idpla = $_POST['idPla'];
 $des=$_POST['descripcion'];
 $des=$_POST['descripcion'];
	$indica=$_POST['indicador'];
	$evi=$_POST['evidencia'];
	$meta=$_POST['meta'];
	$inicio=$_POST['fechaInicio'];
	$fin=$_POST['fechaFina'];
	$obser=$_POST['observaciones'];

mysql_query("update planificacion set descripcionactividadPla='$des',indicadorPla='$indica',evidenciaPla='$evi', metaPla='$meta', fechainicioPla='$inicio', fechafinPla='$fin', observacionesPla='$obser' where idPla='$idpla'");

	// echo ' <script language="javascript">alert("Se ha modificado correctamente :");</script> ';
echo "<script>location.href='actividades.php'</script>";
?>