<?php
include 'ConnBD.php';

if(isset($_POST["MostrarProveedores"]))
{
    MostrarProveedores();
}

function MostrarProveedores()
{
    $enlance = ConectarBaseDatos();
    $sentencia = "CALL MostrarProveedoresActivos();";
    $listaProveedores = $enlance -> query($sentencia);

    while ($item = mysqli_fetch_array($listaProveedores)) 
    {
        echo "<tr>";   
        echo "<td>" . $item["ID_PROVEEDOR"] . "</td>";
        echo "<td>" . $item["NOMBRE"] . "</td>";
        //echo "<td>" . $item["Actualizacion"] . "</td>";
        echo '<td><a href="actualizarProveedor.php?q=' . $item["ID_PROVEEDOR"] . '" class="btn btn-info"><i class="material-icons">settings</i></a></td>';
        echo "<tr>"; 
    }
}

?>