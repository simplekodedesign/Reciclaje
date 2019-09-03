<?php
  session_start();
  if(!isset($_SESSION["username"])){
    echo "<script>location='../../index.php'</script>";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <h1>Registro de Casas</h1>
    </div>
    <div class="">
      <p>Representante Familiar</p>
      <select class="" id="t_ident" name="">
        <option></option>
        <option>V</option>
        <option>J</option>
      </select>
      <input type="number" placeholder="Nº Identidad" id="n_ident" name="" value="">
      <input type="text" id="representante" placeholder="Apellidos y Nombres" value="">
    </div>
    <div class="">
      <p>Direccion de casa o Residencia</p>
      <textarea name="name" id="direccion" placeholder="Direccion" rows="8" cols="80"></textarea>
    </div>
    <div class="">
      <p>Número de Personas en el grupo familiar</p>
      <input type="number" id="n_personas" name="" value="">
    </div>
    <div class="">
      <p>Edades del Grupo Familiar</p>
      <label for="">0-12</label><input type="number" id="age1" name="" value="">
      <label for="">13-20</label><input type="number" id="age2" name="" value="">
      <label for="">+20</label><input type="number" id="age3" name="" value="">
    </div>
    <div class="">
      <p>¿Desea participar en el Proyecto?</p>
      <select class="" id="participa" name="">
        <option></option>
        <option>Si</option>
        <option>No</option>
      </select>
    </div>
    <div class="">
      <p>Número de Telefono</p>
      <input type="number" id="telefono" placeholder="Telefono" name="" value="">
    </div>
    <div class="">
      <p>Email</p>
      <input type="email" id="email" name="" placeholder="Email" value="">
    </div>
    <div class="">
      <button type="button" id="btnSave" name="button">Guardar</button>
    </div>
    <script type="text/javascript" src="../../js/registro_casa.js"></script>
  </body>
</html>
