<?php
include("../conex.php");
  $id=$_POST['idMes'];
  $nombre=$_POST['nombreMes'];  
mysql_query("update mes set nombreMes='$nombre' where idMes='$id'");
echo ' <script language="javascript">alert("Se modific�  correctamente esa informaci�n");</script> ';
echo "<script>location.href='carpetapersonal.php'</script>";
?>

