	
	<?php 


include_once('Conexion_bd.php');


$id_producto=$_POST["id_producto"];
$id_cliente=$_POST["id_cliente"];


$id_producto=openssl_decrypt($id_producto, ENCRIPTADO, LLAVE);
$id_cliente=openssl_decrypt($id_cliente, ENCRIPTADO, LLAVE);

echo $id_producto."<hr><hr><br>".$id_cliente;


 //echo Obtener_ID_cliente($id_cliente);
			




			$sql_obtener_id_cliente = "SELECT id_cliente FROM `clientes` WHERE correo_cte='$id_cliente'";
			$resultado = $conexion->query($sql_obtener_id_cliente);

		


	if ($resultado->num_rows > 0) {
	    // Se valida si hay algún registro en la tabla administradores
	    // echo "holaaaa son las 3:12";
	    	 while ($row = $resultado->fetch_assoc()) {
		           $data[] = $row;
		    }
		    	

		    foreach ($data as $i ) { 

		    		$id_cliente=$i['id_cliente'];
	// echo "<hr><br> Este es el ID CLIENTE: ".$id_cliente;
		    	}

	    }


			$sql_pedidos =	"INSERT INTO `pedidos` (`cliente_id`, `fecha`) VALUES ( '$id_cliente', current_timestamp())";
			$result = $conexion->query(	$sql_pedidos);
			echo "llegue aqui";










			// $errorLogin="Datos ingresados correctamente";
			// include_once('validar_compra.php');
			// header("location:validar_compra.php?respuesta=1");







	?>
