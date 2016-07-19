<?php


include ("../seguridad/seguridad.php");

include("../conex.php");
require_once ("../PHPPaging.lib/PHPPaging.lib.php");
$pagina = new PHPPaging ();

?>
<?php
$emails = $_SESSION ['email'];

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
		<div class="content" align="center">
			<div align="center" style="height: 540px; width: 960px">
				<div class="well well-small" align="left">
					<center>
						<h3 style="color: #FFB700; font-family: fantasy;">CARPETA    PERSONAL</h3>
					</center>
					<center>
						<table>				
 
		
        
        <?php
$pagina->agregarConsulta ( "SELECT * FROM usuario U ,carpetapersonal C WHERE U.idUsu=C.idUsu and  emailUsu='$emails'" );
$pagina->ejecutar ();
while ( $res = $pagina->fetchResultado () ) {
	?> 
        
	            <tr>
	            
								<td align="center"><a
									href="materiasportafolioDoc.php?idCarp=<?php echo $res['idCarp']?> & nombreCarp=<?php echo $res['nombreCarp']?>"><img
										src="../images/carpeta.png" style="height: 80px; width: 140px;" /></a>
								<input type="hidden" name="idCarp" value="<?php echo $datos['idCarp']?>">
								</td>

								<td align="center" rowspan="2"><br> 
								
		 				<?php if (!	isset($_SESSION['usuarioT'])) {?>
		 				
								<a	href="nombreportafolioDoc.php?idCarp=<?php echo $res['idCarp']?> & nombreCarp=<?php echo $res['nombreCarp']?>">
									<button type="button" class="btn btn-primary">Agregar Mes</button></a>
				
	
									 <?php } ?>
									
									</td>

							</tr>
							<tr>
														
								<td align="center"><label style="font-size: 15px;">	<span style="color:black;" ><?php echo $res['nombreCarp']; ?></span></label> 
			</td>
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

		</div>
	

<footer>
		<div class="container" style="text-align: center; background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
			<h3></h3>
			<h3>2016</h3>
		</div>
	</footer>

</body>
