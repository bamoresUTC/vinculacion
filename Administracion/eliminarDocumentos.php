<?php 
include("../conex.php");
//id del documento que voy a eliminar
$_idDoc=$_GET['idDoc'];

$sql=mysql_query("Delete FROM documento WHERE idDoc='$_idDoc'");
echo '<script>alert("Documento Eliminado")</script> ';
echo "<script>location.href='carpetapersonal.php'</script>";

//id del documento que voy a eliminar
?>


