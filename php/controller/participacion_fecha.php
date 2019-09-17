<?php
  require("db_connection.php");

  Connection::connect();

  $resp = "";

  $si = 0;
  $no = 0;
  $otro = 0;

  $fechaInicio=strtotime($_GET["d"]);
  $fechaFin=strtotime($_GET["h"]);
  for($i=$fechaInicio; $i<=$fechaFin; $i+=86400){
    $resultado = Connection::request("select participa from casa_dia where fecha like '".date("d-m-Y",$i)."'");
    if($resultado->rowCount()>0){
      while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
        switch($result["participa"]){
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

  $resp = $si."_".$no."_".$otro;

  echo $resp;

?>
