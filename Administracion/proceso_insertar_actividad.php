<?php 

include("../conex.php");
	
    $idusu=$_POST['idusu'];
	$des=$_POST['descripcion'];
	$indica=$_POST['indicador'];
	$evi=$_POST['evidencia'];
	$meta=$_POST['meta'];
	$inicio=$_POST['fechaInicio'];
	$fin=$_POST['fechaFina'];
	$obser=$_POST['observaciones'];
	$checknombrePlanificacion = mysql_query ( "SELECT * FROM planificacion WHERE descripcionactividadPla='$des'" );
	$check_nombre = mysql_num_rows ( $checknombrePlanificacion );
	if ($check_nombre> 0) {
		echo ' <script language="javascript">alert("Ya existe esta Actividad");</script> ';
	echo "<script>location.href='insertaractividad.php'</script>";
	}else {
		

		$cad="insert into planificacion (idUsu,descripcionactividadPla,indicadorPla,evidenciaPla,metaPla,fechainicioPla,fechafinPla,observacionesPla) values('$idusu','$des','$indica','$evi','$meta','$inicio','$fin','$obser')";
		echo '<script>alert("ACTIVIDAD REGISTRADA CON EXITO")</script> ';
		echo "<script>location.href='actividades.php'</script>";
		mysql_query($cad,$conex);
		
	}
	
	
 ?>