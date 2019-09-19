<?php
  require("db_connection.php");

  Connection::connect();

  class Data {
    public $resp = [];
    public $datanum = 1; //Será la longitud a obviar para acumular data.
  }

  $data = new Data();

  $fila = [];
  $fechaInicio=strtotime($_GET["d"]);
  $fechaFin=strtotime($_GET["h"]);
  for($i=$fechaInicio; $i<=$fechaFin; $i+=86400){
    $resultado = Connection::request("select * from plastico_dia where fecha like '".date("d-m-Y",$i)."'");
    if($resultado->rowCount()>0){
      while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
        $fila = [];
        $new = array_push($fila, $result["fecha"]);
        $new = array_push($fila, $result["residuos_no_tratados"]);
        $new = array_push($fila, $result["residuos_tratados"]);
        $new = array_push($fila, $result["plastico"]);
        $new = array_push($fila, $result["carton"]);
        $new = array_push($fila, $result["papel"]);
        $new = array_push($fila, $result["vidrio"]);
        $new = array_push($fila, $result["metal"]);
        $new = array_push($data->resp, $fila);
      }
    }
  }

  echo json_encode($data);

?>
