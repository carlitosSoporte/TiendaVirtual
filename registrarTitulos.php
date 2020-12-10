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
                <a href="registrarTitulos.php"><p class="text-warning"><strong><u>Registrar un juego (titulo)</u></strong></p></a>
                <a href="listarTitulos.php"><p class="text-warning"><u>Listado de juegos (titulo)</u></p></a>
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
        <form action="" method="post">
            <div class="row justify-content-center">
                <h1 class="text-white mb-5">Registro de video juegos</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="form-group">
                    <label for="nombre" class="text-danger mt-2">Nombre del video juego:</label>
                        <input type="text" class="form-control" name="nombre"  placeholder="Ingrese el nombre del juego" required> 
                    </div>
                    <div class="form-group">
                        <label for="fechaEstreno" class="text-danger mt-3">Fecha estreno del video juego:</label>
                        <input type="date" class="form-control" name="fechaEstreno"  placeholder="Ingrese el nombre del juego" required> 
                    </div>
                    <div class="form-group">
                        <label  class="text-danger mt-3">Genero del video juego:</label>
                        <select class="form-select genero" name="genero" required>
                            <option value="1" selected>Accion</option>
                            <option value="2">Deporte</option>
                            <option value="3">Aventura</option>
                            <option value="4">Otro</option>
                        </select> 
                    </div>
                    <div class="form-group">
                      <label class="text-danger mt-3">Valor del video juego:</label>
                      <input type="number" class="form-control" name="valor" placeholder="ingrese el precio del video juego" required>
                    </div>
                    <div class="form-group">
                        <label for="imagen" class="text-danger mt-3">Imagen del video juego:</label>
                        <input type="file" class="form-control-file" name="imagen" required>
                        <small id="fileHelpId" class="form-text text-danger">Solo se admite formato .png, .jpg, jpeg.</small>
                    </div>
                    <p class="text-center mb-5"><button type="submit" class="btn btn-danger mt-3" name="registrar">Registrar video juego</button></p>
                    
                </div>
            </div>
                                            
        </form>      
    </div>
    <footer class="bg-danger text-center text-white">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-md-3 mt-3 text-warning">
					<img src="recursos/creador.jpeg" alt="creador" class="w-100 img-fluid rounded-circle mt-4 mb-3">
					<p>Carlos Andres Diaz Aguirre &copy;</p>
        			<p>andrez1915@gmail.com</p>
       				<p>Medellin - Colombia</p>
					<p>2020</p>
				</div>
				
			</div>
		</div>   
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
</html>