<?php
	include("../conex.php");
	
	$ced=$_GET['cedulaUsu'];
	
	$sql=mysql_query("SELECT * FROM usuario WHERE cedulaUsu='$ced'");
	
	if($f=mysql_fetch_array($sql)){

		    $nom=$f['nombreUsu'];
		    $ape=$f['apellidoUsu'];
			$cedu=$f['cedulaUsu'];
			$email=$f['emailUsu'];
			//inicio de sesion
			session_start();
			//Consular datos de la bd
			$_SESSION['usuario']=$nom . " " . $ape;
			$_SESSION['cedula']=$cedu;
			$_SESSION['email']=$email;	
			
		echo "<script>location.href='carpetapersonal.php'</script>";
		}
	
?>
