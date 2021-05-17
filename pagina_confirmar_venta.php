  
<?php 
// session_start();
//error_reporting(0);
include_once('Conexion_bd.php');
include_once('validar_compra.php');

 
 ?>

 
<!DOCTYPE html>
<html>
    <head>
       
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>productos con bootstrap</title>
		<link rel="stylesheet" href="estilosIndex.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
		
	
        <title>Distribuciones DPA</title>
    </head>
    <body id="fondoimagen">
        
        <h1></h1>
        
<!-- 
Se llama a la función verificar de javascript una vez que haya cargado completamente la página.
 -->

<div>


	<nav id="menu" >
	<!-- 
	<input type="checkbox" name="" id="check">
	<label for="check" id="checkbtn">
	<i class="fa fa-bars"></i>
	
	</label> -->
	<a href="#" class="boton-responsive" id="boton-bar">
          <span class="barra"></span>
          <span class="barra"></span>
          <span class="barra"></span>
		  <span class="barra"></span>
        </a>

		

	




		<a href="index.php"><img src="imagenes/logo2.png" alt="icono"id="icono"></a>
		

		<div class="menu-extensible">
		 <ul >
		<li class="nivel1" ><a href="hola.php">Inicio</a></li>
		<li class="nivel1" ><a href="#">Acerca de nosotros</a></li>
			<li class="nivel1"><a href="#">Productos</a>
						
			</li>
		<!-- 	<li class="nivel1" ><a href="#">Servicios</a></li> -->
			
			<li class="nivel1" ><a href="#">Contáctanos</a></li>
						<li class="nivel1" ><a href="inicio_sesion.php">Iniciar sesión</a></li>
						


				</div>		


		

	</nav>

</div>


<?php while($fila=mysqli_fetch_array($carrito)){
	echo "HOLA";

}
	?>


 






<?php 
//Si se quiere imprimir el nombre de la persona que esta en linea
//echo "<h1 style=background:#fff;> You are now logged in as: ".$_SESSION['nombre']."</h1><br>";
 ?>


<div class="encabezado">

Confirmar compra

</div>

<div>
	<table class="table table-light table-bordered">
		<tbody>
			<tr>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Cantidad</th>
				<th>Precio</th>
			</tr>

			<tr>
				<td>Marca</td>
				<td>Modelo</td>
				<td>Cantidad</td>
				<td>Precio</td>
			</tr>

			<tr>
				<td>Marca</td>
				<td>Modelo</td>
				<td>Cantidad</td>
				<td>Precio</td>
			</tr>
			<tr>
				<td colspan="3" align="right"><h3>Total </h3></td>
				<td><h3>400000 </h3></td>
				
			</tr>



		</tbody>
	</table>
		
</div>





 <div class="row" style>
	<!-- Este es el condigo PHP para solicitar productos de la BASE DE DATOS -->
	<?php
$sql = "select marca.marca_nombre,productos.modelo, productos.descripcion,productos.imagen from productos inner join marca on productos.marca_id=marca.id_marca WHERE inventario=1"; //Esta consulta para consultar los productos en la BD

$result = $conexion->query(	$sql); //Se envía los datos a la BD
$fila=0;
//Esto era para hacer pruebas para ver si se reciben los datos de la BD
//print_r(mysqli_fetch_array($result));
// echo("<script>console.log('".$fila['marca_nombre']."')</script>");
	// echo("<script>console.log('".$fila['modelo']."')</script>");
	// echo("<script>console.log('".$fila['descripcion']."')</script>");
	// echo("<script>console.log('".$fila['imagen']."')</script>");


while($fila=mysqli_fetch_array($result)){
	
	?>


	<!-- Aqui termina la consulta PHP -->














 
<div class="col-md-4">



	<div class="card text center">
		<img class="card-img-top" src="<?php echo ($fila['imagen'])?>" alt="">
		<div class="card-body" style="height: 300px;">
			<h5 class="card-title"><?php   echo ($fila['marca_nombre']." ". $fila['modelo'] )    ?></h5>
			<p class="card-text"><?php   echo ($fila['descripcion'])    ?></p>
		</div>
	</div>
	</div>

	
	<?php

}


?>



</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<footer class="footie"> Todos los derechos reservados hecho por Emanuel Lopez</footer>
</body>
<script src="validaciones.js" ></script>
</html>