<?php 

include("../conex.php");
	
    $idusu=$_POST['idusu'];
	$des=$_POST['descripcion'];
	$indica=$_POST['indicador'];
	$evi=$_POST['evidencia'];
	$meta=$_POST['meta'];
	$cumple=$_POST['cumplimiento'];
	$cumple2=$_POST['cumplimiento2'];
	$reco=$_POST['recomendaciones'];
		
		$cad="insert into evalucionactividad (idUsu,descripcionactividadEva,indicadorEva,evidenciaEva,metaEva,cumplimeintoEva,por_cumplimientoEva,recomendacionesEva) values('$idusu','$des','$indica','$evi','$meta','$cumple','$cumple2','$reco')";
echo '<script>alert("EVALUACION DE ACTIVIDAD REGISTRADA CON EXITO")</script> ';
	echo "<script>location.href='evaluacion_actividades.php'</script>";
		mysql_query($cad,$conex);
		
	
	
	
 ?>