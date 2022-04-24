<?php
include 'ConnBD.php';

if(isset($_POST["MostrarUsuarios"]))
{
    MostrarUsuarios();
}

function MostrarUsuarios()
{
    $enlance = ConectarBaseDatos();
    $sentencia = "CALL MostrarUsuarios();";
    $listaUsuarios = $enlance -> query($sentencia);

    while ($item = mysqli_fetch_array($listaUsuarios)) 
    {
        echo "<tr>";   
        echo "<td>" . $item["ID_USUARIO"] . "</td>";
        echo "<td>" . $item["CORREO"] . "</td>";
        echo "<td>" . $item["TIPO_USUARIO"] . "</td>";
        echo "<td>" . $item["ACTIVO"] . "</td>";
        //echo "<td>" . $item["Actualizacion"] . "</td>";
        echo '<td><a href="actualizarUsuario.php?q=' . $item["ID_USUARIO"] . '" class="btn btn-info"><i class="material-icons">settings</i></a></td>';
        echo "<tr>"; 
    }
}

?>