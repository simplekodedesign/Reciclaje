<?php
  require("db_connection.php");

  Connection::connect();

  $resultado = Connection::request("select id from casas where direccion like '%".$_GET["s"]."%'");

  $resp = [0,0,0];

  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $resultado2 = Connection::request("select participa from casa_dia where id_casa = ".$result["id"]." limit 1");
      if($resultado2->rowCount()>0){
        while($result2 = $resultado2->fetch(PDO::FETCH_ASSOC)){
          switch($result2["participa"]){
            case "Si":
              $resp[0]++;
              break;
            case "No":
              $resp[1]++;
              break;
            case "Otro":
              $resp[2]++;
              break;
          }
        }
      }
    }
  }

  echo json_encode($resp);
?>
