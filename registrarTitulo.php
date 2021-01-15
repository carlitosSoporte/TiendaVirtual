<?php
include("BaseDatos.php");
    if(isset($_POST["registrar"])){

        if(isset($_FILES['imagen']['name'])){

            $genero = $_POST["genero"];
            switch($genero){
                case "1":
                    $genero="accion";
                break;
                case "2":
                    $genero="deporte";
                break;
                case "3":
                    $genero="aventura";
                break;
                case "4":
                    $genero="otro";
                break;
            }
            
            $nombre = $_POST["nombre"];
            $transaccion = new BaseDatos();
            $buscarTitulo = "call sp_buscarTitulo('$nombre')";
            $encontrado = $transaccion->leerDatos($buscarTitulo);
            if(!$encontrado){
                $fechaEstreno = $_POST["fechaEstreno"];
                $valor = $_POST["valor"];
                $tipoImagen = $_FILES["imagen"]['type'];
                $nombreImagen = $_FILES["imagen"]["name"];
                $tamanoImagen = $_FILES["imagen"]["size"];
                $tipo = substr($tipoImagen,0,5);
                if($tipo=='image'){
                    $imagenSubida = $_FILES['imagen']['tmp_name'];
                    $binariosImagen = addslashes(file_get_contents($imagenSubida));

                    $consultaSQL = "insert into titulo(nombre,fechaEstreno,genero,valor,tipoImagen,imagen) values ('$nombre','$fechaEstreno','$genero','$valor','$tipoImagen','$binariosImagen')";
                    $respuesta = $transaccion->escribirDatos($consultaSQL);
                    
                    if($respuesta){
                        session_start();
                        $_SESSION['resultado'] = "1";
                        header("location:respuesta.php");
                    }
                    else{
                        session_start();
                        $_SESSION['resultado'] = "0";
                        header("location:respuesta.php");
                    }
                    
                }
                else{
                    session_start();
                    $_SESSION['resultado'] = "3";
                    header("location:respuesta.php");
                }        
            }
            else{
                session_start();
                $_SESSION['resultado'] = "2";
                header("location:respuesta.php"); 
            }
               
        }
    }
?>