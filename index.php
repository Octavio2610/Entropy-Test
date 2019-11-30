<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>ENTROPYLAND</h1>
        <p>Social Media Service</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#registro" style="color:#FFFFFF;">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#inicio_sesion" style="color:#FFFFFF;">Inicia sesión</a>
                </li>

            </ul>
        </div>
    </nav>



    <div class="tab-content">
        <div id="registro" class="container tab-pane active"><br>
            <form method="post">
                <div class="row">
                    <div class="col-sm-4"><label for="nombre">Nombre:</label> <input name="nombre" type="name" class="form-control" pattern="[a-zA-Z][a-zA-Z ]{1,}" required></div>
                    <div class="col-sm-4"><label for="edad">Edad:</label> <input name="edad" type="number" class="form-control" min="18" max="99" required></div>
                </div>

                <div class="row">
                    <p>
                </div>

                <div class="row">
                    <div class="col-sm-4"><label for="email">Email:</label> <input name="email" type="email" class="form-control" required></div>
                    <div class="col-sm-4"><label for="psw">Contraseña:</label> <input name="contrasena" type="password" class="form-control" required></div>
                </div>

                <div class="row">
                    <p>
                </div>
                <div class="row">
                    <p>
                </div>

                <div class="row">
                    <div class="col-sm-4"><input name="foto" type="file" required></div>
                </div>

                <div class="row">
                    <p>
                </div>
                <div class="row">
                    <p>
                </div>

                <button type="submit" class="btn btn-primary" name="registrar"> Registrar</button>



            </form>

            <?php
            include("registrar.php");
            ?>
        </div>


        <div id="inicio_sesion" class="container tab-pane fade" ><br>
            <form method="post" action="http://127.0.0.1/Entropyland/sesion_iniciada.php">
                <div class="row">
                    <div class="col-sm-4"><label for="email">Email:</label> <input name="email_is" type="email" class="form-control"  required></div>
                    <div class="col-sm-4"><label for="psw">Contraseña:</label> <input name="contrasena_is" type="password" class="form-control"  required></div>
                </div>
                <div class="row">
                    <p>
                </div>
                <div class="row">
                    <p>
                </div>
                <button type="submit" class="btn btn-primary" name="inicio_sesion">Iniciar</button>

            </form>


        </div>




        <div class="row">
            <p>
        </div>
        <div class="row">
            <p>
        </div>

        <div class="jumbotron text-center" style="margin-bottom:0">
            <p>Developed by Octavio Abraham</p>
        </div>

</body>

</html>
