<?php  
    require_once"./conexion.php";
    require_once"./header.php";
    $conexion = conexion();

    $sql = "SELECT * FROM t_nombre";
    $respuesta = mysqli_query($conexion, $sql);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Listado de nombres</h2>
            <p>
                <a class="btn btn-info" href="./agregar.php">Agregar nuevo nombre</a>
            </p>
            <table class="table table-dark table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($ver = mysqli_fetch_array($respuesta)): ?>
                        <tr>
                            <td><?php echo $ver['id']; ?></td>
                            <td><?php echo $ver['nombre']; ?></td>
                            <td><a class="btn btn-danger" href="./editar.php?idp=<?php echo $ver['id'];  ?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="./backend/eliminar.php?idp=<?php echo $ver['id'];  ?>">Eliminar</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>            
        </div>
    </div>
    
</div>

<?php require_once"./footer.php" ?>