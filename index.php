<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>REPS</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  <script type="text/javascript" src="http://getbootstrap.com/dist/js/bootstrap.js"></script>
  <link type="text/css" rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">

  <link rel="stylesheet" href="../css/styles-login.css">


</head>
<body style="padding-top:150px;">
    <nav role="navigation" class="navbar navbar-default navbar-fixed-top" style="padding-top:10px; background-color:#E6E6E6;">
            <div class="navbar-header col-md-4">
                <div class="form-group">
                  <div class="">
                    <img src="img/REPS.png"  class="img-responsive"  alt="Logo REPS" width="200" />
                  </div>

                </div>
            </div>

            <div class="col-md-4 text-center">
              <h3><span class="text-center" >REPOSITORIO DE SCRIPTS</span></h3>
            </div>
    </nav>
    <div class="container">
        <br>
      <form action="" method="GET" role="form" id="formCliente">
        <div class="panel panel-default" style="border-color:red">
          <div class="panel-heading" id="panel1" style="background-color:#FE2E2E">
            <h3 class="panel-title" style="color:white;">Opciones de configuración</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <div class="col-md-4">
                <div class="col-md-12">
                  <input class="btn btn-lg btn-primary btn-block " type="button" name="name" value="Script de Validación" style="background-color:#D8D8D8; color:black" onclick="location.href='http://localhost/REPS/direccionamiento.php'"><br><br>
                  <input class="btn btn-lg btn-primary btn-block " type="button" name="name" value="Script de Configuración" style="background-color:#D8D8D8; color:black" onclick="location.href='http://localhost/REPS/equipos.php'"><br><br>
                  <input class="btn btn-lg btn-primary btn-block " type="button" name="name" value="Script de Agendamiento" style="background-color:#D8D8D8; color:black"><br>
                </div>
            </div>
            <div class="col-md-6">

                <label>Creación de scripts de validación de direccionamiento y enrutamiento en concentradores de Claro</label><br><br>
                <label>Creación de scripts para configuración de equipos entregables al cliente final como dhcp, nat y subinterfaces</label><br><br><br>
                <label>Creación de módulo de agendamiento para la gestión de las actividades diarias</label><br>
            </div>
          </div>
        </div>
          </div>
      </form>
    </div>
</body>
</html>
