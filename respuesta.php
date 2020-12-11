<?php 
    session_start();
    $respuesta = $_SESSION['resultado'];
    $formato = "formato de imagen incorrecto, registro cancelado.";
    $exitoso = "Datos ingresados correctamente.";
    $duplicado = "Nombre de videojuego ya registrado anteriormente, valide la informacion.";
    $colorExitoso = "success";
    $colorErrorImagen = "danger";
    $colorDuplicado = "warning";

    switch($respuesta){
        case "1":
            $color = $colorExitoso;
            $mensaje = $exitoso;
        break;
    
        case "2":
            $color = $colorDuplicado;
            $mensaje = $duplicado;
        break;

        case "3":
            $color = $colorErrorImagen;
            $mensaje = $formato;
        break;
    }

?>

<!doctype html>
<html lang="es">
  <head>
    <title>Registro de video juegos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="estyles.css">
  </head>
  <header>
    <div class="fixed-top">
        <nav class="navbar navbar-dark bg-danger">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">Menu
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="collapse text-center" id="navbarToggleExternalContent">
            <div class="bg-danger p-2">
                <h5 class="text-white h4 text-center mb-4">Gestion de juegos</h5>
                <a href="formularioTitulos.php"><p class="text-warning"><u>Registrar un juego (titulo)</u></p></a>
                <a href="listadoTitulos.php"><p class="text-warning"> <strong><u>Listado de juegos (titulo) </u></strong> </p></a>
            </div>
        </div>
    
    </div>
  </header>
  <body class="text-white">
    <hr>
    <hr>
    <hr>
    <hr>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <h1 class="text-warning"><strong>TRANSACCION FINALIZADA</strong></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="alert alert-<?=$color?> text-center text-danger p-5" role="alert">
                    <p class="col-md-12"><strong><?=$mensaje?></strong></p>
                    <a class="btn btn-<?=$color?> col-md-8 mt-2" href="formularioTitulos.php" role="button">Volver al registro</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-danger text-center text-white">
		<div class="container">
			<div class="row justify-content-around">
        <div class="col-md-3 mt-3 text-warning">
				  <img src="recursos/creador.jpeg" alt="creador" class="w-100 img-fluid rounded-circle mt-4 mb-3">
					<p> <strong>Carlos Andres Diaz Aguirre &copy;</strong></p>
        			<p> <strong>andrez1915@gmail.com</strong></p>
       				<p> <strong>Medellin - Colombia</strong></p>
					<p> <strong>2020</strong></p>
				</div>
			</div>
		</div>   
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
</html>
