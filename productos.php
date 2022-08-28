<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Producto</title>
</head>

<body>
<br>
    <div class="container">
        <!--inicio de formulario-->
        <form action="action/insertproducto.php" method="POST">
    <div class="mb-3">
    <label class="form-label">Nombre Producto </label>
    <input type="text" name="inputNombre" class="form-control">
    <br>
    <label class="form-label">Precio </label>
    <input type="text" name="inputPrecio" class="form-control">
    <br>
    <label class="form-label">codigo fabricante </label>
    <input type="text" name="inputcodigo_fabricante" class="form-control">
    </div>

    <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
</form>

        <!--fin de formularios-->
<br>
        <!--inicio de la tabla de fabricantes-->
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                    <th scope="col">Nombre Producto </th>
                    <th scope="col">Precio</th>
                    <th scope="col">Codigo fabricante</th>
                
                </tr>
            </thead>
            <tbody>

            <?php
            // importar el archivo de conexion
            include('connection/connection.php');
            // variable para listar toda la tabla
            $consulta = "SELECT * FROM producto";
            // query de conexion  y query de listado
            $resultado = mysqli_query($connection,$consulta);
            // mientras haya algo dentro de table, seguira listado
            while ($fila= mysqli_fetch_array($resultado)){

            ?>
            <tr>
                    <th scope="row"><?php echo $fila["codigo"] ?></th>
                    <td><?php echo $fila["nombre"] ?></td>
                    <td><?php echo $fila["precio"] ?></td>
                    <td><?php echo $fila["codigo_fabricante"] ?></td>
                    
                </tr>
            <?php } //cierre del while?> 
            </tbody>
        </table>
        <!--final de la tabla de fabricantes-->
    </div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>