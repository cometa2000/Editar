
<?php 
    require_once"./header.php"; 
    require_once'./conexion.php';
    $conexion = conexion();
    $id = $_GET['ida'];
    $sql = "SELECT * FROM t_animales WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);

    $item = mysqli_fetch_array($respuesta);

?>

<div class="container" >
    <div class="row">
        <div class="col" >
            <div class="card text-center" style="width: 48rem; margin-left: 20%; margin-top: 50px; background-color: #4A89C9;">
                <div class="card-body">
                    <h5 class="card-title">Editando un animal</h5>
                    <table class="table table-dark table-sm ">
                        <form action="./database/actualizar.php" method="post">
                            <thead>
                                <th><label for="nombre">Nombre</label></th>
                                <th><label for="region">Region</label></th>
                                <th><label for="comida">Comida</label></th>
                                <th>Agregar</th>
                            </thead>
                            <tbody>
                                <input type="text" name="id" value="<?php echo $id ;?>" hidden>
                                <td><input type="text" name="nombre" id="nombre" value="<?php echo $item['nombre']  ?>"></td>
                                <td><input type="text" name="region" id="region" value="<?php echo $item['region']  ?>"></td>
                                <td><input type="text" name="comida" id="comida" value="<?php echo $item['comida']  ?>"></td>
                                <td><button class="btn btn-warning">Editar</button></td>
                            </tbody>
                        </form>  
                    </table>
                </div>
            </div>            
        </div>
    </div>
</div>
