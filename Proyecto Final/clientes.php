<?php
    include 'php/MantenimientoLocalizaciones.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="" />
    <style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }
    </style>
</head>

<body>
    <header>
        <div id="navbar" class="navbar-fixed"></div>
    </header>
    <main>
        <div class="container">
            <br><br>
            <table class="table">
                <thead class="table-warning">
                    <tr>
                        <th>Código del Cliente</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Cédula</th>
                        <th>País</th>
                        <th>Provincia</th>
                        <th>Canton</th>
                        <th>Distrito</th>
                        <th>Dirección exacta</th>
                        <th>Código de Usuario</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-warning" id="BodyClientes">

                </tbody>
            </table>
        </div>
    </main>


    <footer id="footer" class="page-footer grey darken-3"></footer>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/Clientes.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#navbar").load("navbar.php");
        $("#footer").load("footer.php");
        $('.parallax').parallax();
    });
    </script>
</body>

</html>