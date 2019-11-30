<?php

include("con_db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['edad']) >= 1  && strlen($_POST['email'])  && strlen($_POST['contrasena']) >= 1) {
	    $nombre     = trim($_POST['nombre']);
		$edad       = trim($_POST['edad']);
		$email      = trim($_POST['email']);
		$contrasena = trim($_POST['contrasena']);
		$foto 		= $_POST['foto'];


	    $consulta = "INSERT INTO registro_usuarios(nombre, edad, email,contrasena,foto) VALUES ('$nombre','$edad','$email','$contrasena','$foto')";
	    $resultado = mysqli_query($conex,$consulta);

		if ($resultado) {
	    	?>
  				<div class="alert alert-success alert-dismissible fade show">
  				  <button type="button" class="close" data-dismiss="alert">&times;</button>
  				  <strong>Registrado!</strong> Esta alerta se muestra en caso de un registro exitoso.
  				</div>
			  <?php

			}
			else {
	    		?>
	    		  	<div class="alert alert-warning alert-dismissible fade show">
    					<button type="button" class="close" data-dismiss="alert">&times;</button>
    					<strong>Oh Oh!</strong> Esta alerta se muestra en caso de un registro NO exitoso.
 					</div>
          		<?php
	    	}
    }
}

?>
