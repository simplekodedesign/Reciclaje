<?php
  require("db_connection.php");

  Connection::connect();

  $resp = "";

  $resultado = Connection::request("select id from casas where n_casa like '".$_GET["c"]."'");
  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $resultado2 = Connection::request("select * from casa_dia where id_casa = ".$result["id"]);
      if($resultado2->rowCount()>0){
        while($result2 = $resultado2->fetch(PDO::FETCH_ASSOC)){
          $resp .= "<tr>";
          $resp .= "<td>".$result2["fecha"]."</td>";
          $resp .= "<td class='participa'>".$result2["participa"]."</td>";
          $resp .= "<td class='item0'>".$result2["residuos_no_tratados"]."</td>";
          $resp .= "<td class='item1'>".$result2["residuos_tratados"]."</td>";
          $resp .= "<td class='item2'>".$result2["plastico"]."</td>";
          $resp .= "<td class='item3'>".$result2["carton"]."</td>";
          $resp .= "<td class='item4'>".$result2["papel"]."</td>";
          $resp .= "<td class='item5'>".$result2["vidrio"]."</td>";
          $resp .= "<td class='item6'>".$result2["metal"]."</td>";
          $resp .= "</tr>";
        }
      }
    }
  }

  echo $resp;

?>