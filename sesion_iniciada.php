<!DOCTYPE html>
<html>
<head>
  <title>Entropyland</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
  include("con_db.php");


  if (isset($_POST['inicio_sesion'])) {
      if (strlen($_POST['email_is']) >= 1 && strlen($_POST['contrasena_is']) >= 1)  {
      
      $email_is          = trim($_POST['email_is']);
      $contrasena_is     = trim($_POST['contrasena_is']);

      $consulta = "SELECT nombre FROM registro_usuarios WHERE email='$email_is' and contrasena='$contrasena_is'";
      $resultado = mysqli_query($conex,$consulta);

      if ($resultado ->num_rows > 0) {
          ?>
            <meta http-equiv="refresh" content="0; url=http://127.0.0.1/Entropyland/perfil.php">
          <?php

          $consulta2 = "INSERT INTO acceso_para (correo) VALUES ('$email_is')";
          $resultado2 = mysqli_query($conex,$consulta2);

          $consulta3 = "CREATE TABLE perfil_" . $contrasena_is;
          $resultado3 = mysqli_query($conex,$consulta3);

        }
        else {
  ?>
          <meta http-equiv="refresh" content="0; url=http://127.0.0.1/Entropyland/">
  <?php
          }
      }
  }
  ?>






</body>
</html>
