<?php 
include_once('Conexion_bd.php');
session_start();
//error_reporting(0);
$varsesion=$_SESSION['nombre'];
$id=$_POST["id_producto"];
$marca=$_POST["marca"];
$modelo=$_POST["modelo"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];
$carrito[]=[];

$marca=openssl_decrypt($marca, ENCRIPTADO, LLAVE);
$modelo=openssl_decrypt($modelo, ENCRIPTADO, LLAVE);
$descripcion=openssl_decrypt($descripcion, ENCRIPTADO, LLAVE);
$id=openssl_decrypt($id, ENCRIPTADO, LLAVE);
$precio=openssl_decrypt($precio, ENCRIPTADO, LLAVE);


if ($marca & $modelo & $descripcion &  $id & $precio ) {
	// echo "<h1>Datos correctos </h1><br>";
	// echo $marca.$modelo.$descripcion;
	// echo "<br> <br><hr>".$varsesion."<hr><br><br>";



echo "<br> <br>".$id;
echo $varsesion;
}else {
	echo "algo raro sucedio";
}


if (!isset($_SESSION["carrito"])) {
	$productos_cliente=array( "ID"=>$id , 
									"Marca" => $marca, 
									"Modelo"  => $modelo, 
									 "Descripcion"  => $descripcion, 
									 "Precio"  => $precio,


			);


	$_SESSION["carrito"][0]=$productos_cliente;


}

else   {

$productos_cliente=array( "ID"=>$id , 
									"Marca" => $marca, 
									"Modelo"  => $modelo, 
									 "Descripcion"  => $descripcion, 
									 "Precio"  => $precio,


			);


	$_SESSION["carrito"][count($_SESSION["carrito"])]=$productos_cliente;

}

$carrito[]=$_SESSION["carrito"];


// echo "carrito <br><br>";
//  print_r($carrito);





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



	
	



<?php 
//Si se quiere imprimir el nombre de la persona que esta en linea
//echo "<h1 style=background:#fff;> You are now logged in as: ".$_SESSION['nombre']."</h1><br>";
//aquí recibimos la Imagen del producto de la BD.

$sql = "SELECT imagen FROM `productos` WHERE id_producto='$id'" ; 
$resultado = $conexion->query(	$sql); //Se envía los datos a la BD
while($fila=mysqli_fetch_array($resultado)){
$imagen=$fila['imagen'];
}


 ?>



<div class="encabezado">

Confirmar compra

</div>



<div class="row" style>
	<!-- Este es el condigo PHP para solicitar productos de la BASE DE DATOS -->
	<?php

foreach ($_SESSION["carrito"] as $indice => $productos_cliente)
 {		
	?>


	<!-- Aqui termina la consulta PHP -->














 
<div class="col-md-11">



	<div class="card text center">
		<img class="card-img-top" src="<?php echo $imagen?>" alt="">
		<div class="card-body" style="height: 400px;">
			<h5 class="card-title"><?php   echo $productos_cliente['Modelo']. " ". $productos_cliente['Marca'];   ?></h5>
			<p class="card-text" ><?php   echo  $productos_cliente['Descripcion'];    ?></p>
			<p class="card-text" ><?php   echo  "₡".$productos_cliente['Precio'];    ?></p>
			<button class="btn" class="btn-block"> Realizar el pedido</button>
		</div>
	</div>
	</div>

	

	<?php

}


?>



</div>




<div>
	<table class="table table-light table-bordered">
		<tbody>
			<tr>
				<th>Imagen</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Cantidad</th>
				<th>Precio</th>
			</tr>
			<?php 

foreach ($_SESSION["carrito"] as $indice => $productos_cliente)
 {			?>

			<tr>
				<td class="w-25">  <img class="w-25"  src=   <?php   echo $imagen;    ?>   ></td>
				<td><?php   echo $productos_cliente['Marca'];    ?></td>
				<td><?php echo $productos_cliente['Modelo'];  ?></td>
				<td><?php  echo $productos_cliente['Precio']; ?></td>
				<td><?php echo $productos_cliente['Precio'];  ?></td>
			</tr>


<?php 
}

 ?>
			
			<tr>
				<td colspan="3" align="right"><h3>Total </h3></td>
				<td><h3>400000 </h3></td>
				
			</tr>



		</tbody>
	</table>
		
</div>





 

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<footer class="footie"> Todos los derechos reservados hecho por Emanuel Lopez</footer>
</body>
<script src="validaciones.js" ></script>
</html>