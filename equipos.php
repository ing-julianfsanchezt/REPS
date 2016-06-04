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
  <script>

  var valida = false;

  function validateIp(id)
  {
      //Creamos un objeto
      object=document.getElementById(id);
      valueForm=object.value;

      // Patron para la ip
      var patronIp=new RegExp("^([0-9]{1,3}).([0-9]{1,3}).([0-9]{1,3}).([0-9]{1,3})$");
      //window.alert(valueForm.search(patronIp));
      // Si la ip consta de 4 pares de números de máximo 3 dígitos
      if(valueForm.search(patronIp)==0)
      {
          valores=valueForm.split(".");
          if(valores[0]<=255 && valores[1]<=255 && valores[2]<=255 && valores[3]<=255)
          {
              //Ip correcta
              object.style.color="#000";
              valida = true;
              return;
          }
      }
      //Ip incorrecta
      valida=false;
      object.style.color="#f00";
  }

  function generarScript(idVlan, idIp, idMask, idVrf, idInterfaz){

    objectVlan=document.getElementById(idVlan);
    vlan=objectVlan.value;
    objectIp=document.getElementById(idIp);
    ip=objectIp.value;
    objectMask=document.getElementById(idMask);
    mask=objectMask.value;
    objectVrf=document.getElementById(idVrf);
    vrf=objectVrf.value;
    objectInterfaz=document.getElementById(idInterfaz);
    Interfaz=objectInterfaz.value;
    validateIp('ip');
    validateIp('mask');


    document.getElementById("textScript").value = "interface "+Interfaz+"."+vlan+"\n"
                                                  +"encapsulation dot1Q "+vlan+"\n"
                                                    +"ip vrf forwarding "+vrf+"\n"
                                                    +"ip address "+ip+" "+mask+"";

  }
</script>

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
              <h3><span class="text-center" >GENERADOR DE SCRIPTS PARA CONFIGURACIÓN DE EQUIPOS</span></h3>
            </div>
    </nav>
    <div class="container">
        <br>
      <form action="" method="GET" role="form" id="formCliente">
        <div class="panel panel-default" style="border-color:red">
          <div class="panel-heading" id="panel1" style="background-color:#FE2E2E">
            <h3 class="panel-title" style="color:white;">Ingrese datos validos</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <div class="col-md-4">
                <div class="col-md-12">
                  <label class="" for="generadorScripts">Vlan</label>
                  <input type="text" id="vlan" class="form-control" name="vlan" value="" placeholder=""><br>
                  <label class="" for="generadorScripts">IP</label>
                  <input type="text" id="ip" class="form-control" name="ip" value="" placeholder="10.10.10.1" onkeyup="javascript:validateIp('ip');"><br>
                  <label class="" for="generadorScripts">Mascara de Red</label>
                  <input type="text" id="mask" class="form-control" name="mask" value="" placeholder="255.255.255.0" onkeyup="javascript:validateIp('mask');"><br>
                  <label class="" for="generadorScripts">VRF</label>
                  <input type="text" id="vrf" class="form-control" name="vrf" value="" placeholder="Virtual Router Forwarding" ><br>
                  <label class="" for="generadorScripts">Interfaz</label>
                  <input type="text" id="interfaz" class="form-control" name="interfaz" value="" placeholder="GigabitEthernet0/0"><br>
                  <input class="btn btn-lg btn-primary btn-block " type="button" name="name" value="Generar Script" onclick="javascript:generarScript('vlan','ip','mask','vrf','interfaz');"style="background-color:#D8D8D8; color:black"><br><br>

                </div>
            </div>
            <div class="col-md-5">
              <label for="comment">Script para configuración de equipos</label>
              <textarea class="form-control" rows="5" id="textScript" style="height:300px;"></textarea>
              </div>
              <div class="col-md-2">
              <input class="btn btn-lg btn-primary btn-block " type="button" name="name" value="Menú Principal" style="background-color:#D8D8D8; color:black; margin-top:280px; margin-left:100px;" onclick="location.href='http://localhost/REPS/index.php'">
            </div>
          </div>
        </div>
          </div>
      </form>
      </div>
</body>
</html>
