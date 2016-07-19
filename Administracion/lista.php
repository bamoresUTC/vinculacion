<?php
include ("../seguridad/seguridad.php");
include_once '../config.inc.php';
// Recibir el id de la materia
$codigoMes = $_GET ['idMes'];
// Recibir nombre de la asignatura
$nomMes = $_GET ['nombreMes'];
?>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Portafolio Docente</title>
<meta name="description"
	content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
<meta name="author" content="www.zerotheme.com">

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
  ================================================== -->
<link rel="stylesheet" href="../css/zerogrid.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/responsive.css">
<link rel="stylesheet" href="../css/responsiveslides.css" />

<link href='../images/iconoutc.ico' rel='icon' type='image/x-icon' />
<script src="../js/jquery.min.js"></script>
<script src="../js/responsiveslides.js"></script>

<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">



</head>
<body style="background-image: url('images/fondo.jpg');">

       <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" >CARPETA PERSONAL</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
           
            </ul>
          </div>
          <div class="loginDisplay" style="text-align: right;">
					<img src="../images/perfil.png"	 style="height: 25px; width: 25px;" />
										<span class="bold">
<?php if (isset($_SESSION['usuarioT'])) {?>
		 <span style="color: white; width: 300px; font-size: 12px"><?php echo  $_SESSION['usuarioT'];?></span>
<?php } else {?>
 <span style="color: white; width: 300px; font-size: 12px"> <?php echo $_SESSION['usuario'];?></span>
<?php }?>
					
					</span><br>[ <a id="" href="../cerrar.php" style="color: red;">Cerrar						sesion</a> ]
			<br><br><br>
				</div>	
        </div>
     
     
     <nav>
		<div class="wrap-nav zerogrid">
			<div class="menu">
				<ul>
				
<?php if (isset($_SESSION['usuarioT'])) {?>
		 <center><span style="color: white; font-family: fantasy;; font-size: 35px; ">	<?php echo  $_SESSION['usuario'];?></span></center>

		 <?php } else {?>					
					 <span style="background:white ; color: white; font-family: monospace; font-size: 35px; ">	</span></center>
					 
<?php }?>
					
					
					</ul>
			</div>
		</div>
	</nav>
     
     
        	              </nav>
        	              <br>
        	              <br>
        	              <br>
        	              <br> <br>
        	              <br>
        	              <br>
        	              <br>
	<!--------------Content--------------->

		<br>

		<center>
			<span style="color: Black; font-size: 20px">DOCUMENTOS DEL MES DE:</span>
			<br> <span style="color: black; font-size: 18px"><?php echo $_GET['nombreMes'];?>
		
		</center>
		<br> <br>


		<div class="content">
			<div class="login" style="height: 500px; width: 960px">
				<h1>LISTA DE DOCUMENTOS</h1>
				<form method="post" action="documentacion.php">
					<table class="table">
						<tr>
							<th align="center">Titulo</th>
							<th align="center">Fecha subida</th>
							<th align="center">Tipo de archivo</th>
							<th align="center">Horas realizadas</th>
							<th align="center">Nombre de archivos </th>
							<th colspan="2">Accion</th>
						</tr>
            
             

        <?php
        $db = new Conect_MySql ();
        $sql = "select*from documento D, mes M where  nombreMes='$nomMes' and M.idMes=D.idMes;";
        $query = $db->execute ( $sql );
        while ( $datos = $db->fetch_row ( $query ) ) {
            ?>
            <tr>
							<td align="center" style="width: 204px;"><?php echo $datos['tituloDoc']; ?></td>
							<td align="center" style="width: 197px;"><?php echo $datos['fechasubidaDoc']; ?></td>
							<td align="center" style="width: 164px;"><?php echo $datos['tipoarchivoDoc']; ?></td>
							<td align="center" style="width: 119px;"><?php echo $datos['horasrealizadasDoc']; ?></td>
							<td align="center" style="width: 158px;"><a
								href="archivo.php?idDoc=<?php echo $datos['idDoc']?>"><?php echo $datos['nombrearchivoDoc']; ?></a></td>
							<td align="center"><a
								href="eliminarDocumentos.php?idDoc=<?php echo $datos['idDoc']?>" onclick="return confirm('Esta Seguro que quiere cancelar ?');"><button
										type="button" class="btn btn-danger">Eliminar</button></a></td>
							
						</tr>
                
          <?php  } ?>
            
        </table>
				</form>

			</div>

			<br> <br>



		</div>

	<footer>
		<div class="container" style="text-align: center; background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
			<h3></h3>
			<h3>2016</h3>
		</div>
	</footer>

</body>
</html>


