<?php

$conex = mysqli_connect("localhost","root","","preinscritosacursos");
if ($conex) {
        //echo "conexion con exito";
}else{
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
  
}

$conex -> set_charset("utf8");

?>