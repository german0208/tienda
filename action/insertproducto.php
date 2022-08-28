<?php

include('../connection/connection.php');

//print_r($_POST);

if(isset($_POST['enviar'])){

    $phpNombre = $_POST['inputNombre'];
    $phpPrecio = $_POST['inputPrecio'];
    $phpcodigofabricante = $_POST['inputcodigo_fabricante'];

    $insertProducto = "INSERT INTO producto (nombre, precio, codigo_fabricante) Value('$phpNombre','$phpPrecio','$phpcodigofabricante')";

    $resultado = mysqli_query($connection,$insertProducto);

}

header ('location:../productos.php')

?>
