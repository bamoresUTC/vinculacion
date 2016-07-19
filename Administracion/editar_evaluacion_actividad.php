            <?php
include ("../seguridad/seguridad.php");
 include("../conex.php");
   

$ideva = $_GET['idEva'];


?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Proyectos</title>
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
            <a href="" class="navbar-brand" style="color: white;" >Evaluacion de Actividades</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-info" style="color: white;"   href="/vinculacion/Administracion/evaluacion_actividades.php">Volver</a></li>
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

	<div class="container" >

	<div class="row">
	<br>
       <div class="panel panel-info" style="text-align: center;">
       
       <h1 class="">Modificar Evaluacion de Actividades</h1>

       </div>
          </div>
<br>
          <table class="table table-condensed">
          <thead>
            <tr class="success">
             <th >Descripcion Actividad</th>
              <th>Indicador</th>
              <th>Evidencia</th>
              <th>Meta</th>
              <th>Cumplimiento</th>
              <th>%Cumplimiento</th>
              <th>Actividades de Mejora</th>
                  <th colspan="1" class="text-center">Accion</th>
            </tr>
          </thead>
        
        	<?php $rs=mysql_query("select * from evalucionactividad where idEva='$ideva' ",$conex);?>	
          <?php 
            while($fila=mysql_fetch_array($rs)) {
           ?>
           <tr>
           <form method="post" action="proceso_editar_actividad.php">
             <input type="hidden" name="idEva" value="<?php echo $fila['idEva'];?>"> 
             <td><input  name="descripcion" style=" width: 200px;" max="100" min="0"  type="text"  value="<?php echo $fila['descripcionactividadEva']; ?>"> </td>
             <td><input  name="indicador" style=" width: 200px;" max="100" min="0"  type="text"  value="<?php echo $fila['indicadorEva'];?>"> </td>
             <td><input  name="evidencia" style=" width: 200px;" max="100" min="0"  type="text"  value="<?php echo $fila['evidenciaEva'];?>"> </td>
             <td><input  name="meta" style=" width: 200px;" max="100" min="0"  type="text"  value="<?php echo $fila['metaEva'];?>"> </td>
             <td> <input name="cumplimiento" type="number"  style="width: 200px;" value="<?php echo $fila['cumplimeintoEva'];?>"> </td>
             <td> <input name="%cumplimiento" type="number" style="width: 200px;"  value="<?php echo $fila['%cumplimientoEva'];?>">  </td>
             <td><input  name="recomendaciones" style=" width: 400px;" max="100" min="0"  type="text"  value="<?php echo $fila['recomendacionesEva']; ?>"> </td>
             <td class="text-center"><button class="btn btn-info" type="submit" onclick="return confirm('Esta seguro que desea modificar')" >Guardar</button></td>
           </form>
           </tr>
           <?php 
              }
            ?>
          <tbody>
            
          </tbody>
        </table>
	
	
	<br>	<br><br><br>	<br><br><br><br>	
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