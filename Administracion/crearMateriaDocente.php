<?php 
$_ced=$_POST['idCarp'];
$_nombreMes=$_POST['nombremes'];
?>
<?php 
// Consultar el email del estudiante
	include("../conex.php");
	$checknombre= mysql_query ( "SELECT * FROM mes WHERE nombreMes='$_nombreMes'" );
	$check_nombre = mysql_num_rows ( $checknombre );
	
	if ($check_nombre > 0) {
		echo ' <script language="javascript">alert("Este mes ya se encuentra registrado");</script> ';
		echo "<script>location.href='carpetapersonal.php'</script>";
	}
	else {
mysql_query("INSERT INTO mes VALUES('','$_ced','$_nombreMes')");
mysql_close($conex);	
echo '<script>alert("Mes creada con éxito")</script> ';
 echo "<script>location.href='carpetapersonal.php'</script>";
	}
// 		}		
?>
