<?php
    require_once'../conexion.php';
    $conexion  = conexion();
    $id = $_GET['ida'];

    $sql = "DELETE FROM t_animales WHERE id='$id'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta){
        header('location:../animales.php');
    } else{
        echo "No se pudo eliminar";
    }
?>