<?php
  include 'php/producto/FuncionesProducto.php';

  $producto = BuscarProducto(1);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="materialize/css/materialize.min.css"
      media="screen,projection"
    />
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
    <nav class="nav-extended cyan">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"></a>
      </div>
    </nav>
    <div class="container">
      <br />
      <nav>
        <div class="nav-wrapper">
          <form>
            <div class="input-field cyan">
              <input id="search" type="search" required />
              <label class="label-icon" for="search"
                ><i class="material-icons">search</i></label
              >
              <i class="material-icons">close</i>
            </div>
          </form>
        </div>
      </nav>
      <br /><br />
      <div class="container">
        <nav class="nav-extended cyan">
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
                  <img
                    src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    id="imgProducto" 
                  />
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <input type="text" id="txtNombre" name="txtNombre" class="materialize-textarea" value="<?php echo $producto["NOMBRE"]?>" readonly>
              <!-- <p style="font-size: 23px" id="pInfo" name="pInfo" value=""></p> -->
              <div class="col m3">
                <input id="txtcantidad" type="number" value="0"/>
              </div>
            </div> 
        </div>
        <!-- <div class="row" id="divDescripcion">
          <h4>Esto es una breve descripción de ejemplo que se quiere plantear</h4>
        </div> -->
<!--         <div class="row" id="divEspecificaciones">
          <h5>Nombre:</h5>
          <h5>Marca:</h5>
          <h5>Modelo:</h5>
          <h5>Precio:</h5>
          <h5>Calificación:</h5>
        </div> -->
      </div>
      <br/>
      <div style="text-align-last: center;">
        <h4>Productos que podrían interesarle</h4>
        <br/>
        <div class="row">
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img
                  src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                />
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img
                  src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                />
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img
                  src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                />
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img
                  src="https://images.unsplash.com/photo-1577538926210-fc6cc624fde2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- Modal Trigger -->
      <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

<!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-content">
          <h4>Modal Header</h4>
          <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script src="js/Producto.js"></script>
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
      });
    </script>
  </body>
</html>
