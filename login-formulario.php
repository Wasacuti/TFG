


<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
         <title>Login</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilos.css">

    </head>
     <body class="bg-fondo">
    <section class="container-fluid ">
  <section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3">
  
   
<?php 
if (isset($errorLogin)) {
  echo "error $errorLogin";
}

 ?>

<form action="login.php" method="post" class="form-container">


<h2 class="text-center">LOGIN</h2>



<div class="form-group">
  <label for=""></label>
  <input type="text" name="txt_user" id="" class="form-control" placeholder="Username" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>
    <div class="form-group">
      <label for=""></label>
      <input type="password" class="form-control" name="txt_pass" id="" placeholder="Password">
    </div>


<section class="container-fluid ">
  <section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3">

    <?php 
if (isset($_GET['error'])==true) {
  echo '<p>usuario o clave incorrecta</p>';

}



 ?>
<button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>

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