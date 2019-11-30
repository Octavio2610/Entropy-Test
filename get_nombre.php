<?php

include("con_db.php");
?>
<h3 class="ok">¡Te has inscripto correctamente!</h3>

<?php

$consulta = "SELECT nombre FROM registro_usuarios ";
$stmt = mysqli_query($conex,$consulta);

if ($stmt) {
  ?>
  <h3 class="ok">¡Te has inscripto correctamente!</h3>

  <?php
} else {
  ?>
  <h3 class="bad">¡Ups ha ocurrido un error!</h3>
     <?php
}
?>
