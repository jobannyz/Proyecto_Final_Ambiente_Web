<?php
include 'ConnBD.php';

function BuscarProducto($idCarrito)
{
    $enlace = ConectarBaseDatos();
    $sentencia = "CALL BuscarCarrito($idCarrito);";
    $listaCarrito = $enlance -> query($sentencia);

    while ($item = mysqli_fetch_array($listaCarrito)) 
    {
        /* echo "<tr>";   
        echo "<td>" . $item["ID_PERSONA"] . "</td>";
        echo "<td>" . $item["NOMBRE"] . "</td>";
        echo "<td>" . $item["APELLIDO"] . "</td>";
        echo "<td>" . $item["TELEFONO"] . "</td>";
        echo "<td>" . $item["CEDULA"] . "</td>";
        echo "<td>" . $item["PAIS"] . "</td>";
        echo "<td>" . $item["PROVINCIA"] . "</td>";
        echo "<td>" . $item["CANTON"] . "</td>";
        echo "<td>" . $item["DISTRITO"] . "</td>";
        echo "<td>" . $item["DIRECCION_EXACTA"] . "</td>";
        echo "<td>" . $item["ID_USUARIO"] . "</td>";
        echo "<td>" . $item["CORREO"] . "</td>";
        echo '<td><a href="actualizarCliente.php?q=' . $item["ID_PERSONA"] . '" class="btn btn-info"><i class="material-icons">settings</i></a></td>';
        echo "<tr>";  */
    }

    CerrarBaseDatos($enlace);

    return mysqli_fetch_array($producto);
}

function MostrarDecripcion($descripcion)
{
     
}
?>