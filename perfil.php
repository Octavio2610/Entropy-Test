<!DOCTYPE html>
<html>
<head>
  <title>Entropyland</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="row">
    <div class="col-sm-6">

      <div class="container">

        <br>
        <br>
        <center><h2>ENTROPYBOOK</h2></center>

        <br>
        <br>

        <div id="accordion">

          <div class="card ">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                Mi perfil
              </a>
            </div>

            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body ">
                <center><div class="card border-0" style="width:400px"  border="red">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:128px;height:128px;">
                <div class="card-body">
                  <?php
                    include("datos_perfil.php");
                  ?>

                 <br>
                  <a href="#" class="btn btn-primary">Editar</a>
                </div>
              </div>
              </center>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
              Editar mi perfil
            </a>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body">


              <form method="post">
                  <center>
                      <table width="400" border=" 0" cellspacing="1" cellpadding="2">

                          <tr>
                              <td width="100"><label for="nombre"> Nombre:</label></td>
                              <td><input name="nombre_editar_perfil" type="text" id="emp_id" class="form-control"></td>
                          </tr>

                          <tr>
                              <td width="100"><label for="edad"> Edad:</label></td>
                              <td><input name="edad_editar_perfil" type="text" id="emp_id" class="form-control"></td>
                          </tr>

                          <tr>
                              <td width="100"><label for="email"> Email:</label></td>
                              <td><input name="email_editar_perfil" type="text" id="emp_id" class="form-control"></td>
                          </tr>

                          <tr>
                              <td width="100">password</td>
                              <td><input name="password_editar_perfil" type="text" id="emp_id" class="form-control"></td>
                          </tr>

                          <tr>
                              <td width="100"><label for="foto"> Foto:</label></td>
                              <td><input name="foto_editar_perfil" type="file" id="emp_id" class="form-control border-0"></td>
                          </tr>

                          <tr>
                              <td> <button type="submit" class="btn btn-primary" name="editar"> Registrar</button>

 </td>

                          </tr>

                          <tr>
                              <td width="100"> </td>

                          </tr>

                      </table>
                  </center>

              </form>
              <?php
                include("php_editar_perfil.php");
              ?>






            </div>
          </div>
        </div>


          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                Contactos
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <div class="container">
                  <div class="table-wrapper">
                    <div class="table-title">
                      <div class="row">
                        <div class="col-sm-6">
                          <h2>Mis contactos</h2>
                        </div>
                        <div class="col-sm-6">
                          <a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar </span></a>
                        </div>
                      </div>
                    </div>
            <div class='col-sm-4 pull-right'>
              <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                    <span class="input-group-btn">
                    <button class="btn btn-info" type="button" onclick="load(1);">
                      <span class="glyphicon glyphicon-search"></span>
                    </button>
                      </span>
                </div>
              </div>
            </div>
            <div class='clearfix'></div>
              <hr>
              <div id="loader"></div><!-- Carga de datos ajax aqui -->
                <div id="resultados"></div><!-- Carga de datos ajax aqui -->
                  <div class='outer_div'></div><!-- Carga de datos ajax aqui -->

            </div>
          </div>
        </div>
      </div>
    </div>


      <div class="card">
        <div class="card-header">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
            Grupos
          </a>
        </div>
        <div id="collapseFour" class="collapse" data-parent="#accordion">
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal HTML -->
<?php include("html/modal_add.php");?>
<!-- Edit Modal HTML -->
<?php include("html/modal_edit.php");?>
<!-- Delete Modal HTML -->
<?php include("html/modal_delete.php");?>

<script src="js/script.js"></script>



<div class="col-sm-6">

  <div class="container">
    <br><br>
    <center><h2>CHAT</h2></center>
    <br><br>

    <div class="form-group">
    <label for="sel1">Mnesajear con:</label>
    <select class="form-control" id="sel1">
      <option>Sara</option>
      <option>Sergio</option>
      <option>Roger</option>
      <option>Omar</option>
    </select>
  </div>

    <table class="table">
        <thead>
          <tr>
            <th>De</th>
            <th>Mensaje</th>
            <th>Para</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Octavio</td>
            <td>Hola! ¿Como te encuentras? </td>
            <td>Sara</td>
          </tr>
          <tr>
            <td>Sara</td>
            <td>Muy bien y ¿tu?</td>
            <td>Octavio</td>
          </tr>
          <tr>
            <td>Octavio</td>
            <td>¿Salimos?</td>
            <td>Sara</td>
          </tr>
        </tbody>
      </table>



    <form action="/action_page.php">
      <div class="form-group">
        <label for="comment">Mensaje:</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

</div>





</body>
</html>
