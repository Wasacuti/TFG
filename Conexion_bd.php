	<?php 
/*  Está página es para conectarse a la base de datos y validar que los datos del usuario en el formulario sean correctos 
	Se cargan datos de la base de datos: host, usuario, contraseña y nombre de la BD.
*/

	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="tfg-bd";
	define("LLAVE", "trabajotfg");
	define("ENCRIPTADO", "AES-128-ECB");




	/*  Se conecta a la BD con mysqli($dbhost,$dbuser,$dbpass,$dbname) con los parámetros y se valida los datos
*/
	try {
	    $conexion = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	/*Se valida que se haya conectado a la base de datos si no indica error "Error no se pudo conectar a la base de datos"
*/
	if ($conexion->connect_errno >0) {
		die("Error no se pudo conectar a la base de datos");
	} else{

		// echo ("<script> alert('Conectado correctamente')    </script>");
	}


	} catch (\Throwable $th) {
	    echo("No se pudo conectar: $th");
	}

	?>