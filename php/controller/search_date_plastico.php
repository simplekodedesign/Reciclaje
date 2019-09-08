<?php
  require("db_connection.php");

  Connection::connect();

  $resp = "";

  $resultado = Connection::request("select * from plastico_dia where fecha like '".$_GET["d"]."'");

  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $resp .= $result["residuos_no_tratados"]."/";
      $resp .= $result["residuos_tratados"]."/";
      $resp .= $result["plastico"]."/";
      $resp .= $result["carton"]."/";
      $resp .= $result["papel"]."/";
      $resp .= $result["vidrio"];
    }
  }

  echo $resp;
?>
