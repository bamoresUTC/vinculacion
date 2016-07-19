            <?php
include ("seguridad/seguridad.php");
include("/conex.php");
?>
<?php $ced=$_SESSION['cedulaUsuario'];?>
<?php $_SESSION['imagen']=$img;?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Inicio</title>

	 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Proyectos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="css/zerogrid.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/responsiveslides.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.js"></script>
<script src="js/sadesktop_all.min.js" type="text/javascript"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body style="background-image: url('imgen1.jpg'); >
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; margin-top:0px;height: 143px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" >DIRECCION DE VINCULACION SOCIAL</a>
          </div>
         	<div class="container" style="text-align: center;">
		<b style="font-size: 23px " ><?php echo$_SESSION['privilegioUsuario']?></b>
	<br>				
	 <a class="btn btn-primary" href="inicio.php">Inicio</a>
    <?php if($_SESSION['privilegioUsuario']=="Administrador"){?>
   <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Gestinar usuarios<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="../vinculacion/Administracion/Estudiantes.php">Estudiante</a></li>
                            <li><a href="/vinculacion/Administracion/Tutores.php">Tutor</a></li>
                                <li><a href="/vinculacion/Administracion/Coordinadores.php">Coordinador</a></li>      
                        </ul>
                    </div>
  <a class="btn btn-info" href="../vinculacion/Administracion/Proyectos.php">Gestionar proyectos</a>
	<?php }?>
		<?php if($_SESSION['privilegioUsuario']=="Coordinador"){?>
	  <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Consultar<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="/vinculacion/vistas/index.php">Estudiantes matriculados</a></li>
                            <li><a href="">Estudiantes que realizaron vinculacion</a></li>   
                             <li><a href="">Solicitudes de estudiantes</a></li>   
                             <li><a href="">Informes de estudiantes</a></li>         
                        </ul>
                    </div>
			<?php }?>
		<?php if($_SESSION['privilegioUsuario']=="Tutor"){?>			
			
			  <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Consultar<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="/vinculacion/vistas/index.php">Estudiantes matriculados</a></li>
                            <li><a href="/vinculacion/Administracion/carpetapersonal.php">Estudiantes que realizaron vinculacion</a></li>   
                             <li><a href="/vinculacion/Administracion/lista_matriculados_informes.php">Solicitudes de estudiantes</a></li>   
                             <li><a href="/vinculacion/Administracion/lista_matriculados_informes.php">Informes de estudiantes</a></li>         
                        </ul>
                    </div>
                      <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Gestionar<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="">Control de visitas</a></li>
                            <li><a href="">Planificacion de actividades</a></li>   
                             <li><a href="">Evaluacion de actividades</a></li>         
                        </ul>
                    </div>
			<?php }?>
			<?php if($_SESSION['privilegioUsuario']=="Estudiante"){?>			
			  <a class="btn btn-info" href="/vinculacion/Administracion/Matricula.php">Matricularse</a>
			                      <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Subir archivos<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="./Administracion/CarpetapersonlaUsuario.php">Solicitudes</a></li>
                            <li><a href="./Administracion/CarpetapersonlaUsuario.php">Informes</a></li>      
                        </ul>
                    </div>
			<?php }?>
	
	<br>
		</div>
		<?php $rs=mysql_query("select * from usuario where cedulaUsu='$ced' ",$conex);?>	
          <?php 
            while($datos=mysql_fetch_array($rs)) {
           ?> 
          <div class="loginDisplay" style="text-align: right;">
					<img
								src="data:imagen/jpg;base64,<?php echo base64_encode($datos['imagen'])?>"
								width="25px" height="25px" style="width: 25px; height: 25px">
					<span class="bold"> <span style="color: white; font-size: 16px"> <?php echo $_SESSION['usuario'];?></span>
					</span><br>[ <a id="" href="cerrar.php" style="color: red;">Cerrar						sesion</a> ]
			<br><br>
				</div>	
				<?php  } ?>
        </div>
        	              </nav>
             
      <br><br><br><br><br><br>

	
	
<!-- 	<div class="container" > -->
<!-- <img src="images/ppp.png"> -->
      <!--------------Content--------------->

		<div class="wrap-content zerogrid">
			<div class="login" style="height: 500px; width: 600px; float: left;">
				<?php
    include 'config.inc.php';
    $db = new Conect_MySql ();
    $sql = "SELECT * FROM usuario WHERE cedulaUsu='$ced'";
    $query = $db->execute ( $sql );
    while ( $datos = $db->fetch_row ( $query ) ) {
        ?>
				<form method="post">
					<h1>
						DATOS GENERALES<a
							href="./Administracion/editarPerfilUsuario.php?cedula=<?php echo $datos['cedulaUsu']?>">
							<button style="float: right;" type="button" class="btn btn-info">Actualizar
								Inf.</button>
						</a>
					</h1>
					<table class="table">
						<tr>
							<th align="center">Cedula</th>
							<th align="center"><?php echo $datos['cedulaUsu']; ?></th>
						</tr>
						<tr>
							<th align="center">Primer apellido</th>
							<th align="center"><?php echo $datos['apellidoUsu']; ?>
							</th>
						</tr>
					<tr>
							<th align="center">Segundo apellidos</th>
							<th align="center"><?php echo $datos['segundoapellido']; ?></th>
						</tr>
						<tr>
							<th align="center">Primer nombre</th>
							<th align="center"><?php echo $datos['nombreUsu'];?></th>
						</tr>
						<tr>
							<th align="center">Seguno Nombre</th>
							<th align="center"><?php echo $datos['segundonombreUsu'];?></th>
						</tr>
						<tr>
							<th align="center">Lugar Nacimiento:</th>
							<th align="center"><?php echo $datos['lugarnacimientoUsu'];?></th>
						</tr>
						<tr>
							<th align="center">Fecha Nacimiento:</th>
							<th align="center"><?php echo $datos['fechanacimientoUsu'];?></th>
						</tr>
						<tr>
							<th align="center">Direccion:</th>
							<th align="center"><?php echo $datos['direccionUsu'];?></th>
						</tr>
						<tr>
							<th align="center">EMAIL:</th>
							<th align="center"><?php echo $datos['emailUsu'];?></th>
						</tr>
						<tr>
							<th align="center">TELEFONO:</th>
							<th align="center"><?php echo $datos['telefonoUsu'];?></th>
						</tr>
						<tr>
							<th align="center">Lugar de  procedencia</th>
							<th align="center"><?php echo $datos['lugarprocedenciaUsu'];?></th>
						</tr>
						<tr>
							<th align="center">NACIONALIDAD:</th>
							<th align="center"><?php echo $datos['nacionalidadUsu'];?></th>
						</tr>


					</table>
					
				
 <?php  } ?>
				</form>

			</div>
			<div class="login" style="height: 300px; width: 350px; float: right;">
				<h1>EMPLEADO</h1>
								
	<?php
$db = new Conect_MySql ();
$sql = "SELECT * FROM usuario WHERE cedulaUsu='$ced'";
$query = $db->execute ( $sql );
$dato = $db->fetch_row ( $query )?>
        		<form>

					<table class="table">
						<tr>
							<th align="center"><img
								src="data:imagen/jpg;base64,<?php echo base64_encode($dato['imagen'])?>"
								width="130px" height="170px" style="width: 170px; height: 180px"></th>
						</tr>
					</table>
				</form>

			</div>

		</div>
	</section>
	<br>
	<!--  -->
	</div>
	</div>
	


	<!--------------Footer--------------->
	</div>

	<footer>
		<div class="container" style="text-align: center; background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
			<h3></h3>
			<h3>2016</h3>
		</div>
	</footer>
	</div>

	</body>
</html>