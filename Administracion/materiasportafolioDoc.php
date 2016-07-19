<?php
include ("../seguridad/seguridad.php");

include("../conex.php");
require_once ("../PHPPaging.lib/PHPPaging.lib.php");
$pagina = new PHPPaging ();
?>

<?php

$emails = $_SESSION ['email'];

?>
<?php

$_idCarp = $_GET ['idCarp'];

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
	<section id="content">

		<br> <br>

		<center>
			<span style="color: black; font-size: 20px">Nombre de carpeta personal:  </span><span
				style="color: black; font-size: 18px"><?php echo $_GET['nombreCarp']; ?>
		</center>
		<br>

		</center>


		<div class="content">

			<br>
			<div class="content" align="center">
				<div align="center" style="height: 540px; width: 960px">
					<div class="well well-small" align="left">
						<center>
							<h3 style="color: #FFB700; font-family: fantasy;"> INFORMES  POR MESES:</h3>

						</center>
						<form action="#">
							<center>
								<table>				
<?php
$pagina->agregarConsulta ( "SELECT * FROM mes  where idCarp='$_idCarp'" );
$pagina->ejecutar ();
while ( $res = $pagina->fetchResultado () ) {
	?>  
	         <tr>

										<td align="center" rowspan="2"><a
											href="lista.php?idMes=<?php echo $res['idMes']?> & nombreMes=<?php echo $res['nombreMes']?>"><img
												src="../images/carpeta.png"
												style="height: 80px; width: 140px;" /></a></td>
										<td align="center" rowspan="2"><br>
										 			<?php if (!	isset($_SESSION['usuarioT'])) {?>
										 <a href="materia.php?idMes=<?php echo $res['idMes']?> & nombreMes=<?php echo $res['nombreMes']?>"><button
													type="button" class="btn btn-primary">Agregar Informe</button></a>
											<a
											href="EliminarMateria.php?idMes=<?php echo $res['idMes']?>"
											onclick="return confirm('Esta seguro que desea eliminar este mes')"><button
													type="button" class="btn btn-danger">Eliminar</button></a><a
											onclick="return confirm('Esta seguro que desea actualizar el nombre del mes')"
											href="actualizarMaterias.php?idMes=<?php echo $res['idMes']?> & nombreMes=<?php echo $res['nombreMes']; ?>">
												<button type="button" class="btn btn-info">Modificar</button>
										</a>
										
										<?php } ?>
										
										
										</td>
									</tr>
									<tr>
									</tr>


									<tr>
										<td align="center"><label style="font-size: 15px;"> <span
												style="color: black;"><?php echo $res['nombreMes'];?></span></label>
										</td>

									</tr>
<?php
}
?>
</table>
						
						</form>
						<br> <br>

<?php
echo '<span class="label label-default">Paginas</span>
  ' . $pagina->fetchNavegacion ();
?>
</center>

					</div>
				</div>

				<br> <br>




















			</div>

			<div class="box">
				<div class="heading">
					<br> <br>
				</div>
				<div class="content"></div>
				<div class="post"></div>
				<div class="post"></div>
			</div>
	
	</section>
	<!--------------Footer--------------->
	<footer>
		<div class="wrap-footer">
			<div class="copyright" style="height: 79px;">
				<br>
				<p>Copyright © 2015 - Portafolio Estudiantil by Ingenieria de
					software I</p>

			</div>
		</div>
	</footer>

</body>
</html>