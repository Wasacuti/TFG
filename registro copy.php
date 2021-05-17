	
	<?php 
$nombre=$_POST["txt_nombre"];
$correo=$_POST["txt_correo"];
$password=$_POST["txt_pass"];
$password_confirmar=$_POST["txt_pass_confirmar"];
$tel=$_POST["txt_tel"];
$direccion=$_POST["txt_direcion"];
$validador=true;

if (!isset($_REQUEST['check'])) {
	$errorLogin="Error al ingresar";
	include_once('Registrar_usuario.php');
	header("location:Registrar_usuario.php?error=5");	
	$validador=false;		  
  }


echo $nombre. $correo. $password. $tel. $direccion;



if (empty($nombre) || empty($correo) || empty($password) || empty($tel) || empty($direccion) ) {
 		$errorLogin="Error al ingresar";
 		include_once('Registrar_usuario.php');
 		header("location:Registrar_usuario.php?error=1");	
		 $validador=false;		 
}

if (strlen($nombre)<8 || strlen($correo)<8 || strlen($password)<8|| strlen($tel)<8 || strlen($direccion)<8 ) {
	$errorLogin="Error al ingresar";
	include_once('Registrar_usuario.php');
	header("location:Registrar_usuario.php?error=2");	
	$validador=false;		 
}


if (!filter_var($correo,FILTER_VALIDATE_EMAIL) ) {
	$errorLogin="Error al ingresar";
	include_once('Registrar_usuario.php');
	header("location:Registrar_usuario.php?error=3");	
	$validador=false;		 
}


if ($password !=$password_confirmar ) {
	$errorLogin="Error al ingresar";
	include_once('Registrar_usuario.php');
	header("location:Registrar_usuario.php?error=6");	
	$validador=false;		 
}








if ($validador) {


		$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="tfg-bd";
	try {
	    $conexion = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if ($conexion->connect_errno >0) {
		echo("hola");
		die("Error no se pudo conectar a la BD");
	}
	else{
	 	$sql = "SELECT * FROM `clientes` WHERE correo_cte = '$correo'";
 		$result = $conexion->query(	$sql);	
		 if ($result->num_rows > 0){
			$errorLogin="Error al ingresar";
			include_once('Registrar_usuario.php');
			header("location:Registrar_usuario.php?error=4");	
			$validador=false;

		 }
		 else{
			

			
			$sql =	"INSERT INTO `clientes` (nombre_cte, correo_cte,password_cte,telefono_cte,direccion_cte) VALUES ('$nombre','$correo','$password',$tel,  '$direccion' )";
			$result = $conexion->query(	$sql);
			$errorLogin="Datos ingresados correctamente";
			include_once('Registrar_usuario.php');
			header("location:Registrar_usuario.php?error=7");

		 }


	}




	} catch (\Throwable $th) {
	    echo("No se pudo conectar: $th");
	}







}



	?>