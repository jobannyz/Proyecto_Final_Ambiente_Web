<?php

function ConectarBaseDatos()
{
    $servidor = "localhost:3307";
    $baseDatos = "tienda";
    $usuario = "root";
    $clave = "";

    return mysqli_connect($servidor, $usuario, $clave, $baseDatos);
}

function CerrarBaseDatos($enlace)
{
    mysqli_close($enlace);
}

?>