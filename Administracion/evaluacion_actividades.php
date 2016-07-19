<?php 
include ("../seguridad/seguridad.php");
 include("../conex.php");
       $cad="select * from evalucionactividad";
       $rs=mysql_query($cad,$conex);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Evaluacion de Actividades</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body style="background-image: url('imgen1.jpg');" >

        <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" >Proyectos de vinculacion</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-info" style="color: white;"   href="/vinculacion/inicio.php">Inicio</a></li>
                <li><a class="btn btn-info" style="color: white;"  href="insertar_evaluacion_actividad.php">Nueva Evaluacion Actividad</a></li>
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
             
      <br><br><br><br><br><br><br>
      <div class="container">

      <div class="row">
            <div class="col-lg-12 text-center">
              <h1 class="well">Evaluacion de Actividades</h1>
            </div>
          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th >Descripcion Actividad</th>
              <th>Indicador</th>
              <th>Evidencia</th>
              <th>Meta</th>
              <th>Cumplimiento</th>
              <th>%cumplimiento</th>
              <th>Actividades de Mejora</th>
              <th colspan="2" class="text-center">Acciones</th>
            </tr>
          </thead>
          <?php 
            while ($fila=mysql_fetch_array($rs)) {
           ?>
           <tr>
             
             <td><?php echo $fila['descripcionactividadEva']; ?></td>
             <td><?php echo $fila['indicadorEva']; ?></td>
             <td><?php echo $fila['evidenciaEva']; ?></td>
             <td><?php echo $fila['metaEva']; ?></td>
             <td><?php echo $fila['cumplimeintoEva']; ?></td>
             <td><?php echo $fila['%cumplimientoEva']; ?></td>
             <td><?php echo $fila['recomendacionesEva']; ?></td>
             <td class="text-center"><a href="editar_evaluacion_actividad.php?idEva=<?php echo $fila['idEva'];?>& 
            descripcion=<?php echo $fila['descripcionactividadEva'];?>&
            indicador=<?php echo $fila['indicadorEva'];?>&
             evidencia=<?php echo $fila['evidenciaEva'];?>&
             meta=<?php echo $fila['metaEva'];?>&
             cumplimiento=<?php echo $fila['cumplimeintoEva'];?>&
             %cumplimiento=<?php echo $fila['%cumplimientoEva'];?>&
             recomendaciones=<?php echo $fila['recomendacionesEva'];?>" class="btn btn-info">Modificar</a></td>
             <td class="text-center"><a href="proceso_eliminar_actividad.php?idEva=<?php echo $fila['idEva']; ?>" class="btn btn-warning" onclick="return confirm('Esta seguro que desea eliminar está Evaluación de Actividad')">Eliminar</a></td>
           </tr>
           <?php 
              }
            ?>
          <tbody>
            
          </tbody>
        </table>
      </div>

<footer>
		<div class="container" style="text-align: center; background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
			<h3></h3>
			<h3>2016</h3>
		</div>
	</footer>


       

       

        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>
