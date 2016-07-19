<?php include ("../seguridad/seguridad.php");
include("../conex.php");
?>
<?php $ced=$_SESSION['cedulaUsuario'];

?>

<?php $_SESSION['imagen']=$img;?>

<DOCTYPE html>
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
<link href='../images/iconoutc.ico' rel='icon' type='image/x-icon' />
<link href='./images/iconoutc.ico' rel='icon' type='image/x-icon' />
<!--  <link rel="stylesheet" href="css/4_2.css" type="text/css" />
-->

<script src="../js/jquery.min.js"></script>
<script src="../js/responsiveslides.js"></script>
<script src="../js/sadesktop_all.min.js" type="text/javascript"></script>
<!--  <script type="text/javascript" src="js/4_2.min.js"></script>
-->

<script>
	$(function() {
		$("#slider").responsiveSlides({
			auto : true,
			pager : false,
			nav : true,
			speed : 500,
			maxwidth : 962,
			namespace : "centered-btns"
		});
	});
</script>

<body class="body2" >

	 <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" >Crear Carpeta personal  </a>
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
<br>
<br>

	<!--------------Content--------------->

	<br>
	<br>
	<br>
							<div class="content">
							<div class="login" style="height: 370px; width: 400px">
								<h1>CREAR CARPETA PERSONAL</h1>
	
		<br>
	
							
<br>
				<?php
    include '../config.inc.php';
    $db = new Conect_MySql ();
    $sql = "select * from usuario U,
    		 carrera C, unidadacademica UN,nivel N,proyecto P, matricula M, periodoacademico PA,horario HR,horas H
    		 where cedulaUsu='$ced' and U.idUsu=M.idUsu and UN.idUnid=M.idUnid and c.idCarr=M.idCarr and
    		 N.idNivel=M.idNivel and p.idPro=M.idpro and PA.idPeri=M.idPeri and HR.idHor=M.idHor and H.idH=M.idH";
    $query = $db->execute ( $sql );
    while ( $datos = $db->fetch_row ( $query ) ) {
        ?>
	
			
			
<form method="post" action="insertarPortafolio.php">
<input type="hidden" name="id" value= "<?php echo $datos['idUsu']; ?>">								
<input type="hidden" name="cedu" value= "<?php echo $datos['cedulaUsu']; ?>">
<input type="hidden" name="idmat" value="<?php echo $datos['idMat']; ?>">								
	
			
	
	
			
									<center>
								
								<p>
										<input type="text" name="nombre" value=""
											 required placeholder="Nombre de carpeta">
									</p>
								</center>
							
								
									<p class="submit">
									<center>
		
										<input type="submit" name="commit" value="Crear portafolio" style=" width: 262px; ">
	<br>
	<br>								
<a href="carpetapersonal.php"><button type="button" class="btn btn-primary">Ir A Portafolio</button></a>
								
									</center>
								
									</p>
									
									<p class="remember_me">
										<label>
										</label>
									</p>
		
								</form>
	
							<?php  } ?>
							</div>
							
							
							
							
							
							</div>
<br>
	<!--------------Footer--------------->
<footer>
		<div class="container" style="text-align: center; background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
			<h3></h3>
			<h3>2016</h3>
		</div>
	</footer>

</body>

</body>
</html>


<script>
	function ciclo(valor) {
		document.getElementById("ciclo").value = valor;
		//alert("hola mundo")
	}
</script>


<script>
	function periodo(valor) {
		document.getElementById("periodo").value = valor;
		//alert("hola mundo")
	}
</script>