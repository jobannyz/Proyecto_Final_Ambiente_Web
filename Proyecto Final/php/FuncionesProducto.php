<?php
include 'ConnBD.php';

function BuscarProducto($idProducto)
{
    $enlace = ConectarBaseDatos();
    $sentencia = "CALL BuscarProducto($idProducto);";
    $producto = $enlace -> query($sentencia);

    CerrarBaseDatos($enlace);

    return mysqli_fetch_array($producto);
}

function MostrarDecripcion($descripcion)
{
     
}
?>