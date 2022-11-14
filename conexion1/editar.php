<?php 
    require_once'./conexion.php';
    $conexion = conexion();
    $id = $_GET['idp'];
    $sql = "SELECT * FROM t_nombre WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);

    $item = mysqli_fetch_array($respuesta);

?>

<html>
    <h2>Actualizar</h2>
    <form action="./backend/actualizar.php" method="post">
        <input type="text" name="id" value="<?php echo $id ;?>" hidden>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $item['nombre'] ?>"><br>
        <button>Actualizar</button>
    </form>
</html>