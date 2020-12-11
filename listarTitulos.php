<!doctype html>
<html lang="es">
  <head>
    <title>Listado de videojuegos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="estyles.css">
  </head>
  <body>
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
                  <a href="registrarTitulos.php"><p class="text-warning"><u>Registrar un juego (titulo)</u></p></a>
                  <a href="listarTitulos.php"><p class="text-warning"> <strong><u>Listado de juegos (titulo) </u></strong> </p></a>
              </div>
          </div>
      </div>
    </header>
    <?php
      include("BaseDatos.php");
      $transaccion = new BaseDatos();
      $consultaSQL = "call sp_listarTitulos";
      $datosDevueltos = $transaccion->leerDatos($consultaSQL);
    ?>
    <hr>
    <hr>
    <hr>
    <hr>
    <main>
      <div class="container">
          <div class="row row-cols-1 row-cols-md-3">
              <?php foreach ($datosDevueltos as $fila) : ?>
                  <div class="col-md-4 mb-4">
                      <div class="card h-100 text-warning bg-dark">
                          <img src="data:<?= $fila["tipoImagen"]?>;base64,<?=base64_encode($fila['imagen'])?>" class="card-img-top" alt="fotos tv">
                          <div class="card-body">
                              <h5 class="card-title">Nombre: <?= $fila["nombre"] ?></h5>
                              <p class="card-text">ID: <?= $fila["idTitulo"] ?><p class="lead"></p>
                              <p class="card-text">Fecha Estreno: <?= $fila["fechaEstreno"] ?><p class="lead"></p>
                              <p class="card-text">Genero: <?= $fila["genero"] ?><p class="lead"></p>
                              <p class="card-text">Precio: $ <?= $fila["valor"] ?><p class="lead"></p>
                              <p>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?= $fila["idTitulo"] ?>">
                                    Editar
                                </button>
                              </p>
                              <a href="eliminarTitulo.php?id=<?= $fila["idTitulo"]?>" class="btn btn-danger">Eliminar</a>
                          </div>
                      </div>
                      
                  </div>
              <?php endforeach ?>
          </div>
      </div>
    </main>
    
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