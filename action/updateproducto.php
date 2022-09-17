<?php
        //include es importa archio de conexion
        include('../connection/connection.php');
        
        

        $phpId = $_POST['inputId'];
        $phpNombre = $_POST['inputNombre'];
        $phpPrecio = $_POST['inputPrecio'];
        $phpcodigo_fabricante = $_POST['inputcodigo_fabricante'];
        


    $updateProducto = "UPDATE producto SET nombre = '$phpNombre', precio = '$phpPrecio', codigo_fabricante = '$phpcodigo_fabricante ' WHERE codigo = '$phpId'";


    $resultado = mysqli_query($connection,$updateProducto);



        header ('location:../productos.php')



    ?>  