<?php 
$_id=$_POST['id'];
$_ced=$_POST['cedu'];
$_idmat=$_POST['idmat'];
$_nomPor=$_POST['nombre'];
?>
	
	
<?php 

// Consultar el email del estudiante
	include("../conex.php");
	$sql=mysql_query("SELECT * FROM usuario WHERE cedulaUsu='$_ced'");	
	if($f=mysql_fetch_array($sql)){
		$email=$f['emailUsu'];
	}
				
	// Consultar si ya esta creado el portafolio
	
	$existePortafolio=mysql_query("SELECT * FROM usuario U, carpetapersonal C WHERE U.idUsu=C.idUsu and emailUsu='$email'");	
		
	$existe_Portafolio=mysql_num_rows($existePortafolio);
	    if($existe_Portafolio>0)
		{
		echo ' <script language="javascript">alert("Atencion, solo puede crear un portafolio por ciclo y periodo academico");</script> ';
		echo "<script>location.href='CarpetapersonlaUsuario.php'</script>";
		}
		else
		{
	
mysql_query("INSERT INTO carpetapersonal VALUES('','$_idmat','$_id','$_ced','$_nomPor')");
 mysql_close($conex);	
 echo '<script>alert("PORTAFOLIO CREADO CON EXITO")</script> ';
 echo "<script>location.href='documentacion.php'</script>";
 
		}		
	
		
?>