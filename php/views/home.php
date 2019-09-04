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
    <title>Registro</title>
    <link rel="stylesheet" href="../../css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>

    <header>
      <div class="navbar">
        <a href="home.php">Estadísticas</a>
        <a href="registro_casa.php">Registrar casa</a>
      </div>
      <div class="exit">
        <a href="#">Salir</a>
      </div>
    </header>
    <section>
      <h1>En desarrollo: Aquí se mostraran las estadisticas</h1>
    </section>
    <footer>
      <p>Sistema hecho por <a href="https:\\simplekodedesign.com">SKD</a></p>
    </footer>
  </body>
</html>
