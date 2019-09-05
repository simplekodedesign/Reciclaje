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
    <title>Por una Ciudad Verde</title>
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <style media="screen">
    .principal{
      display: flex;
      justify-content: center;
    }
    .skd{
      align-self: flex-end;
      margin-bottom: 100px;
    }
  </style>
  <body id="main">
    <div class="menu" id="menuCont">
      <div class="user">
        <img src="../../img/user2.svg" alt="">
        <p class="username">Por una Ciudad Verde</p>
      </div>
      <div class="menubtn">
        <img src="../../img/menu_icon.svg" id="showMenu" alt="">
      </div>
      <div class="options" id="menuOptions">
        <div>
          <div class="option" id="registrar_casa">
            Registrar Casa
          </div>
        </div>
        <div>
          <div class="option" id="estadistica">
            Estadisticas
          </div>
        </div>
        <div class="option" id="btnSalir">Salir</div>
      </div>
    </div>
    <div class="principal" id="principalCont">
      <div class="skd">
        <i><b><small>Sistema Hecho por <a href="https://simplekodedesign.com" target="_blank" style="color: blue;">SKD</a></small></b></i>
      </div>
    </div>
    <script type="text/javascript">
      document.getElementById("main").style.minHeight=window.outerHeight+"px";
      window.addEventListener("resize",function(){
        document.getElementById("main").style.minHeight=window.outerHeight+"px";
      })
    </script>
    <script type="text/javascript" src="../../js/mainJs.js"></script>
  </body>
</html>
