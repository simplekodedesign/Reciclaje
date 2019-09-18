<?php
  session_start();
  if(!isset($_SESSION["username"])){
    echo "<script>location='../../index.php'</script>";
  }
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
    <title>Por mi Ciudad Verde</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/registro_casa.css">
  </head>
  <body id="main">
    <header id="menuCont">
      <div class="options" id="menuOptions">
        <div class="user">
          <img src="../../img/person.svg" alt="User">
          <p>Por mi Ciudad Verde</p>
        </div>
        <div class="option" id="showMenuReg">
          Registrar
          <div class="optionL" id="menuReg">
            <a class="option" href="registro_casa.php">Casa</a>
            <a class="option" href="registro_casa_dia.php">Dia</a>
            <a class="option" href="plastico_dia.php">Plastico por Dia</a>
          </div>
        </div>
        <div class="option" id="showMenuEst">
          <a href="estadisticas.php">Estadisticas</a>
        </div>
      </div>
      <div class="option" id="btnSalir">Salir</div>
      <div class="menubtn">
        <img src="../../img/menu_icon.svg" id="showMenu" alt="Icon">
      </div>
    </header>

    <div class="principal" id="principalCont">
      <div class="container">
        <div class="titles">
          <h1>Participación por Día</h1>
        </div>

        <div class="inputForm">
          <label for="n_personas">Fecha de Participación</label>
          <input type="date" style="font-size: 1.2em;" id="fecha">
        </div>

        <div class="inputForm">
          <label for="direccion">Número de Casa</label>
          <input type="text" name="n_casa" id="n_casa" value="">
        </div>

        <div class="inputForm">
          <label for="participa">¿Participó?</label>
          <select class="" id="participa" name="">
            <option>No</option>
            <option>Si</option>
          </select>
        </div>

        <div class="inputForm">
          <button type="button" id="btnSave" name="button">Guardar</button>
        </div>
      </div>
      <div class="principal" id="principalCont">
        <div class="skd">
          <i><b><small>Sistema Hecho por <a href="https://simplekodedesign.com" target="_blank" style="color: blue;">SKD</a></small></b></i>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../js/registro_casa_dia.js"></script>
    <script type="text/javascript" src="../../js/mainJs.js"></script>
  </body>
</html>
