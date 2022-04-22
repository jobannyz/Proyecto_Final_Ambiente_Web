<!DOCTYPE html>
<html>
    <head>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>    
        <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>            
        <meta charset="utf-8">
    </head>

    <body>
        <header>
            <div id="navbar" class="navbar-fixed"></div>
        </header>

        <main>
            <div class="parallax-container">
                <div class="parallax"><img src="https://www.ssauk.com/static/eedcd7f3-53ab-4528-94f78b8223538c57/contact-us-banner.jpg"></div>                    
            </div>

            <div class="container">
                <div style="text-align:center;" class="row">
                    <h2 text-align="center">Contacto</h2>
                    <p class="flow-text">Si tiene alguna duda o consulta con respecto a alguno de nuestro productos, horarios, o disponibilidad no dude en contactarnos
                        utilizando el siguiente formulario.
                    </p>
                </div>

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="inTxtNombre" type="text" class="validate">
                                <label for="inTxtNombre">Nombre</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="inTxtApellidos" type="text" class="validate">
                                <label for="inTxtApellidos">Apellidos</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input id="inTxtEmail" type="email" class="validate">
                                <label for="inTxtEmail">Correo</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="inTxtTelefono" type="tel" class="validate">
                                <label for="inTxtTelefono">Teléfono</label>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="input-field col s12">
                            <textarea id="inTxtArComentario" class="materialize-textarea"></textarea>
                            <label for="inTxtArComentario">Comentario</label>
                            </div>
                        </div>

                    </form>
                </div>
                    <div style="text-align:center;" class="row">
                        
                        <button class="btn-large grey darken-3 waves-effect waves-light" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
            </div> <!-- Container div -->
        </main>
        <footer id="footer" class="page-footer grey darken-3"></footer>

        <!--JavaScript at end of body for optimized loading-->
        <!--Import jQuery Library-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--Import materialize.js-->
        <script src="js/materialize.min.js"></script>  
        
        <script type="text/javascript"> 
            $(document).ready(function(){
            $("#navbar").load("navbar.php"); 
            $("#footer").load("footer.php"); 
            $('.parallax').parallax(); 
            });
        </script> 

    </body>
</html>