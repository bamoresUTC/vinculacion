<?php
include ("../seguridad/seguridad.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include '../config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from documento where idDoc=".$_GET['idDoc'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombrearchivoDoc']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
   <iframe style="width: 1400px; height: 700px" src="../archivos/<?php echo $datos['nombrearchivoDoc']; ?>" ></iframe>
                
                
                <?php } } ?>
    </body>
</html>
