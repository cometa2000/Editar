<!-- <html>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="./database/agregarAn.php" method="post">
                    <label for="nombre2">Nombre</label>
                    <input type="text" name="nombre2" id="nombre2"><br>
                    <label for="region">Region</label>
                    <input type="text" name="region" id="region"><br>
                    <label for="comida">Comida</label>
                    <input type="text" name="comida" id="comida"><br>
                    <button class="btn btn-warnig">Agregar</button>
                </form>            
            </div>
        </div>
    </div>
    
</html> -->
<?php require_once"./header.php"; ?>

<div class="container" >
    <div class="row">
        <div class="col" >
            <div class="card text-center" style="width: 48rem; margin-left: 20%; margin-top: 50px;">
                <div class="card-body">
                    <h5 class="card-title">Agregar  un nuevo animal</h5>
                    <table class="table table-dark table-sm ">
                        <form action="./database/agregarAn.php" method="post">
                            <thead>
                                <th><label for="nombre2">Nombre</label></th>
                                <th><label for="region">Region</label></th>
                                <th><label for="comida">Comida</label></th>
                                <th>Agregar</th>
                            </thead>
                            <tbody>
                                <td><input type="text" name="nombre2" id="nombre2"></td>
                                <td><input type="text" name="region" id="region"></td>
                                <td><input type="text" name="comida" id="comida"></td>
                                <td><button class="btn btn-warning">Agregar</button></td>
                            </tbody>
                        </form>  
                    </table>
                </div>
            </div>            
        </div>
    </div>
</div>
