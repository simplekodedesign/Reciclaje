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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reciclaje</title>
    <link rel="stylesheet" href="../../css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="">
        <a href="home.php">Estadísticas</a>
        <a href="registro_casa.php">Registrar casa</a>
      </div>
      <div class="">

      </div>
    </header>
    <section>
    <div class="container">
      <div class="titles">
        <h1>Registro de Casas</h1>
      </div>

      <div class="inputForm">
        <p>Representante Familiar</p>
        <select class="" id="t_ident" name="">
          <option></option>
          <option>V</option>
          <option>J</option>
        </select>
        <input type="text" placeholder="Nº Identidad" id="n_ident" name="CI" value="">
        <input type="text" id="representante" placeholder="Apellidos y Nombres" name="nombre" value="">
      </div>

      <hr>

      <div class="inputForm">
        <p>Direccion de casa o Residencia</p>
        <input type="text" name="name" id="direccion" placeholder="Direccion">
      </div>

      <hr>

      <div class="inputForm">
        <p>Número de Personas en el grupo familiar</p>
        <input type="text" id="n_personas" name="" value="" placeholder="Ejemplo: 5">
      </div>

      <hr>

      <div class="inputForm">
        <p>Edades del Grupo Familiar</p>
        <label for="">0-12</label><input type="text" id="age1" name="" value="" placeholder="Ejemplo: 1">
        <label for="">13-20</label><input type="text" id="age2" name="" value="" placeholder="Ejemplo: 2">
        <label for="">+20</label><input type="text" id="age3" name="" value="" placeholder="Ejemplo: 2">
      </div>

      <hr>

      <div class="inputForm">
        <p>¿Desea participar en el Proyecto?</p>
        <select class="" id="participa" name="">
          <option></option>
          <option>Si</option>
          <option>No</option>
        </select>
      </div>

      <hr>

      <div class="inputForm">
        <p>Número de Telefono</p>
        <input type="number" id="telefono" placeholder="Telefono" name="" value="">
      </div>

      <hr>

      <div class="inputForm">
        <p>Email</p>
        <input type="email" id="email" name="" placeholder="Email" value="">
      </div>

      <div class="inputForm">
        <button type="button" id="btnSave" name="button">Guardar</button>
      </div>

    </div>
      <footer>
        <p>Sistema hecho con &lt3 por <a href="simplekodedesign.com">SKD</a></p>
      </footer>
    </section>
    <script type="text/javascript" src="../../js/registro_casa.js"></script>
  </body>
</html>
