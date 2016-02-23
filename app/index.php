<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sitio Web</title>

        <link rel="stylesheet" href="resources/estilos.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        <div id="todo" class="container-fluid point">
            <nav id="menu" class="navbar navbar-inverse menu">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Golden Sun</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Personajes
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Golden Sun 1</a></li>
                                <li><a href="#">Golden Sun 2</a></li>
                                <li><a href="#">Golden Sun 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Historia</a></li>
                        <li><a href="paginas/galeria.php">Galería</a></li>
                    </ul>
                </div>
            </nav>
            
            <!-- Se acaba el NAV empieza el cuerpo -->
            
            <div id="cuerpo" class="row point">
                <div>
                    <div class="col-md-12 col-xs-12 abajo">
                        <h1 class="text-center titulo">Golden Sun</h1>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default col-xs-12 col-md-12">
                            <img src="resources/imagenes/GoldenSun_wallpaper.jpg" class="img-rounded col-xs-12 col-md-8 col-md-push-2" alt="Wallpaper">
                        </div>
                        <div class="col-xs-12 col-md-12 vacio"></div>
                        <div class="panel panel-default col-xs-12 col-md-5">
                            <div class="panel-body">
                                <h2 class="subtitulo">Nacimiento</h2>
                                <p class="parrafo">Golden Sun (Ougon no Taiyou Hirakareshi Fūin en Japón) 
                                    es la primera entrega de una serie de videojuegos RPG, lanzada para Game Boy 
                                    Advance, distribuida por Nintendo y desarrollada por Camelot Software Planning. 
                                    Fue lanzada en agosto de 2001 en Japón, en noviembre del mismo año en Estados 
                                    Unidos y en Europa en febrero de 2002.</p>
                            </div>
                        </div>
                        <div class="panel panel-default col-xs-12 col-md-6 col-md-push-1" style="margin-top: 0px;">
                            <div class="panel-body">
                                <h2 class="subtitulo">El mundo de Golden Sun</h2>
                                <p class="parrafo">Llamado Weyard, es una especie de tierra plana, 
                                    cuyos límites están siendo devorados por la falta de energía elemental y alquímica 
                                    que sustente al mundo, motivo por el cual se deciden encender de nuevo los faros 
                                    elementales. En el mundo de Weyard hay 7 continentes: Angara, Gondowan, Indra, 
                                    Osenia, Tundaria, Hesperia y Atteka. También hay un grupo de islas habitadas en el Mar del Este.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12 vacio"></div>
                        <div class="panel panel-default col-xs-12 col-md-12">
                            <h3 class="text-center" style="margin-top: 0px;"><small>Álvaro Codina Lahoz</small></h3>
                        </div>
                        <div class="col-xs-12 col-md-12 vacio"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
