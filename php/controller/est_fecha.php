<?php
  require("db_connection.php");

  Connection::connect();

  $resp = "";

  $fechaInicio=strtotime($_GET["d"]);
  $fechaFin=strtotime($_GET["h"]);
  for($i=$fechaInicio; $i<=$fechaFin; $i+=86400){
    $resultado = Connection::request("select * from plastico_dia where fecha like '".date("d-m-Y",$i)."'");
    if($resultado->rowCount()>0){
      while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
        $resp .= "<tr>";
        $resp .= "<td>".$result["fecha"]."</td>";
        $resp .= "<td class='item0'>".$result["residuos_no_tratados"]."</td>";
        $resp .= "<td class='item1'>".$result["residuos_tratados"]."</td>";
        $resp .= "<td class='item2'>".$result["plastico"]."</td>";
        $resp .= "<td class='item3'>".$result["carton"]."</td>";
        $resp .= "<td class='item4'>".$result["papel"]."</td>";
        $resp .= "<td class='item5'>".$result["vidrio"]."</td>";
        $resp .= "<td class='item6'>".$result["metal"]."</td>";
        $resp .= "</tr>";
      }
    }
  }

  echo $resp;

?>
