<?php
include 'ConnBD.php';

function validarUsuario($email, $contrasenna)
{
    
    $respuesta = "";
    

    try
    {
      $enlace = ConectarBaseDatos();
      $sentencia = "call login('$email','$contrasenna');";
      $uservalidado = $enlace -> query($sentencia);
      CerrarBaseDatos($enlace);
    }
    catch(Exception $ex)
    {
        $respuesta = $ex -> getMessage();
    }

    if($respuesta == "") {
      $msg =  "Usuario se ha registrado correctamente";
      $usuarioValidado = mostrarUsuario($uservalidado);
      //header("location: confirmacionLogin.php");
    }
    else {
      $msg = "Usuario o contraseña incorrecto. Intente de nuevo";
    }
    
    return $respuesta;
    
  }

function mostrarUsuario($usuario) {
  return mysqli_fetch_array($usuario);
}

?>