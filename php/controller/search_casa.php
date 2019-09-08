<?php
  require("db_connection.php");

  Connection::connect();

  $resp = "";

  $resultado = Connection::request("select * from casas where n_casa like '".$_GET["n"]."'");

  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $resp .= $result["t_identidad"]."/";
      $resp .= $result["n_identidad"]."/";
      $resp .= $result["nombre"]."/";
      $resp .= $result["direccion"]."/";
      $resp .= $result["n_personas"]."/";
      $resp .= $result["age_0_12"]."/";
      $resp .= $result["age_13_20"]."/";
      $resp .= $result["age_20_100"]."/";
      $resp .= $result["participa"]."/";
      $resp .= $result["telefono"]."/";
      $resp .= $result["email"];
    }
  }else{
    $resp="no";
  }

  echo $resp;
?>
