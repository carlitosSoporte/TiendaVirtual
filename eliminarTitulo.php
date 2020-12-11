<?php 
    include('BaseDatos.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $queryEliminar = "call sp_eliminarTitulo($id)";
        $transaccion = new BaseDatos();
        $respuesta = $transaccion->escribirDatos($queryEliminar);

        if($respuesta){
            echo "eliminado";
        }
        else{
            echo "error";
        }

    }

?>
