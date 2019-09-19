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
            <p><b>Residuos no tratados: </b><span class="dataTotal" id="dat0">0</span></p>
            <p><b>Residuos tratados: </b><span class="dataTotal" id="dat1">0</span></p>
            <p><b>Plastico: </b><span class="dataTotal" id="dat2">0</span></p>
            <p><b>Carton: </b><span class="dataTotal" id="dat3">0</span></p>
            <p><b>Papel: </b><span class="dataTotal" id="dat4">0</span></p>
            <p><b>Vidrio: </b><span class="dataTotal" id="dat5">0</span></p>
            <p><b>Metal: </b><span class="dataTotal" id="dat6">0</span></p>
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
