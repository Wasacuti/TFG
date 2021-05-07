<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body class="imgback">
      
<section class="container-fluid ">
  <section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3">
<?php 
if (isset($errorLogin)) {
  echo "$errorLogin";
  
}

 ?>

<form action="registro.php" method="post" class="form-container-registro" >


<h2 class="text-center">Regístrate</h2>

<div class="form-group">
  <label for="">Nombre completo</label>
  <input type="text" name="txt_nombre" id="" class="form-control" placeholder="Nombre completo" aria-describedby="helpId">
  <small id="helpId" class="text-muted"></small>
</div>


<div class="form-group">
  <label for="">correo electrónico</label>
  <input type="text" name="txt_correo" id="" class="form-control" placeholder="Correo" aria-describedby="helpId">
  <small id="helpId" class="text-muted"></small>
</div>

    <div class="form-group">
      <label for="">Contraseña</label>
      <input type="password" class="form-control" name="txt_pass" id="" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="">Teléfono</label>
      <input type="number" class="form-control" name="txt_tel" id="" placeholder="teléfono">
    </div>
    
    <div class="form-group">
      <label for="">Dirección</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="txt_direcion" rows="2" placeholder="dirección exacta"></textarea>


      <!-- <input type="password" class="form-control" name="txt_direcion" id="" placeholder="Dirección exacta"> -->
    </div>






    <?php 
if (isset($_GET['error'])==true) {
 
  $error_login=$_REQUEST["error"];
switch ($error_login) {
  case '1':
    echo '<p>Favor ingresar todos los datos</p>';
    break;

    case '2':
      echo '<p>Datos incompletos favor llenar todos los campos con mayor de 8 digitos</p>';
      break;

      case '3':
        echo '<p>Favor ingrese un correo valido</p>';
        break;
        case '4':
          echo '<p>Correo ya se encuentra registrado</p>';
          break;
          case '5':
            echo '<p>Datos guardados correctamente.</p>';
            break;
  
  default:
    echo 'Algo malo paso';
    break;
}
  
  

}



 ?>
<button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>

<br>
<a href="#">
   <input type="button" class="btn btn-primary btn-block" value="Regístrate" />
</a>

</form>





</section>
</section>
</section>






        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>