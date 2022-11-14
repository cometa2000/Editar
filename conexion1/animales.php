
<?php  
    require_once"./conexion.php";
    require_once"./header.php";
    $conexion = conexion();

    $sqlanimals = "SELECT * FROM t_animales";
    $respuestaanimals = mysqli_query($conexion, $sqlanimals);
?>
<div class="container">
    <div class="row">
        <div class="col">
        <hr>
        <h2>Listado de animales</h2>
            <p>
                
                <a class="btn btn-dark" href="./agregarAn.php">Agregar nuevo Animal</a>
            </p>
            <table class="table table-dark table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Region</th>
                        <th>Comida</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>    
                </thead>
                <tbody>
                    <?php while($verani = mysqli_fetch_array($respuestaanimals)): ?>
                        <tr>
                            <td><?php echo $verani['id']; ?></td>
                            <td><?php echo $verani['nombre']; ?></td>
                            <td><?php echo $verani['region']; ?></td>
                            <td><?php echo $verani['comida']; ?></td>
                            <td><a class="btn btn-warning" href="./editarAn.php?ida=<?php echo $verani['id'];  ?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="./database/eliminarAn.php?ida=<?php echo $verani['id'];  ?>">Eliminar</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
</div>

<?php require_once"./footer.php" ?>