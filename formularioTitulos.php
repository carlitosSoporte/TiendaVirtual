<!doctype html>
<html lang="es">

<head>
    <title>Registro de videojuegos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="estyles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

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
                <h5 class="text-white h4 text-center mb-4"><i class="bi bi-controller"></i> Gestion de videojuegos</h5>
                <a href="formularioTitulos.php">
                    <p class="text-warning"> <strong><i class="bi bi-plus-square-dotted"></i> <u>Registrar un videojuego (titulo)</u></strong></p>
                </a>
                <a href="listadoTitulos.php">
                    <p class="text-warning"><i class="bi bi-search"></i> <u>Listado de videojuegos (titulo)</u></p>
                </a>
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
        <form action="registrarTitulo.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <h1 class="text-warning mb-3 text-center"><i class="bi bi-joystick"></i> <strong>Registro actual de videojuegos</strong></h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-danger mb-5" role="alert">
                        <div class="form-group">
                            <label for="nombre" class="text-danger mt-3"> <strong>Nombre del videojuego:</strong></label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre del videojuego" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaEstreno" class="text-danger mt-3"><strong>Fecha estreno del videojuego:</strong></label>
                            <input type="date" class="form-control" name="fechaEstreno" placeholder="Ingrese el nombre del videojuego" required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger mt-3 col-md-12"><strong>Genero del videojuego:</strong></label>
                            <select class="form-select-lg genero" name="genero" required>
                                <option value="1" selected>Accion</option>
                                <option value="2">Deporte</option>
                                <option value="3">Aventura</option>
                                <option value="4">Otro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-danger mt-3"><strong>Valor del videojuego:</strong></label>
                            <input type="number" class="form-control" name="valor" placeholder="ingrese el precio del video juego" required>
                        </div>
                        <div class="form-group">
                            <label class="text-danger mt-3"><strong>Imagen del videojuego:</strong></label>
                            <input type="file" class="form-control-file" name="imagen">
                            <small id="fileHelpId" class="form-text text-dark"><strong>*Solo se admite formato .png, .jpg, jpeg.</strong></small>
                        </div>
                        <p class="text-center mb-5"><button type="submit" class="btn btn-danger mt-3" name="registrar"><strong>Registrar videojuego</strong></button></p>
                    </div>

                </div>
            </div>

        </form>
    </div>
    <footer class="bg-danger text-center text-white mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card mb-5 mt-5 bg-secondary rounded-pill">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-3 mt-3 text-warning">
                                    <img src="recursos/creador.jpeg" alt="creador" class="w-100 img-fluid rounded-circle mt- mb-3">

                                </div>
                                <div class="col-md-3 mt-5 text-warning">
                                    <p><i class="bi bi-emoji-sunglasses-fill"></i> <strong>Carlos Andres Diaz Aguirre &copy;</strong></p>
                                    <p><i class="bi bi-envelope-fill"></i> <strong>andrez1915@gmail.com</strong></p>
                                    <p><i class="bi bi-geo-alt-fill"></i> <strong>Medellin - Colombia</strong></p>
                                    <p><i class="bi bi-calendar3"></i> <strong>20<?= Date("y") ?></strong></p>
                                </div>
                                <div class="col-md-3 mt-4 text-warning">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <a name="" id="" class="btn btn-outline-warning rounded-circle" href="" role="button"><i class="bi bi-linkedin"></i><strong> Linkedin</strong></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <a name="" id="" class="btn btn-outline-warning rounded-circle" href="" role="button"><i class="bi bi-twitter"></i><strong> Twitter</strong></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <a name="" id="" class="btn btn-outline-warning rounded-circle" href="" role="button"><i class="bi bi-facebook"></i><strong> Facebook</strong></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a name="" id="" target="_blank" class="btn btn-outline-warning rounded-circle" href="https://github.com/carlitosSoporte" role="button"><i class="bi bi-github"></i></i><strong> Github</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>