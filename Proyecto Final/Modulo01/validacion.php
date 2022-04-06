<?php
include '../ConnBD.php';

function validarUsuario($email, $contrasenna)
{
    $enlace = ConectarBaseDatos();
    $sentencia = "call login('$email','$contrasenna');";
    $uservalidado = $enlace -> query($sentencia);
    CerrarBaseDatos($enlace);
    
    if($uservalidado != " ") {
      $msg =  "Usuario se ha registrado correctamente";
    }
    else {
      $msg = "Usuario o contraseña incorrecto. Intente de nuevo";
    }
    
    return $msg;
    
  }


?>