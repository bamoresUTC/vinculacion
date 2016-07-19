
<?php
include("../conex.php");
//id del documento que voy a eliminar
// $id_tit=$_GET['idt'];
$_idMes=$_GET['idMes'];
$sql2=mysql_query("Delete FROM Mes WHERE idMes='$_idMes'");
echo '<script>alert("Materia se ha elimina correctamente")</script> ';
echo "<script>location.href='carpetapersonal.php'</script>";
?>

