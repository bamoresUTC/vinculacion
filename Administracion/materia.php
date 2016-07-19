	 <?php
include_once '../config.inc.php';
// Recibir el id de la materia
$codigoMes = $_GET ['idMes'];
// Recibir nombre de la asignatura
$nomMes = $_GET ['nombreMes'];
?>          
    
<?php
if (isset ( $_POST ['subir'] )) {
    $nombre = $_FILES ['archivo'] ['name'];
    $ruta = $_FILES ['archivo'] ['tmp_name'];
    $destino = "../archivos/" . $nombre;
    if ($nombre != "") {
        if (copy ( $ruta, $destino )) {
            $titulo = $_POST ['titulo'];
            $fechasubida = $_POST ['fechasubida'];
            $tipoarchivo = $_POST ['tipoarchivo'];
            $horas = $_POST ['horas'];
            if ( $horas>10){
            	
            	echo ' <script language="javascript">alert("Ha execedido el maximo de las 10 horas permitidas por semana");</script> ';
            	echo "<script>location.href='carpetapersonal.php'</script>";
            } else 
            
            $db = new Conect_MySql ();
            $sql = "INSERT INTO documento(idMes,tituloDoc,fechasubidaDoc,tipoarchivoDoc,nombrearchivoDoc,horasrealizadasDoc) VALUES('$codigoMes','$titulo',' $fechasubida','$tipoarchivo','$nombre','$horas')";
            $query = $db->execute ( $sql );
                echo '<script>alert("Se guardo correctamente")</script> ';
                
        } else {
            echo "Error";
        }
    }
}
?>


<!--  Consultar el nombre de la materia del portfolio -->
<?php
$dbn = new Conect_MySql ();
$sqln = " SELECT nombreMes FROM mes WHERE idMes='$codigoMes'";
$query = $dbn->execute ( $sqln );
$datosn = $dbn->fetch_row ( $query )?>
    
         
                   
            <?php
            include ("../seguridad/seguridad.php");
            ?>
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

<link href='../images/iconoutc.ico' rel='icon' type='image/x-icon' />
<script src="../js/jquery.min.js"></script>
<script src="../js/responsiveslides.js"></script>

<link rel="stylesheet" href="../css/login.css">




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
					<span class="bold"> <span style="color: white; font-size: 16px"> <?php echo $_SESSION['usuario'];?></span>
					</span><br>[ <a id="" href="../cerrar.php" style="color: red;">Cerrar						sesion</a> ]
			<br><br><br>
				</div>	
        </div>
     
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
			<span style="color: black; font-size: 20px"><?php echo $_GET['nombreMes']?></span>
		</center>
		<br>
		<div class="content">
			<div class="login"
				style="height: 550px; width: 500px; background: #F0EFED;">
				<h1>SUBIR ARCHIVO</h1>
<br>
				<form method="post" action="" enctype="multipart/form-data">
					<table>
						<tr>
							<td><label>TITULO:</label></td>
							<td><input type="text" required placeholder="Titulo  :"
								name="titulo"><br>
							<br></td>
						</tr>

						<tr>
							<td><label>FECHA DE SUBIDA </label></td>
							<td align="center"><input type="date" required placeholder="fecha de subidad"
									name="fechasubida"" class="form-control" ><br>
							<br></td>
						</tr>
						
							<tr>
							<td><label>FECHA DE SUBIDA </label></td>
							<td align="center"> 	<div class="col-lg-6 ">											
                           <select  name="tipoarchivo" class="form-control " required="required" >
                               <option value="">Elija</option>
                               <option value="Informe semanal">Informe semanal</option>
                                <option value="Informe Mensual">Informe Mensual</option>
                               <option value="Informe Mensual">Solicitud</option>
                               </select>
								</div>
							<br></td>
						</tr>
						<tr>

							<td colspan="2"><br> <label>NOMBRE ARCHIVO PDF</label> <input
								type="file" name="archivo"></td>

							<td>
					
						</tr>
						
						<tr>
						<br>
							<td> <br><br><label>HORAS REALIZADAS:</label></td>
							<td><br><input type="text" required placeholder="ingrese las horas  :"
								name="horas"><br>
							<br>
							<br>
							<br></td>
						</tr>
					</table>
					<br>
					<center>
						<input align="center" type="submit" value="subir" name="subir"
							style="width: 144px;"><br>
						<br> <br>
						<a href="carpetapersonal.php"><button type="button"
								class="btn btn-warning">Ir A Carpeta Personal</button></a><br>
						<br>

					</center>


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