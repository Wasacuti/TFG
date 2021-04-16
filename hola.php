  
<?php 
session_start();
error_reporting(0);
$varsesion=$_SESSION['nombre'];


if ($varsesion==null || $varsesion='' ) {
echo "no autorizado";
   header("location:inicio_sesion.php");
die();
}


 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilosIndex.css" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Distribuciones DPA</title>
    </head>
    <body id="fondoimagen">
        
        <h1></h1>
        
<!-- 
Se llama a la función verificar de javascript una vez que haya cargado completamente la página.
 -->

<div>


	<nav id="menu" >
		<a href="index.jsp"><img src="imagenes/logo2.png" alt="icono"id="icono"></a>
		
		 <ul >
		<li class="nivel1" ><a href="hola.php">Inicio</a></li>
		<li class="nivel1" ><a href="#">Acerca de nosotros</a></li>
			<li class="nivel1"><a href="#">Productos</a>
						<ul  class="nivel2"><li  ><a  href="#">Computadoras de escritorio</a></li>
								<li ><a href="#">Laptops </a></li>
								<li ><a href="#">Suministros de oficina  </a></li>
                                                                <li ><a href="#">Agregar producto  </a></li>
                                                </ul>
			</li>
		<!-- 	<li class="nivel1" ><a href="#">Servicios</a></li> -->
			
			<li class="nivel1" ><a href="#">Contáctanos</a></li>
						<li class="nivel1" ><a href="cerrar.php">Cerrar sesión</a></li>
						
						


		

	</nav>

</div>

 


<div class="contenido"><!-- 

Esta parte se crea para añadir las cajas de texto de la parte de abajo


 -->
	
	<div class="caja">
				
						<h1 id="cambiarColor1">	Laptops tradicionales</h1>
			<p>  • Laptop empresarial de 13,3" potenciada por Intel®
			<br>• Ultradelgada y ultraliviana
			<br>• Un nivel de conectividad excepcional
						
			 </p>
						

					<img src="imagenes/1.jpg" alt="">


					<a href="#" class="btn">Más detalles</a>

		</div>

		<div class="caja">
				

			<h1 id="cambiarColor2">	Estaciones de trabajo </h1>
			<p> • Pantalla táctil de 11.6" y 4 modos de uso
				<br>• Procesadores AMD de doble núcleo
				<br>• Batería de larga duración y excelente conectividad
				
			 </p>
				
				<img src="imagenes/2.jpg" alt="">


					<a href="#" class="btn">Más detalles</a>


		</div>
			
		<div class="caja">
				
					
			<h1 id="cambiarColor3">	Gaming  </h1>
			<p> •  Procesadores AMD Ryzen™ y gráficos NVIDIA
					<br>• Pantalla de 15.6" FHD
					<br>• Sistema de enfriamiento Coldfront 2.0
				<!-- <ul><li class="precios" type="text" id="precio3" value="200">Precios desde $200 por adulto.</li> </ul> -->

			 </p>
				
				<img src="imagenes/3.jpg" alt="">


					<a href="#" class="btn">Más detalles</a>

			
				

		</div>
		
</div>






<footer class="footie"> Todos los derechos reservados hecho por Emanuel Lopez</footer>
</body>
</html>