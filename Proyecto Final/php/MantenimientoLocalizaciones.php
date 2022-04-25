<?php
include 'ConnBD.php';

if(isset($_POST["MostrarLocalizaciones"]))
{
    MostrarLocalizaciones();
}

function MostrarLocalizaciones()
{
    $enlance = ConectarBaseDatos();
    $sentencia = "CALL MostrarLocalizaciones();";
    $listaProveedores = $enlance -> query($sentencia);

    while ($item = mysqli_fetch_array($listaProveedores)) 
    {
        echo "<tr>";   
        echo "<td>" . $item["ID_LOCALIZACION"] . "</td>";
        echo "<td>" . $item["NOMBRE"] . "</td>";
        echo '<td><a href="actualizarLocalizacion.php?q=' . $item["ID_LOCALIZACION"] . '" class="btn btn-info"><i class="material-icons">settings</i></a></td>';
        echo "<tr>"; 
    }
}

?>