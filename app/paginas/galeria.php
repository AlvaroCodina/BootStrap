<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galeria</title>

        <link rel="stylesheet" href="../resources/estilos.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        <div id="todo" class="container-fluid point">
            <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Golden Sun</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">Inicio <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personajes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="personajes1.php">Golden Sun 1</a></li>
                                <li><a href="personajes2.php">Golden Sun 2</a></li>
                                <li><a href="personajes3.php">Golden Sun 3</a></li>
                            </ul>
                        </li>
                        <li><a href="historia.php">Historia</a></li>
                        <li  class="active"><a href="galeria.php">Galeria</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

            <!-- Cuerpo de la galeria -->
            <div id="cuerpo" class="row point">
                <div class="col-xs-12 col-md-12 vacio"></div>
                <div id="myCarousel" class="carousel slide col-xs-12 col-md-12 carrusel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="../resources/imagenes/galeria1.jpg" class="col-md-8 col-md-push-2" id="carr1" alt="Batalla">
                        </div>

                        <div class="item">
                            <img src="../resources/imagenes/galeria2.jpg" class="col-md-8 col-md-push-2" id="carr2" alt="Djinns">
                        </div>

                        <div class="item">
                            <img src="../resources/imagenes/galeria3.png" class="col-md-8 col-md-push-2" id="carr3" alt="Todos">
                        </div>

                        <div class="item">
                            <img src="../resources/imagenes/galeria4.jpg" class="col-md-8 col-md-push-2" id="carr4" alt="Mapa">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="col-xs-12 col-md-12 vacio"></div>
                <div class="col-xs-12 col-md-12">
                    <div class="panel panel-default col-xs-12 col-md-12">
                        <h2 class="text-center subtitulo">Video</h2>
                        <div align="center" class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/3q0pgm3LUcc" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div
    </body>
</html>