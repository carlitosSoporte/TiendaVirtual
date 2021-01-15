<?php 
    include('BaseDatos.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $queryEliminar = "delete from titulo where idTitulo=($id)";
        $transaccion = new BaseDatos();
        $respuesta = $transaccion->escribirDatos($queryEliminar);

        if($respuesta){
            session_start();
            $_SESSION['resultado']='4';
            header('location:respuesta.php');
        }
        else{
            session_start();
            $_SESSION['resultado']='5';
            header('location:respuesta.php');
        }

    }

?>
