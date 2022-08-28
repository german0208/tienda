<?php

//datos de la db

$hostname = '127.0.0.1:33065';
$username = 'root';
$password = '';
$database = 'tienda';

//Query para la conexion a la base de datos

$connection = mysqli_connect($hostname,$username,$password,$database);

//validador de la BD

if (mysqli_connect_error()){
    echo 'conecxion fallida';
}else{
    //echo 'conexion exitosa';
}

?>