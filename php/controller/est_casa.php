<?php
  require("db_connection.php");

  Connection::connect();

  $resp = [];
  $fila = [];

  $resultado = Connection::request("select id from casas where n_casa like '".$_GET["c"]."'");
  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $resultado2 = Connection::request("select * from casa_dia where id_casa = ".$result["id"]);
      if($resultado2->rowCount()>0){
        while($result2 = $resultado2->fetch(PDO::FETCH_ASSOC)){
          $fila = [];
          $new = array_push($fila, $result2["fecha"]);
          $new = array_push($fila, $result2["participa"]);
          $new = array_push($fila, $result2["residuos_no_tratados"]);
          $new = array_push($fila, $result2["residuos_tratados"]);
          $new = array_push($fila, $result2["plastico"]);
          $new = array_push($fila, $result2["carton"]);
          $new = array_push($fila, $result2["papel"]);
          $new = array_push($fila, $result2["vidrio"]);
          $new = array_push($fila, $result2["metal"]);
          $new = array_push($resp, $fila);
        }
      }
    }
  }

  echo json_encode($resp);

?>
