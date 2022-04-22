<?php
include 'php/validacion.php';

if(isset($_POST['btnIniciarSesion']))
  {

        $email = $_POST['email'];
        $contrasenna = $_POST['contrasenna'];
        
        validarUsuario($email, $contrasenna);

}

?>
<style>
    .dropdown-trigger {
        width: 150px;
    }
</style>
<nav>
    <div class="nav-wrapper grey darken-3">
        <a href="index.php" class="brand-logo">GGJS</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="Producto.php">Vista Temporal</a></li>
            <li><a href="index.php">Tienda</a></li>
            <li><a href="acerca.php">Acerca</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="carrito.php"><i class="material-icons">shopping_cart</i></a></li>
            <li><a class="modal-trigger" href="#modal1"><i class="material-icons">account_circle</i></a></li>
            <li>
                <!-- Dropdown Trigger -->
                <a class='dropdown-trigger grey darken-3' href='#' data-target='dropdown1'><i class="material-icons">settings</i></a>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Productos</a></li>
                    <li><a href="#!">Proveedores</a></li>
                    <li><a href="#!">Localizaciones</a></li>
                    <li><a href="#!">Usuarios</a></li>
                    <li><a href="#!">Clientes</a></li>
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
                <form method="post" action="navbar.php" class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email">Correo electrónico @</label>
                            <span class="helper-text" data-error="wrong" data-success="Correcto">Digite su correo electrónico</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="contrasenna">
                            <label for="password">Contraseña</label>
                            <span class="helper-text" data-error="wrong" data-success="Correcto">Digite su contraseña</span>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" href="#!" class="modal-close waves-effect waves-green btn" id="btnIniciarSesion" name="btnIniciarSesion"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- Estructura de Modal para Login---Cierre -->

<!-- <div>
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
</div> -->

<script>
$(document).ready(function() {
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();
});
</script>