<?php 
    require_once'../conexion.php';
    $conexion = conexion();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    $sql = "UPDATE t_nombre SET nombre='$nombre' WHERE id='$id'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta){
        header('location:../index.php');
    } else {
        echo "No se pudo actualizar";
    }


?>