 <?php
include ("../seguridad/seguridad.php");
include("../conex.php");
require_once ("../PHPPaging.lib/PHPPaging.lib.php");
$pagina = new PHPPaging ();
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

	<!--------------Header--------------->

        <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" > LISTADO DE IMFORMES DE CADA ESTUDIANTE </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
           
            </ul>
          </div> <br>
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
        	              <br>
        	              <br>

	<!--------------Content--------------->
	<section id="content">
		<br>
		<div class="content" align="center">

			<div align="center" style="height: 445px; width: 960px">

				<h2 style="color: #AEB404; font-family: fantasy;">Listado de estudiantes</h2>


				<br>


				<div id="flip" class="alert alert-success"
					style="height: 65px; width: 960px">
					<form action="" method="post">
						<div class="col-sm-4">
							<input type="text" id="buscar" type="text" name="buscar"
								placeholder="Cedula o Apellido" value="">
						</div>
						<div class="col-sm-4">

							<button class="btn btn-default" type="submit">BUSCAR</button>
							<br>
							<br>
							<br>
							<br>
						</div>
					</form>
				</div>


				<div class="well well-small" align="left">
					<center>
						<table class="table table-hover">
							<tr bgcolor="skyblue">
							</tr>
							<tr bgcolor="red">
								<td><strong>CEDULA</strong></td>
								<td><strong>NOMBRE</strong></td>
								<td><strong>APELLIDO</strong></td>
								<td><strong>CARRERA</strong></td>
								<td><strong>NIVEL</strong></td>
								<td><strong>TUTOR</strong></td>
								<td><strong>PROYECTO</strong></td>
								<td align="center"><strong>Accion</strong></td>
							</tr>
<?php
$pagina->agregarConsulta ( "select * from usuario U,
    		 carrera C, unidadacademica UN,nivel N,proyecto P, matricula M, periodoacademico PA,horario HR,horas H
    		 where estadoMat='Matriculado' and U.idUsu=M.idUsu and UN.idUnid=M.idUnid and c.idCarr=M.idCarr and
    		 N.idNivel=M.idNivel and p.idPro=M.idpro and PA.idPeri=M.idPeri and HR.idHor=M.idHor and H.idH=M.idH" );

if (isset ( $_POST ['buscar'] )) {
    $pagina->agregarConsulta ( "select * from usuario,carrera, nivel,tutor, proyecto where cedulaUsu like '%" . $_POST ['buscar'] . "%' or apellidoUsu like '%" . $_POST ['buscar'] . "%' " );
}

$pagina->ejecutar ();
while ( $res = $pagina->fetchResultado () ) {
    $cedula = $res ["cedulaUsu"];
    $nombre = $res ["nombreUsu"];
    $apellido = $res ["apellidoUsu"];
    $carrera = $res ["nombreCarr"];
    $nivel = $res ["nombreNivel"];
    $Tutor = $res ["nombreTutor"];
    $nombrePro = $res ["nombrePro"];
    
    ?>  
                         <tr>
								<td><?php echo $cedula; ?></td>
								<td><?php echo $nombre; ?></td>
								<td><?php echo $apellido; ?></td>
								<td><?php echo $carrera; ?></td>
								<td><?php echo $nivel; ?></td>
								<td><?php echo $Tutor; ?></td>
								<td><?php echo $nombrePro; ?></td>
								<td align="center"><a
									href="restringir.php?cedulaUsu=<?php echo $res['cedulaUsu']?>"><button
											class="btn btn-info" type="button">Visualizar</button></a></td>

							</tr>
<?php
}
?>
</table>
<?php

echo '<span class="label label-default">Paginas</span>
  ' . $pagina->fetchNavegacion ();
?>
</center>

				</div>
			</div>
			<br>
			<br>
		</div>
		<br>
	</section>

	<br>
	<br>

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