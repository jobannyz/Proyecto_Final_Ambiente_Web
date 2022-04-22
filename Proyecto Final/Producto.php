<?php
  include 'php/FuncionesProducto.php';

  $producto = BuscarProducto(1);


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
            <br />
            <br /><br />
            <div class="container">
                <nav class="nav-extended grey darken-3">
                    <div class="nav-content">
                        <ul class="tabs tabs-transparent">
                            <li class="tab"><a href="#Producto">PRODUCTO</a></li>
                            <li class="tab">
                                <a class="active" href="#Descripcion">DESCRIPCIÓN</a>
                            </li>
                            <li class="tab disabled">
                                <a href="#Especificaciones">ESPECIFICACIONES</a>
                            </li>
                            <li class="tab"><a href="#Compatibilidad">COMPATIBILIDAD</a></li>
                        </ul>
                    </div>
                </nav>
                <br />
                <div class="row" id="divProducto">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    id="imgProducto" />
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <input type="text" id="txtNombre" name="txtNombre" class="materialize-textarea"
                            value="<?php echo $producto["NOMBRE"]?>" readonly>
                        <div class="col m3">
                        <input id="txtCantidad" name="txtCantidad" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div style="text-align-last: center;">
                <h4>Productos que podrían interesarle</h4>
                <br />
                <div class="row">
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-image">
                                <img
                                    src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-image">
                                <img
                                    src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-image">
                                <img
                                    src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-image">
                                <img
                                    src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    
    
    <footer id="footer" class="page-footer grey darken-3"></footer>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#navbar").load("navbar.php");
        $("#footer").load("footer.php");
        $('.parallax').parallax();
        jQuery("#txtCantidad").on('input', function (evt) {
            // Allow only numbers.
            jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
        });
    });
    </script>
</body>

</html>