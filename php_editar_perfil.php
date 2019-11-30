<?php
include("con_db.php");

// Create connection

if (isset($_POST['editar'])) {


            $nombre_editar_perfil   = $_POST['nombre_editar_perfil'];
            $edad_editar_perfil     = $_POST['edad_editar_perfil'];
            $email_editar_perfil    = $_POST['email_editar_perfil'];
            $password_editar_perfil = $_POST['password_editar_perfil'];
            $foto_editar_perfil     = $_POST['foto_editar_perfil'];



            $consulta = "UPDATE registro_usuarios SET ".
                     "      nombre        = '$nombre_editar_perfil'   ,".
                     "      edad        = '$edad_editar_perfil'     ,".
                     "      email       = '$email_editar_perfil'    ,".
                     "      contrasena    = '$password_editar_perfil' ,".
                     "      foto        = '$foto_editar_perfil'     ";

                   mysqli_query($conex,$consulta);
}


?>
