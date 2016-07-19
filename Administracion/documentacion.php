<?php
include ("../seguridad/seguridad.php");
include '../config.inc.php';
?>

	<?php $emails=$_SESSION['email'];?>


<!--  Consultar el nombre del portafolio de la bd -->
<?php

$dbn = new Conect_MySql ();
$sqln = " SELECT * FROM estudiante ,portafolio,ciclo ,materia WHERE ciclo.codigoCic=materia.codigoCic and ciclo.codigoCic=portafolio.codigoCic and estudiante.cedulaEst=portafolio.cedulaEst and emailEst='$emails'";
$query = $dbn->execute ( $sqln );
$datosn = $dbn->fetch_row ( $query )?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Portafolio Estudiantil</title>
<meta name="description"
	content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
<meta name="author" content="www.zerotheme.com">

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
  ================================================== -->
<link rel="stylesheet" href="css/zerogrid.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/responsiveslides.css" />

<link href='./images/iconoutc.ico' rel='icon' type='image/x-icon' />
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.js"></script>

<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/bootstrap.min.css">



</head>
<body style="background-image: url('images/fondo.jpg');">

	<!--------------Header--------------->
	<header>
		<div class="wrap-header zerogrid">
			<div id="logo" style="font: 14px/25px Arial, Helvetica, sans-serif;">
				<img src="./images/portafolio.png"
					style="height: 116px; width: 555px;" />
			</div>

			<div id="search">

				<div class="loginDisplay">
					<img src="./images/perfil.png" style="height: 25px; width: 25px;" />
					<span class="bold"> <span style="color: white; font-size: 16px"> <?php echo $_SESSION['usuario'];?></span>



					</span><br>[ <a id="" href="cerrar.php" style="color: red;">Cerrar
						sesion</a> ]

				</div>
			</div>
		</div>

	</header>

	<nav>
		<div class="wrap-nav zerogrid">
			<div class="menu">
				<ul>
					<li class="first current"><a href="portafolioUsuario.php">Home</a></li>



				</ul>
			</div>


			<div class="share">
				<ul>
					<li><a href="#"><img src="images/twitter-icon.png" title="Twitter" /></a></li>
					<li><a href="#"><img src="images/facebook-icon.png"
							title="Facebook" /></a></li>
					<li><a href="#"><img src="images/google-plus-icon.png"
							title="Google Plus" /></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!--------------Content--------------->
	<section id="content">

		<br>

		<center>
			<span style="color: white; font-size: 20px">Nombre del Portafolio :</span><span
				style="color: cyan; font-size: 18px"><?php echo $datosn['nombre_por']; ?>
		
		</center>
		<br>

		<center>
			<span style="color: white; font-size: 20px">Portafolio de :</span><span
				style="color: cyan; font-size: 18px"><?php echo $datosn['nombreCli']; ?>
		
		</center>
		<br>

		<div class="content">

			<div class="login" align="center" style="height: 920px; width: 960px">
				<h1>ASIGNATURAS PORTAFOLIO</h1>
				<form method="post" action="documentacion.php"
					style="height: 406px;">


					<table align="center">
        
        
        <?php
        $db = new Conect_MySql ();
        $sql = " SELECT * FROM estudiante ,portafolio,ciclo ,materia WHERE ciclo.codigoCic=materia.codigoCic and ciclo.codigoCic=portafolio.codigoCic and estudiante.cedulaEst=portafolio.cedulaEst and emailEst='$emails'";
        
        $query = $db->execute ( $sql );
        while ( $datos = $db->fetch_row ( $query ) ) {
            ?>
            
            <tr>

							<td align="center"><a href="lista.php?nom=<?php echo $datos['nombreMat']?>"><img src="./images/carpeta.png" style="height: 80px; width: 140px;" /></a>
							</td>

							<td align="center" rowspan="2"><br> <a
								href="materia.php?id=<?php echo $datos['codigoMat']?>& nomb=<?php echo $datos['nombreMat']?> "><button
										type="button" class="btn btn-primary">Agregar</button></a></td>

						</tr>
						<tr></tr>
						<tr>
							<!--  <td><?php echo $datos['codigoMat']; ?></td> -->
							<!--   <td><?php echo $datos['codigoCic']; ?></td>-->
							<td align="center"><?php echo $datos['nombreMat']; ?></td>
							<!--   <td><?php echo $datos['creditoMat']; ?></td>-->
							<!--  <td><a href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre_archivo']; ?></a></td>-->
						</tr>
                
          <?php  } ?>
            
        </table>
				</form>





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