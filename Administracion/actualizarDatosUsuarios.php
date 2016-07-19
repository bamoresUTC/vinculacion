<?php
include("../conex.php");
   $ced=$_POST['cedula'];
  $nomb=$_POST['nombre'];
  $segnomb=$_POST['segundonombre'];
  $apee=$_POST['apellido'];
  $segapee=$_POST['segundoapellido'];
  $direccion=$_POST['direccion'];
  $email=$_POST['email'];
  $telf=$_POST['telefono'];
  $lugarna=$_POST['lugarnacimiento'];
  $fechan=$_POST['fechan'];
  $lugarp=$_POST['lprocedencia'];
  $nacio=$_POST['nacionalidad'];
  $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
mysql_query("update usuario set nombreUsu='$nomb',segundonombreUsu='$segnomb',apellidoUsu='$apee',segundoapellido='$segapee',
		 direccionUsu='$direccion',emailUsu='$email', telefonoUsu='$telf',
		lugarnacimientoUsu='$lugarna', fechanacimientoUsu='$fechan', lugarprocedenciaUsu='$lugarp', 
		nacionalidadUsu='$nacio',imagen='$imagen'  where cedulaUsu='$ced'");
echo ' <script language="javascript">alert("Datos actualizados exitosamente");</script> ';
echo "<script>location.href='../inicio.php'</script>";
?>


