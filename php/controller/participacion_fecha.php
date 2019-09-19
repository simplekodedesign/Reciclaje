<?php
  require("db_connection.php");

  Connection::connect();

  $resp = [0,0,0];

  $fechaInicio=strtotime($_GET["d"]);
  $fechaFin=strtotime($_GET["h"]);
  for($i=$fechaInicio; $i<=$fechaFin; $i+=86400){
    $resultado = Connection::request("select participa from casa_dia where fecha like '".date("d-m-Y",$i)."'");
    if($resultado->rowCount()>0){
      while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
        switch($result["participa"]){
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

  echo json_encode($resp);

?>
