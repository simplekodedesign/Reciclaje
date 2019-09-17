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
    <header class="menu" id="menuCont">
      <div class="user">
        <img src="../../img/user2.svg" alt="User">
        <h2 class="username">Por mi Ciudad Verde</h2>
      </div>
      <div class="menubtn">
        <img src="../../img/menu_icon.svg" id="showMenu" alt="">
      </div>
      <div class="options" id="menuOptions">
        <div class="option" id="showMenuReg">
          Registrar
        </div>
        <div class="optionReg" id="menuReg">
          <a href="registro_casa.php"><div class="option">Registrar Casa</div></a>
          <a href="registro_casa_dia.php"><div class="option">Registrar Dia</div></a>
          <a href="plastico_dia.php"><div class="option">Cargar Plastico por Dia</div></a>
        </div>
        <div class="option" id="showMenuEst">
          <a href="estadisticas.php">Estadisticas</a>
        </div>
        <div class="option" id="btnSalir">Salir</div>
      </div>
    </header>

    <div class="principal" id="principalCont">
      <div class="container">
        <div class="titles">
          <h1>Registro de Casas</h1>
        </div>
        <div class="inputForm">
          <label for="t_ident">Representante Familiar</label>
          <select class="" id="t_ident" name="">
            <option></option>
            <option>V</option>
            <option>J</option>
          </select>
          <input type="text" placeholder="Nº Identidad" id="n_ident" name="CI" value="">
          <input type="text" id="representante" placeholder="Apellidos y Nombres" name="nombre" value="">
        </div>

        <div class="inputForm">
          <label for="direccion">Número de Casa</label>
          <input type="text" name="n_casa" id="n_casa" value="">
        </div>


        <div class="inputForm">
          <label for="direccion">Direccion de casa o Residencia</label>
          <textarea name="name" id="direccion" placeholder="Direccion"></textarea>
        </div>

        <div class="inputForm" id="ageCont">
          <div class="ageTitle">
            <label>Edades del Grupo Familiar</label>
          </div>
          <div class="age">
            <label for="age1">0-12</label><input type="number" id="age1" name="" value="" placeholder="0">
          </div>
          <div class="age">
            <label for="age2">13-20</label><input type="number" id="age2" name="" value="" placeholder="0">
          </div>
          <div class="age">
            <label for="age3">+20</label><input type="number" id="age3" name="" value="" placeholder="0">
          </div>
        </div>

        <div class="inputForm">
          <label for="participa">¿Desea participar en el Proyecto?</label>
          <select class="" id="participa" name="">
            <option></option>
            <option>Si</option>
            <option>No</option>
          </select>
        </div>

        <div class="inputForm">
          <label for="telefono">Número de Telefono</label>
          <input type="number" id="telefono" placeholder="Telefono" name="" value="">
        </div>

        <div class="inputForm">
          <label for="email">Email</label>
          <input type="email" id="email" name="" placeholder="Email" value="">
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
    <script type="text/javascript" src="../../js/registro_casa.js"></script>
    <script type="text/javascript" src="../../js/mainJs.js"></script>
  </body>
</html>
