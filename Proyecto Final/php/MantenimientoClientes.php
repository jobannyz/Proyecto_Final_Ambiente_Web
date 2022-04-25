<?php
include 'ConnBD.php';

if(isset($_POST["MostrarClientes"]))
{
    MostrarClientes();
}

function MostrarClientes()
{
    $enlance = ConectarBaseDatos();
    $sentencia = "CALL MostrarPersonas();";
    $listaProveedores = $enlance -> query($sentencia);

    while ($item = mysqli_fetch_array($listaProveedores)) 
    {
        echo "<tr>";   
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
        echo "<tr>"; 
    }
}

?>