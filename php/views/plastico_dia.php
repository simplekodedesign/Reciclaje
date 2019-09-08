<!-- <?php
  session_start();
  if(!isset($_SESSION["username"])){
    echo "<script>location='../../index.php'</script>";
  }
?> -->

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
    <title>Por una Ciudad Verde</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/registro_casa.css">
  </head>
  <body id="main">
    <header class="menu" id="menuCont">
      <div class="user">
        <img src="../../img/user2.svg" alt="User">
        <h2 class="username">Por una Ciudad Verde</h2>
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
        <div>
          <div class="option" id="estadistica">
            Estadisticas
          </div>
        </div>
        <div class="option" id="btnSalir">Salir</div>
      </div>
    </header>

    <div class="principal" id="principalCont">
      <div class="container">
        <div class="titles">
          <h1>Registro de Recolección</h1>
        </div>

        <div class="inputForm">
          <label for="n_personas">Fecha de Recolección</label>
          <input type="date" style="font-size: 1.2em;" id="fecha">
        </div>

        <div class="inputForm">
          <label for="direccion">Residuos Sólidos no tratados (Kg)</label>
          <input type="text" name="" class="item" id="item0" value="">
        </div>

        <div class="inputForm">
          <label for="direccion">Residuos Sólidos tratados (Kg)</label>
          <input type="text" name="" class="item" id="item1" value="">
        </div>

        <div class="inputForm">
          <label for="direccion">Plástico</label>
          <input type="text" name="" class="item" id="item2" value="">
        </div>

        <div class="inputForm">
          <label for="direccion">Cartón</label>
          <input type="text" name="" class="item" id="item3" value="">
        </div>

        <div class="inputForm">
          <label for="direccion">Papel</label>
          <input type="text" name="" class="item" id="item4" value="">
        </div>

        <div class="inputForm">
          <label for="direccion">Vidrio</label>
          <input type="text" name="" class="item" id="item5" value="">
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
    <script type="text/javascript" src="../../js/plastico_dia.js"></script>
    <script type="text/javascript" src="../../js/mainJs.js"></script>
  </body>
</html>
