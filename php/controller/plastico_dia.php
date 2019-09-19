<?php
  require("db_connection.php");

  Connection::connect();

  $resp = "";

  $resultado = Connection::request("select id from plastico_dia where fecha like '".$_POST["fecha"]."'");
  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $id = $result["id"];
    }

    Connection::request("update plastico_dia set
                          fecha='".$_POST["fecha"]."',
                          residuos_no_tratados='".$_POST["rsn"]."',
                          residuos_tratados='".$_POST["rst"]."',
                          plastico='".$_POST["plastic"]."',
                          carton='".$_POST["carton"]."',
                          papel=".$_POST["paper"].",
                          vidrio=".$_POST["glass"].",
                          metal=".$_POST["metal"]."
                          where id=".$id);
    $resp = "listo";
  }else{
    Connection::request("insert into plastico_dia (fecha,residuos_no_tratados,residuos_tratados,plastico,carton,papel,vidrio,metal) values
    ('".$_POST["fecha"]."',".$_POST["rsn"].",".$_POST["rst"].",".$_POST["plastic"].",".$_POST["carton"].",".$_POST["paper"].",".$_POST["glass"].",".$_POST["metal"].")");
    $resp = "listo";
  }

  echo $resp;
?>
