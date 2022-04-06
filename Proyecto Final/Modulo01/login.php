<?php
include 'validacion.php';

if(isset($_POST['btnIniciarSesion']))
  {
        $email = $_POST['email'];
        $contrasenna = $_POST['contrasenna'];
        
        validarUsuario($email, $contrasenna);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../materialize\css\materialize.min.css" media="screen,projection" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    <title>Document</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
                <li>
                    <a class="modal-trigger" href="#modal1">Modal</a>
                </li>
                <li>
                    <!-- Dropdown Trigger -->
                    <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a>

                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Estructura de Modal para Login---Apertura -->
    <div id="modal1" class="modal #eceff1 blue-grey lighten-5">
        <div class="modal-content">
            <h4>Autenticación de Usuarios</h4>
            <p>Ingrese los datos solicitados para iniciar sesión</p>
            <div class="container">
                <div class="row">
                    <form method="post" action="login.php" class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email">Correo electrónico @</label>
                                <span class="helper-text" data-error="wrong" data-success="Correcto">Digite su correo
                                    electrónico</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" name="contrasenna">
                                <label for="password">Contraseña</label>
                                <span class="helper-text" data-error="wrong" data-success="Correcto">Digite su
                                    contraseña</span>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" href="#!" class="modal-close waves-effect waves-green btn"
                                name="btnIniciarSesion"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Estructura de Modal para Login---Cierre -->

    <div>
        <p>
            <?php

            function prueba($email) {
            if ($email != null) {
                echo '<span>Usuario Registrado</span>';
                //echo '<span>'.$Respuesta.'</span>';
            }
            else {
                echo '<span>Usuario NO registrado</span>';};
            }
            ?>
        </p>
    </div>

    <script src="../materialize/js/materialize.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.modal').modal();
        $('.dropdown-trigger').dropdown();
    });
    </script>
</body>


</html>