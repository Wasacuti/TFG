  
<?php 
session_start();
//error_reporting(0);
$varsesion=$_SESSION['nombre'];
include_once('Conexion_bd.php');
if ($varsesion==null || $varsesion='' ) {
echo "no autorizado";
   header("location:inicio_sesion.php");
die();
}
echo $varsesion;
 
 
 ?>

 
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilosIndex.css" type="text/css">
		
		
		

		
		<meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
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

 <?php 
echo  "<h1 style=background:#fff;>esto es header ingresado con PHP  </h1>";
echo "<h1 style=background:#fff;> You are now logged in as: ".$_SESSION['nombre']."</h1><br>";
 ?> 


<div class="encabezado">

Productos disponibles

</div>
 


<div class="grid-productos">
	
<?php
$sql = "select productos.id_producto, marca.marca_nombre,productos.modelo, productos.descripcion,productos.imagen, productos.precio from productos inner join marca on productos.marca_id=marca.id_marca WHERE inventario=1"; //Esta consulta para consultar los productos en la BD

$result = $conexion->query(	$sql); //Se envía los datos a la BD
$fila=0;

//print_r(mysqli_fetch_array($result));
// echo("<script>console.log('".$fila['marca_nombre']."')</script>");
	// echo("<script>console.log('".$fila['modelo']."')</script>");
	// echo("<script>console.log('".$fila['descripcion']."')</script>");
	// echo("<script>console.log('".$fila['imagen']."')</script>");


while($fila=mysqli_fetch_array($result)){
	
	?>
	



	
<div class="caja-prod"> 
<img src="<?php echo ($fila['imagen'])?>" alt="lenovo socio comercial">
<h1><?php   echo ($fila['marca_nombre']." ". $fila['modelo'] )    ?></h1>
<p> <?php   echo ($fila['descripcion'])    ?></p>
<p> <?php   echo "<p style=text-align:center;>₡". ($fila['precio']) ."</p>"   ?></p>
				
						

					
<!-- ($fila['modelo'] ) ?> -->
<!-- ($fila['descripcion'])  -->

<form action="validar_compra.php" method="post">
	<input type="hidden" name="id_producto" value="<?php  echo openssl_encrypt($fila['id_producto'], ENCRIPTADO, LLAVE)  ?> ">
 <input type="hidden" name="marca" value="<?php  echo openssl_encrypt($fila['marca_nombre'], ENCRIPTADO, LLAVE)  ?> ">
 <input type="hidden" name="modelo"  value="<?php  echo openssl_encrypt($fila['modelo'], ENCRIPTADO, LLAVE) ?>  ">   
 <input type="hidden" name="descripcion"  value="<?php echo  openssl_encrypt($fila['descripcion'], ENCRIPTADO, LLAVE)   ?>">
 <input type="hidden" name="precio"  value="<?php echo  openssl_encrypt($fila['precio'], ENCRIPTADO, LLAVE)   ?>">


<button class="btn" type="submit"> Comprar</button>
		</form>			 



</div>












<?php


}






?>
	
</div>




















<footer class="footie"> Todos los derechos reservados hecho por Emanuel Lopez</footer>
</body>

<?php  

print_r($_POST) ;




 ?>

<script src="validaciones.js" ></script>
</html>