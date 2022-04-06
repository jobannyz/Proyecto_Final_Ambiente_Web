<?php
include '../ConnBD.php';

function validarUsuario($email, $contrasenna)
{
    $enlace = ConectarBaseDatos();
    $sentencia = "CALL validacion($email, $contrasenna);";
    $uservalidado = $enlace -> query("call validacion('admin@admin.com', 'admin123');");
    CerrarBaseDatos($enlace);
    
    if($uservalidado != " ") {
      return "Usuario se ha registrado correctamente";
    }
    
    return "Usuario o contraseña incorrecto. Intente de nuevo";
    
  }


?>