<?php 
session_start();
error_reporting(0);
$varsesion=$_SESSION['nombre'];


if ($varsesion==null || $varsesion='' ) {
echo "no autorizado";
   header("location:index.php");
die();
}


 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilosIndex.css" type="text/css">
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

			<li class="nivel1"><a href="#">productos</a>
						<ul  class="nivel2"><li  ><a  href="#">Computadoras de escritorio</a></li>
								<li ><a href="Paraiso-Escondido.jsp">Laptops </a></li>
								<li ><a href="Regresiones-Oceanicas.jsp">Suministros de oficina  </a></li>
                                                                <li ><a href="#">Agregar producto  </a></li>
                                                </ul>
			</li>
			<li class="nivel1" ><a href="#">productos</a></li>
			<li class="nivel1" ><a href="#">iniciar sesión</a></li>
			<li class="nivel1" ><a href="#">Contactos</a></li>
						<li class="nivel1" ><a href="cerrar.php">Cerrar sesión</a></li>
						
						


		

	</nav>

</div>

 


<div class="contenido"><!-- 

Esta parte se crea para añadir las cajas de texto de la parte de abajo


 -->
	
	<div class="caja">
				
						<h1 id="cambiarColor1">	Punta Cacique Encantado </h1>
			<p>  Vive una experiencia única haciendo snorkeling, Relájese y disfrute en las playas del Golfo de Papagayo.
						<ul><li class="precios" type="text" id="precio1" value="150">Precios desde $150 por adulto.</li> </ul>
			 </p>
						

					<img src="imagenes/1.jpg" alt="">


					<a href="Cacique-Encantado.html" class="btn">Más detalles</a>

		</div>

		<div class="caja">
				

			<h1 id="cambiarColor2">	Playa paraiso escondido </h1>
			<p> Disfruta de andar en cuadraciclo en la playa, de hermosos miradores con vista al mar, en las playas del golfo de papagayo.
				<ul><li class="precios" type="text" id="precio2" value="100">Precios desde $100 por adulto.</li> </ul>

			 </p>
				
				<img src="imagenes/2.jpg" alt="">


					<a href="Paraiso-Escondido.html" class="btn">Más detalles</a>


		</div>
			
		<div class="caja">
				
					
			<h1 id="cambiarColor3">	Playa Regresiones Oceanicas </h1>
			<p> Disfruta de un tour todo incluido por las diferentes playas del golfo de papagayo fotos, y un delicioso almuerzo.
				<ul><li class="precios" type="text" id="precio3" value="200">Precios desde $200 por adulto.</li> </ul>

			 </p>
				
				<img src="imagenes/3.jpg" alt="">


					<a href="Regresiones-Oceanicas.html" class="btn">Más detalles</a>

			
				

		</div>
		
</div>






<footer class="footie"> Todos los derechos reservados hecho por Emanuel Lopez</footer>
</body>
</html>