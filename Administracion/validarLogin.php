<?php
 include("../conex.php");
$ced=$_POST['cedula'];
$cla=$_POST['clave'];
$rs=mysql_query("select * from usuario ,rol  where   cedulaUsu='$ced'and claveUsu='$cla' and rol.idRol=usuario.idRol",$conex);
$idu="";
$tip="";

while($fila=mysql_fetch_array($rs)){
	$idu=$fila['idUsu'];
	$nom=$fila['nombreUsu'];
	$segnom=$fila['segundonombreUsu'];
	$ape=$fila['apellidoUsu'];
	$segape=$fila['segundoapellido'];
	$tip=$fila['idRol'];
	$nomTipoUsu=$fila['nombreRol'];
	$ced=$fila['cedulaUsu'];
	$img=$fila['imagen'];
	$emails = $fila ['emailUsu'];
			session_start();
	$_SESSION['idUsuario']=$idu;	
	$_SESSION['usuario']=$nom . " " . $ape;
	$_SESSION['tipoUsuario']=$tip;
	$_SESSION['privilegioUsuario']=$nomTipoUsu;
	$_SESSION['cedulaUsuario']=$ced;
	$_SESSION['imagenusu']=$img;
	$_SESSION ['email'] = $emails;
}

if ($idu=="") {
echo '<script>alert("Datos ingresados incorrectos")</script> ';
echo "<script>location.href='login.php'</script>";
}


 ?>

 

 
<!-- Pasar una variable javascrip a php comprobado  -->
<script>
var usu  = '<?php echo  $nom   ." " . $ape?>';
</script>
<!--  parar una variable php a javascrip -->
<?php
// $variablephp = "<script> document.write(usu) </script>";
// echo "variablephp = $variablephp";
?>
<?php 
// echo''.$variablephp;
?>

<!--  si es 1 es gerente si es 2 es administrador y si es 3 es Vendedor  -->
 <?php
 $rs=mysql_query("select * from usuario ,rol  where   cedulaUsu='$ced'and claveUsu='$cla' and rol.idRol=usuario.idRol",$conex);
 IF($fila=mysql_fetch_array($rs)){
 	 
if ($tip=="1") {
	$nom=$fila['nombreUsu'];
	$ape=$fila['apellidoUsu'];
	$ced=$fila['cedulaUsu'];
	$emails = $fila ['emailUsu'];
	$_SESSION['usuario']=$nom . " " . $ape;
	$_SESSION['cedulaUsuario']=$ced;
	$_SESSION ['email'] = $emails;
echo '<script>alert("Bienvenido Estudiante : "+usu)</script> ';
echo "<script>location.href='../inicio.php'</script>";
} elseif ($tip=="2") {
	$nom=$fila['nombreUsu'];
	$ape=$fila['apellidoUsu'];
	$ced=$fila['cedulaUsu'];
	$emails = $fila ['emailUsu'];
	$_SESSION['usuario']=$nom . " " . $ape;
	$_SESSION['usuarioT']=$nom . " " . $ape;
	$_SESSION['cedulaUsuarioT']=$ced;
	$_SESSION ['emailT'] = $emails;
	echo '<script>alert("Bienvenido Tutor :"+usu)</script> ';
echo "<script>location.href='../inicio.php'</script>";
} elseif ($tip =="3") {
	$nom=$fila['nombreUsu'];
	$ape=$fila['apellidoUsu'];
	$ced=$fila['cedulaUsu'];
	$emails = $fila ['emailUsu'];
	$_SESSION['usuario']=$nom . " " . $ape;
	$_SESSION['usuarioT']=$nom . " " . $ape;
	$_SESSION['usuarioC']=$nom . " " . $ape;
	$_SESSION['cedulaUsuarioC']=$ced;
	$_SESSION ['emailC'] = $emails;
	echo '<script>alert("Bienvenido Coordinador : "+usu)</script>';
	echo "<script>location.href='../inicio.php'</script>";
}
elseif ($tip =="4") {
	$nom=$fila['nombreUsu'];
	$ape=$fila['apellidoUsu'];
	$ced=$fila['cedulaUsu'];
	$emails = $fila ['emailUsu'];
	$_SESSION['usuario']=$nom . " " . $ape;
	$_SESSION['usuarioT']=$nom . " " . $ape;
	$_SESSION['usuarioC']=$nom . " " . $ape;
	$_SESSION['usuarioAdmin']=$nom . " " . $ape;
	$_SESSION['cedulaUsuarioAdmin']=$ced;
	$_SESSION ['emailAdmin'] = $emails;
	echo '<script>alert("Bienvenido Administrador : "+usu)</script>';
	echo "<script>location.href='../inicio.php'</script>";
}
 }
?>



