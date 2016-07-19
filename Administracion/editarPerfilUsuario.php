            <?php
include ("../seguridad/seguridad.php");
include("../conex.php");
?>  
<?php $ced=$_GET['cedula']?>
                                 
 
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
<link rel="stylesheet" href="../css/zerogrid.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/responsive.css">
<link rel="stylesheet" href="../css/responsiveslides.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/login.css">

<link href='./images/iconoutc.ico' rel='icon' type='image/x-icon' />
<!--  <link rel="stylesheet" href="css/4_2.css" type="text/css" />
-->

<script src="../js/jquery.min.js"></script>
<script src="../js/responsiveslides.js"></script>
<script src="../js/sadesktop_all.min.js" type="text/javascript"></script>
<!--  <script type="text/javascript" src="js/4_2.min.js"></script>
-->




</head>
<body class="body2" >

	 <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" >Editar perfil </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
           
            </ul>
          </div>
          <div class="loginDisplay" style="text-align: right;">
          <img src="../images/perfil.png"	 style="height: 25px; width: 25px;" > 
					<span class="bold"> <span style="color: white; font-size: 16px"> <?php echo $_SESSION['usuario'];?></span>
					</span><br>[ <a id="" href="../cerrar.php" style="color: red;">Cerrar						sesion</a> ]
			<br><br>
				</div>	
        </div>
     
        	              </nav>
	<br>

	<!--------------Content--------------->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<br>
		<div class="wrap-content zerogrid">
			<div class="login" style="height: 500px; width: 600px; float: left;">
	
			
			<?php $rs=mysql_query("select * from usuario where cedulaUsu='$ced' ",$conex);?>
				
          <?php 
            while($datos=mysql_fetch_array($rs)) {
           ?>	
				<form method="post" action="actualizarDatosUsuarios.php" enctype="multipart/form-data">
				<h1>DATOS GENERALES<a
						href="#">
						<button style="float: right;" type="submit"    class="btn btn-info">Guardar Inf.</button>
					</a></h1>
					<table class="table">
					
					 	<tr>
							<th align="center">Primer apellido</th>
							<th align="center"><input value="<?php echo $datos['apellidoUsu']?>" pattern="[a-zA-Z]+" title="Ingrese solo letras"   required="required" name="apellido" style="width: 200px; "></th>
						</tr>
							<tr>
							<th align="center">segundo apellido</th>
							<th align="center"><input value="<?php echo $datos['segundoapellido']?>" pattern="[a-zA-Z]+" title="Ingrese solo letras"   required="required" name="segundoapellido" style="width: 200px; "></th>
						</tr>
						<tr>
							<th align="center">Primer nombre</th>
							<th align="center"><input required="required"  value="<?php echo$datos['nombreUsu']?>"  pattern="[a-zA-Z]+" title="Ingrese solo letras"   name="nombre" style="width: 200px; "></th>
						</tr>
						<tr>
							<th align="center">Segundo nombre</th>
							<th align="center"><input required="required"  value="<?php echo$datos['segundonombreUsu']?>"  pattern="[a-zA-Z]+" title="Ingrese solo letras"   name="segundonombre" style="width: 200px; "></th>
						</tr>
											<tr>
							<th align="center">Lugar de Nacimiento:</th>
							<th align="center"><input    value="<?php echo $datos['lugarnacimientoUsu']?>"  required placeholder="lugar de nacimiento" name="lugarnacimiento" style="width: 200px; "></th>
						</tr>
						<tr>
							<th align="center">Fecha de Nacimiento:</th>
							<th align="center"><input  type="date"  value="<?php echo $datos['fechanacimientoUsu']?>"  required placeholder="fecha nacimiento:" name="fechan" style="width: 200px; "></th>
						</tr>
						<tr>
							<th align="center">Direccion:</th>
							<th align="center"><input   value="<?php echo $datos['direccionUsu']?>" pattern="[a-zA-Z]+" title="Ingrese solo letras"    required="required" placeholder="direccion" name="direccion"></th>
						</tr>
						<tr>
							<th align="center">EMAIL:</th>
							<th align="center"><input type="email" value="<?php echo $datos['emailUsu']?>" required="required" placeholder="Email" name="email" style="width: 200px; "></th>
						</tr>
						<tr>
							<th align="center">TELEFONO:</th>
							<th align="center"><input     value="<?php echo $datos['telefonoUsu']?>"   pattern="[0-9]{10}" title="Ingrese solo numeros" required="required" placeholder="Telenono" name="telefono"></th>
						</tr>			
						<tr>
							<th align="center">LUGAR DE PROCEDENCIA:</th>
							<th align="center"><input value="<?php echo $datos['lugarprocedenciaUsu']?>" required="required" pattern="[a-zA-Z]+" title="Ingrese solo letras" required placeholder="lugar de procedencia"  placeholder="Lugar Procedencia" name="lprocedencia"></th>
						</tr>
						<tr>
							<th align="center">NACIONALIDAD:</th>
							<th align="center"><input  value="<?php echo $datos['nacionalidadUsu']?>"  pattern="[a-zA-Z]+" title="Ingrese solo letras"   required="required" placeholder="Nacionalidad" name="nacionalidad"></th>
						</tr>

			
			</table>

   <input name="cedula" type="hidden" value="<?php echo $_GET['cedula']?> ">
   
			
			</div>
			<div class="login" style="height: 300px; width: 350px; float: right;">
				<h1>EMPLEADO</h1>
					<table class="table">
						<tr>
							<th align="center"><img src="data:imagen/jpg;base64,<?php echo base64_encode($datos['imagen'])?>"
								 id="cambiarimagen" width="130px" height="170px"></th>
						</tr>
					</table>
<input type="file" name="imagen" required="required">
<br>
<br>
				</form>
				
 <?php  } ?>
			</div>
		</div>

	<br>

	
	


	</div>
	</div>
	
			



		</div>

	</section>


<footer>
		<div class="container" style="text-align: center; background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
			<h3></h3>
			<h3>2016</h3>
		</div>
	</footer>

</body>
</html>
