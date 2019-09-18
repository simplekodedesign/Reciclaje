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
    <title>Por mi Ciudad Verde</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/estadistica.css">
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
          <h1>Estadisticas</h1>
        </div>

        <div class="">
          <select class="" name="" id="filter">
            <option></option>
            <option>Fecha</option>
            <option>Sector</option>
            <option>Casa</option>
          </select>
        </div>

        <div id="contenedor">

        </div>

        <div class="inputForm">
          <button type="button" id="btnSearch" name="button">Buscar</button>
        </div>



        

        <table id="filterCont">

        </table>










        <div class="totales">
          <div class="">
            <p><b>Residuos no tratados: </b><span id="dat0">0</span></p>
            <p><b>Residuos tratados: </b><span id="dat1">0</span></p>
            <p><b>Plastico: </b><span id="dat2">0</span></p>
            <p><b>Carton: </b><span id="dat3">0</span></p>
            <p><b>Papel: </b><span id="dat4">0</span></p>
            <p><b>Vidrio: </b><span id="dat5">0</span></p>
            <p><b>Metal: </b><span id="dat6">0</span></p>
          </div>
          <div class="">
              <p><b>Cantidad de participantes: </b><span id="csi">0</span></p>
              <p><b>Cantidad de no participantes: </b><span id="cno">0</span></p>
              <p><b>Personas que dieron otro uso: </b><span id="cotro">0</span></p>
          </div>
        </div>

      </div>
      <div class="principal" id="principalCont">
        <div class="skd">
          <i><b><small>Sistema Hecho por <a href="https://simplekodedesign.com" target="_blank" style="color: blue;">SKD</a></small></b></i>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../js/estadisticas.js"></script>
    <script type="text/javascript" src="../../js/mainJs.js"></script>
  </body>
</html>
