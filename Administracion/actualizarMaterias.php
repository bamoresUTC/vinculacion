<?php include ("../seguridad/seguridad.php");
include("../conex.php");
?>

<?php
include '../config.inc.php';
?>
<?php $emails=$_SESSION['email'];
$ced=$_SESSION['cedulaUsuario'];
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
            <a href="" class="navbar-brand" style="color: white;" >CREAR MES</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
           
            </ul>
          </div>
          <div class="loginDisplay" style="text-align: right;">
					<img src="../images/perfil.png"	 style="height: 25px; width: 25px;" />
					<span class="bold"> <span style="color: white; font-size: 16px"> <?php echo $_SESSION['usuario'];?></span>
					</span><br>[ <a id="" href="../cerrar.php" style="color: red;">Cerrar						sesion</a> ]
			<br><br><br>
				</div>	
        </div>
     
        	              </nav>
        	              <br>
        	              <br>
        	              <br>
        	              <br>

	<!--------------Content--------------->
	<section id="content">

		<br>
<br>
		<br>
		</center>
		<br> <br>
		<div class="content">
			<div class="login" align="center" style="height: 400px; width: 280px">
				<h1>MODIFICAR DATOS DEL MES</h1>
				<br>
				<br> <label>MES:</label>
				<form method="post" action="actualizarMat.php">
					<table>
						<th><input type="hidden" name="cedula"
							value="<?php echo $_SESSION['cedula'];?>"> <input type="hidden"
							name="idMes" value="<?php echo $_GET['idMes']; ?>"> <td><input
							type="text" pattern="[a-zA-Z]+" title="Ingrese solo letras"
							required placeholder="nombre de materia  :" name="nombreMes"
							value="<?php echo $_GET['nombreMes']?>" style="width: 200px"><br> <br></td>
						</th>
					</table>
<input type="hidden" name="idMes" value="<?php echo $_GET['idMes']?>">
					<br>
					<center>
						<input align="center" value="Actualizar" type="submit"
							name="commit" style="width: 144px;"><br> <br> <br> <a
							href="carpetapersonal.php"><button type="button"
								class="btn btn-info">Ir a Portafolio</button></a><br> <br>

					</center>
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
					software II</p>

			</div>
		</div>
	</footer>


						
						</body>
</html>