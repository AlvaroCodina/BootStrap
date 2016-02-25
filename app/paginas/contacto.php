<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contacto</title>

        <link rel="stylesheet" href="../resources/estilos.css">
        <link rel="stylesheet" href="../resources/prueba.css">

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
                        <li><a href="galeria.php">Galeria</a></li>
                        <li class="active"><a href="contacto.php">Contacto</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

            <!-- Cuerpo -->

            <div id="cuerpo" class="row">
                <div class="col-xs-12 col-md-12 vacio"></div>
                <div class="panel panel-default col-xs-12 col-md-12">
                    <h2 class="text-center">Acerca de GoldenSun.com</h2>
                    <p class="text-center">Si quieres contactar con nosotros rellene el siguiente formulario</p>
                    <div class="col-xs-12 col-md-8 col-md-push-2">
                        <form role="form">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono de contacto:</label>
                                <input type="tel" class="form-control" id="telefono">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="mensaje" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default" style="margin-bottom: 1em;">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 vacio2"></div>
                <div class="panel panel-default col-xs-12 col-md-12">
                    <h3 class="subtitulo col-xs-12 col-sm-12 col-md-6">Siguenos en nuestras redes sociales!!</h3>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="col-xs-2 col-sm-2 col-md-1 col-md-push-2" id="facebook"></div>
                        <div class="col-xs-2 col-sm-2 col-md-1 col-md-push-2" id="twitter"></div>
                        <div class="col-xs-2 col-sm-2 col-md-1 col-md-push-2" id="instagram"></div>
                        <div class="col-xs-2 col-sm-2 col-md-1 col-md-push-2" id="google"></div>
                    </div>
                </div>
                
            </div>

        </div
    </body>
</html>