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
            <div class="parallax"><img src="https://ittechglobalservices.com/images/Hi-Tech.jpg"></div>                    
        </div>

        <div class="row container">
            <h2 class="header">Acerca de ACME</h2>
            <p>ACME nació como parte de la necesidad de Willy Coyote de atrapar al correcaminos...</p>
        </div>    

        <div class="parallax-container">
            <div class="parallax"><img src="http://sbpanchal.com/wp-content/uploads/team_slider.jpg"></div>            
        </div> 

        <div class="row container">
            <h2 class="header">Nuestro equipo</h2>
            <p>Nuestro equipo está conformado por un grupo de expertos en el área de la tecnología con ganas de ayudar...</p>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="http://www.v3cloudinc.com/wp-content/uploads/2020/01/our-vision.jpg"></div>            
        </div> 

        <div class="row container">
            <h2 class="header">Nuestra Visión</h2>
            <p>Nuestro equipo está conformado por un grupo de expertos en el área de la tecnología con ganas de ayudar...</p>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="https://gitinvestors.com/wp-content/uploads/2015/10/Our-Mission.jpg"></div>            
        </div> 

        <div class="row container">
            <h2 class="header">Nuestra Misión</h2>
            <p>Nuestro equipo está conformado por un grupo de expertos en el área de la tecnología con ganas de ayudar...</p>
        </div>

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