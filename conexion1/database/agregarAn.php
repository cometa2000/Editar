<?php 
    require_once'../conexion.php';
    $conexion = conexion();
    $nombre = $_POST['nombre2'];
    $region = $_POST['region'];
    $comida = $_POST['comida']; 
    
    $sql = "INSERT INTO t_animales (nombre,region,comida) VALUES ('$nombre','$region','$comida')";
    $respuesta = mysqli_query($conexion,$sql);

    if($respuesta){
        header('location:../animales.php');
    } else{
        echo "No se puede insertar";
    }
?>