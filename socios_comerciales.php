  
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
	

<div class="caja-prod"> 

<h1 >LENOVO</h1>
<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
				
						

					<img src="imagenes/Lenovo-Logo.png" alt="lenovo socio comercial">





					<!-- <a href="#" class="btn">Comprar</a> -->



</div>
<div class="caja-prod"> <h1 >DELL</h1>
			<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
						

					<img src="imagenes/dell-Logo.png" alt="dell socio comercial">

</div>
<div class="caja-prod"> <h1 >HP</h1>
<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
				
						

					<img src="imagenes/hp-Logo.png" alt="HP socio comercial">

</div>

<div class="caja-prod"> <h1 >LENOVO</h1>
			<p> En Lenovo, la innovación no es solo lo que hacemos, sino que forma parte de nuestro ADN. No solo nos convierte en lo que somos, sino que fluye a través de todo lo que hacemos, desde el smartphone que llevas en el bolsillo o las bombillas de tu casa inteligente hasta los servidores que tienes en tu centro de datos. Y mucho más.
			 </p>
						

					<img src="imagenes/Lenovo-Logo.png" alt="lenovo socio comercial">

</div>
<div class="caja-prod"> producto 5 </div>
<div class="caja-prod"> producto 6 </div>



	
</div>






<footer class="footie"> Todos los derechos reservados hecho por Emanuel Lopez</footer>
</body>
<script src="validaciones.js" ></script>
</html>