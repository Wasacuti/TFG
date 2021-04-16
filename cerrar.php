<?php 

session_start();


session_start();
$varsesion=$_SESSION['nombre'];


if ($varsesion==null || $varsesion='' ) {
echo "no autorizado";
//    header("location:login-formulario.html");
die();
}

session_destroy();
header("location:index.php");

 ?>