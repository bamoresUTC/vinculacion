<?php 

include("../conex.php");
	
    $idusu=$_POST['idusu'];
	$des=$_POST['descripcion'];
	$indica=$_POST['indicador'];
	$evi=$_POST['evidencia'];
	$meta=$_POST['meta'];
	$cumple=$_POST['cumplimiento'];
	$cumple2=$_POST['%cumplimiento'];
	$reco=$_POST['recomendaciones'];
	$checknombreEvaluacion = mysql_query ( "SELECT * FROM evalucionactividad WHERE descripcionactividadEva='$des'" );
	$check_nombre = mysql_num_rows ( $checknombreEvaluacion );
	if ($check_nombre> 0) {
		echo ' <script language="javascript">alert("Ya existe esta Actividad");</script> ';
	echo "<script>location.href='insertar_evaluacion_actividad.php'</script>";
	}else {
		

		$cad="insert into evalucionactividad (idUsu,descripcionactividadEva,indicadorEva,evidenciaEva,metaEva,cumplimeintoEva,%cumplimientoEva,recomendacionesEva) values('$idusu','$des','$indica','$evi','$meta','$cumple','$cumple2','$reco')";
		echo '<script>alert("EVALUACION DE ACTIVIDAD REGISTRADA CON EXITO")</script> ';
		echo "<script>location.href='evaluacion_actividades.php'</script>";
		mysql_query($cad,$conex);
		
	}
	
	
 ?>