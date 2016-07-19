	 <?php
	 include_once '../config.inc.php';
?>          

                                     
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
<link rel="stylesheet" href="css/zerogrid.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/responsiveslides.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">

<link href='./images/iconoutc.ico' rel='icon' type='image/x-icon' />
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.js"></script>

<link rel="stylesheet" href="css/login.css">

</head>
<body style="background-image: url('images/fondo.jpg') ;">

	<!--------------Header--------------->
<header>
		<div class="wrap-header zerogrid">
			<div id="logo" style="font: 14px/25px Arial, Helvetica, sans-serif;">
				<img src="./images/portafolio.png"
					style="height: 116px; width: 555px;" /> 
			</div>

			<div id="search">

				<div class="loginDisplay">
					<img src="./images/perfil.png" style="height: 30px; width:30px;" />
					<span class="bold"> <span style="color:black; font-size:16px "> <?php echo $_SESSION['usuario'];?></span>
					</span><br>[ <a id="" href="cerrar.php" style="color: red;">Cerrar sesion</a>
					]

				</div>
			</div>
		</div>

	</header>

	<nav>
		<div class="wrap-nav zerogrid">
			<div class="menu">
				<ul>
				<li class="first"><a href="portafolioUsuario.php">Home</a></li>
					<li ><a href="documentacion.php">Lista de Asignaturas</a></li>

				</ul>
			</div>

			
			<div class="share">
				<ul>
					<li><a href="#"><img src="images/twitter-icon.png"
							title="Twitter" /></a></li>
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
	<center><span style="color:cyan; font-size: 20px"><?php echo $_GET['nom']?></span></center>
			<br>
		<div class="content">
		<div class="login" style="height: 500px; width: 600px; background: #F0EFED; ">
			<h1>ACTUALIZAR ARCHIVO</h1>
		
            <form method="post" action="actualizarDoc.php" >
                <table>
                    <tr>
                 
                        <td><label>TITULO:</label></td>
                        <td><input type="text"  value="<?php echo $_GET['tit']?>" placeholder="Titulo  :" name="titulo"><br><br><br><br></td>
                    </tr>
                    
                    <tr>
                          <td><label>DESCRIPCION: </label></td>
                        <td  align="center"><input value="<?php echo $_GET['des']?>"  required placeholder="descripcion :" name="descripcion" style="height: 53px; width: 294px; "><br><br></td>
                    </tr>
                    <tr>
                    
                        <td colspan="2"><br>  
          
          <td> </tr>
                </table>
         
                <br>
          <center>
          <br><a  href="" ><button type="submit" class="btn btn-warning">Actualizar informacion</button></a><br><br>
          
                                    </center>    
            <input name="id" type="hidden" value="<?php echo $_GET['id']?> ">
       					
								</form>
								
							</div>
									
									<br>
									
									<br>
									
							</div>

							<div class="box">
								<div class="heading">
							<br>
							<br>
								</div>
								<div class="content">
							
									</div>
									<div class="post">
							
							
									</div>
									<div class="post">
							
							
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--------------Footer--------------->
	<footer>
		<div class="wrap-footer">
			<div class="copyright" style="height: 79px;">
				<br>
			<p>Copyright @ 2015 - Portafolio Estudiantil by Ingenieria de software I</p>
			
			</div>
		</div>
	</footer>

</body>
</html>