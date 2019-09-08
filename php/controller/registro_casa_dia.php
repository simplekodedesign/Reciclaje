<?php
  require("db_connection.php");

  Connection::connect();

  $resp = "";

  $resultado = Connection::request("select id from casas where n_casa like '".$_POST["n_casa"]."'");

  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $id = $result["id"];
    }

    Connection::request("insert into casa_dia (id_casa,participa,fecha) values (".$id.",'".$_POST["participa"]."','".$_POST["fecha"]."')");

    $resp = "listo";
  }else{
    $resp = "no";
  }

  echo $resp;
?>
