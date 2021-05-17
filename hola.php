  
<?php 
session_start();
error_reporting(0);
$varsesion=$_SESSION['nombre'];

/* 
Se valida que exista la sesión; está fue enviada desde la página PHP login.php 
*/

if ($varsesion==null || $varsesion='' ) {
echo "no autorizado";
   header("location:inicio_sesion.php");
die();
} 



/* 
Es necesario conectarse a la base de datos para validar que el usuario que ingresa es administrador y no un cliente
luego se valida que el usuario exista; en dado caso que no exista se reenvia a la página de inicio de sesión 

*/
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="tfg-bd";

	try {
		$conexion = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
		if ($conexion->connect_errno >0) {
			die("Error no se pudo conectar a la BD");
		}

	//Se guarda la sesión en la variable sesion_actual

	$sesion_actual=$_SESSION['nombre'];
$sql = "SELECT * FROM `usuarios` WHERE user = '$sesion_actual'"; //Se crea la consulta si existe el usuario en la tabla administradores
$result = $conexion->query(	$sql); //Se envía la consulta a la Base de datos
	
//Se valida que haya un registro  si no hay; desconecta la sesión y reenvia al login
if (!($result->num_rows > 0)) {
	echo "no autorizado";
  header("location:inicio_sesion.php");  //Se redirige a inicio de sesión 
die();
}

	} catch (\Throwable $th) {
	    echo("No se pudo conectar: $th");
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
<!-- <?php 
echo  "<h1 style=background:#fff;>esto es header ingresado con PHP  </h1>";
echo "<h1 style=background:#fff;> You are now logged in as: ".$_SESSION['nombre']."</h1><br>";
 ?> -->


 


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



