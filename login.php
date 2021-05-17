	<?php 
/*  Está página es para conectarse a la base de datos y validar que los datos del usuario en el formulario sean correctos 
	Se cargan datos de la base de datos: host, usuario, contraseña y nombre de la BD.
*/

	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="tfg-bd";

	/*  Se conecta a la BD con mysqli($dbhost,$dbuser,$dbpass,$dbname) con los parámetros y se valida los datos
*/
	try {
	    $conexion = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	/*Se valida que se haya conectado a la base de datos si no indica error "Error no se pudo conectar a la base de datos"
*/
	if ($conexion->connect_errno >0) {
		die("Error no se pudo conectar a la base de datos");
	}

	else{
		//	Se obtiene los datos del formulario con POST y el nombre de las variables en el formulario
	$nombre=$_POST["txt_user"];
	$pass=$_POST["txt_pass"];
		//	Se realiza la consulta a la base de datos
	$sql = "SELECT * FROM `usuarios` WHERE user = '$nombre' AND pass = '$pass'"; //Esta consulta es para la SESION Administradora
	$result = $conexion->query(	$sql); //Se envía los datos a la BD
	
	$sql_clientes= "SELECT * FROM `clientes` WHERE correo_cte = '$nombre' AND password_cte = '$pass'";//Esta consulta es para la Sesión clientes.
	$result_clientes = $conexion->query($sql_clientes); //Se envía los datos a la Base de datos tabla clientes


	if ($result->num_rows > 0) {
	    // Se valida si hay algún registro en la tabla administradores
	    session_start();
	    $_SESSION['nombre']=$nombre;
	 header("location:hola.php");

	    }
		elseif ($result_clientes->num_rows > 0) {
			// Se valida si hay algún registro en la tabla clientes
			session_start();
	    $_SESSION['nombre']=$nombre;
	 header("location:pagina-productos.php");
		}


	else {
		// Se reenvia al inicio de sesión debido a que los datos no son correctos.
		$errorLogin="Error al ingresar";
		include_once('inicio_sesion.php');
		header("location:inicio_sesion.php?error=1");
	   
	}

	}

	} catch (\Throwable $th) {
	    echo("No se pudo conectar: $th");
	}

	?>