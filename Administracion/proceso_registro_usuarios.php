<?php 
include("../conex.php");	
$rol=$_POST['rol'];
	$ced=$_POST['cedula'];
	$nom=$_POST['nombre'];
	$apell=$_POST['apellido'];
	$dir=$_POST['direccion'];
	$tel=$_POST['telefono'];
	$email=$_POST['email'];
	$pwd=$_POST['clave'];
	$pwdr=$_POST['claver'];
	
	$checkcedula = mysql_query ( "SELECT * FROM usuario WHERE cedulaUsu='$ced'" );
	$checkemai = mysql_query ( "SELECT * FROM usuario WHERE emailUsu='$email'" );
	$check_cedula = mysql_num_rows ( $checkcedula );
	$check_mai = mysql_num_rows ( $checkemai );
	if ($pwd == $pwdr) {
		if ($check_cedula > 0) {
			echo ' <script language="javascript">alert("Atencion, ya existe la cedula  designado para un usuario, verifique sus datos");</script> ';
			echo "<script>location.href='insertarUsuarios.php'</script>";
		}
	
		elseif ($check_mai > 0) {
			echo ' <script language="javascript">alert("Atencion, ya existe el correo designado para un usuario, verifique sus datos");</script> ';
			echo "<script>location.href='insertarUsuarios.php'</script>";
		}
	
		else {
	
			// Comprobar
			$pwd =  ( $pwd );
			$cad="insert into usuario (idRol,cedulaUsu, nombreUsu, apellidoUsu, direccionUsu, telefonoUsu, emailUsu,claveUsu,repitaclaveUsu) values('$rol','$ced','$nom','$apell','$dir','$tel','$email','$pwd','$pwdr')";
				
			echo '<script>alert("USUARIO REGISTRADO CON EXITO")</script> ';
			echo "<script>location.href='Tutores.php'</script>";
			mysql_query($cad,$conex);
		}
	} else {
	
		echo ' <script language="javascript">alert("CONTRASE�A NO COINCIDEN:");</script> ';
		echo "<script>location.href='insertarUsuarios.php'</script>";
	}
   
			

 ?>