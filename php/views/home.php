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
            <a href="registro_casa.php"><div class="option">Casa</div></a>
            <a href="registro_casa_dia.php"><div class="option">Dia</div></a>
            <a href="plastico_dia.php"><div class="option">Plastico por Dia</div></a>
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
      <div class="skd">
        <i><b><small>Sistema Hecho por <a href="https://simplekodedesign.com" target="_blank" style="color: blue;">SKD</a></small></b></i>
      </div>
    </div>
    <script type="text/javascript" src="../../js/mainJs.js"></script>
  </body>
</html>
