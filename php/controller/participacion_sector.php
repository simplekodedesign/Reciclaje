<?php
  require("db_connection.php");

  Connection::connect();

  $resultado = Connection::request("select id from casas where direccion like '%".$_GET["s"]."%'");

  $resp = "";

  $si = 0;
  $no = 0;
  $otro = 0;

  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $resultado2 = Connection::request("select participa from casa_dia where id_casa = ".$result["id"]." limit 1");
      if($resultado2->rowCount()>0){
        while($result2 = $resultado2->fetch(PDO::FETCH_ASSOC)){
          switch($result2["participa"]){
            case "Si":
              $si++;
              break;
            case "No":
              $no++;
              break;
            case "Otro":
              $otro++;
              break;
          }
        }
      }
    }
  }

  $resp = $si."_".$no."_".$otro;

  echo $resp;
?>
