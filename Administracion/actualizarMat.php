<?php
include("../conex.php");
  $id=$_POST['idMes'];
  $nombre=$_POST['nombreMes'];  
mysql_query("update mes set nombreMes='$nombre' where idMes='$id'");
echo ' <script language="javascript">alert("Se modificó  correctamente esa información");</script> ';
echo "<script>location.href='carpetapersonal.php'</script>";
?>

