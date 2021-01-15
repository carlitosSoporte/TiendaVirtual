<?php
include("BaseDatos.php");
    if(isset($_POST["guardar"])){

        if(isset($_FILES['imagen']['name'])){
            $id = $_GET['id'];
            $valor = $_POST["valor"];
            $tipoImagen = $_FILES["imagen"]['type'];
            $nombreImagen = $_FILES["imagen"]["name"];
            $tamanoImagen = $_FILES["imagen"]["size"];
            $tipo = substr($tipoImagen,0,5);
            if($tipo=='image'){
                $imagenSubida = $_FILES['imagen']['tmp_name'];
                $binariosImagen = addslashes(file_get_contents($imagenSubida));

                $transaccion = new BaseDatos();
                $consultaSQL = "update titulo set tipoImagen='$tipoImagen',valor=$valor,imagen='$binariosImagen'";
                $respuesta = $transaccion->escribirDatos($consultaSQL);
                
                if($respuesta){
                    session_start();
                    $_SESSION['resultado'] = "6";
                    header("location:respuesta.php");
                }
                else{             
                    
                    session_start();
                    $_SESSION['resultado'] = "7";
                    header("location:respuesta.php");
                }
            }
            else{
                session_start();
                $_SESSION['resultado'] = "8";
                header("location:respuesta.php");
            }           
        }
    }
?>