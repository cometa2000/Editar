<?php 
    require_once'../conexion.php';
    $conexion = conexion();
    $nombre = $_POST['nombre'];
    $sql = "INSERT INTO t_nombre (nombre) VALUES ('$nombre')";
    $respuesta = mysqli_query($conexion,$sql);

    if($respuesta){
        header('location:../index.php');
    } else{
        echo "No se puede insertar";
    }
?>