<?php 
 include("../conex.php");
 
 $ideva=$_POST['idEva'];
 $des=$_POST['descripcion'];
	$indica=$_POST['indicador'];
	$evi=$_POST['evidencia'];
	$meta=$_POST['meta'];
	$cumple=$_POST['cumplimiento'];
	$cumple2=$_POST['%cumplimiento'];
	$reco=$_POST['recomendaciones'];

mysql_query("update evalucionactividad set descripcionactividadEva='$des',indicadorEva='$indica',evidenciaEva='$evi', metaEva='$meta', cumplimeintoEva='$cumple', %cumplimientoEva='$cumple2', recomendacionesEva='$reco' where idEva='$ideva'");

	// echo ' <script language="javascript">alert("Se ha modificado correctamente :");</script> ';
echo "<script>location.href='evaluacion_actividades.php'</script>";
?>