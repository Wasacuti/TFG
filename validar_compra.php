		<?php 
		
		session_start();
		error_reporting(0);
		$varsesion=$_SESSION['nombre'];
		
		if ($varsesion==null || $varsesion='' ) {
		echo "no autorizado";
  		 header("location:inicio_sesion.php");
		die();
				}
echo $varsesion;
 
		include_once('Conexion_bd.php');
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
			//echo "Se recibieron los datos correctos";
		}else {
			//echo "Hubo un error en la recepción de la información";
			$error=1;
		}


		$productos_cliente=array( "ID"=>$id , 
			"Marca" => $marca, 
			"Modelo"  => $modelo, 
			"Descripcion"  => $descripcion, 
			"Precio"  => $precio,


					 );


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
		
		//Aquí recibimos la Imagen del producto de la BD.

		$sql = "SELECT imagen FROM `productos` WHERE id_producto='$id'" ; 
		$resultado = $conexion->query(	$sql); //Se envía los datos a la BD
		while($fila=mysqli_fetch_array($resultado)){
			$imagen=$fila['imagen'];
		}


		?>



		<div class="encabezado">

		Confirmar pedido


		<?php echo "<h1>".$varsesion."</h1>"; ?>
	

		</div>
			


			





		</div>

	<!-- A continuación, se muestra la tabla del producto que desea comprar.  -->



		<div>
		<table class="table table-light table-bordered">
		<tbody>
		<tr>
		<th>Imagen</th>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Descripción</th>
		<th>Precio</th>
<!-- El siguiente código valida que tenga algo el ARRAY -->

			<?php 


			if ($error==1) {
				echo("<script>alert ('no hay productos agregados')</script>");
				?>


			 


			 <div class="alert alert-danger" role="alert">
  				No hay productos agregados <a href="./pagina-productos.php" class="alert-link">Ver productos disponibles</a>.
				</div>

						<?php 
}


 ?>








		</tr>

				<tr>
				<td width="15%">  <img class="w-100"  src=   <?php   echo $imagen;    ?>   ></td>
				<td width="15%"><?php   echo $productos_cliente['Marca'];    ?></td>
				<td width="15%"><?php echo $productos_cliente['Modelo'];  ?></td>
				<td width="15%"><?php  echo $productos_cliente['Descripcion']; ?></td>
				<td width="15%"><?php echo "₡".$productos_cliente['Precio'];  ?></td>
				</tr>

			<tr>
			<td colspan="4" align="right"><h3>Total </h3></td>
			<td><h3>   <?php echo "₡".$productos_cliente['Precio'];  ?>    </h3></td>

			</tr>
			<tr>
			<td colspan="5" align="right">
							<form action="ingresar_venta_BD.php" method="post" accept-charset="utf-8">
								


						<input type="hidden" name="id_producto" value="<?php  echo openssl_encrypt($id, ENCRIPTADO, LLAVE)  ?> ">
	 					<input type="hidden" name="marca" value="<?php  echo openssl_encrypt($marca, ENCRIPTADO, LLAVE)  ?> ">
	 					<input type="hidden" name="id_cliente" value="<?php  echo openssl_encrypt($_SESSION['nombre'], ENCRIPTADO, LLAVE)  ?> ">
						


								<button type="submit" class="btn btn-primary btn-lg btn-block">Realizar pedido</button>
							</form>


				

			</td>
			
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