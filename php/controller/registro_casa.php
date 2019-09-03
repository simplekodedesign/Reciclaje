<?php
  require("db_connection.php");

  Connection::connect();

  $resp = "";

  $resultado = Connection::request("select id from casas where t_identidad like '".$_POST["t_ident"]."' and n_identidad like '".$_POST["n_dent"]."'");
  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $id = $result["id"];
    }
    Connection::request("update casas set
                          t_identidad='".$_POST["t_ident"]."',
                          n_identidad='".$_POST["n_ident"]."',
                          nombre='".$_POST["name"]."',
                          direccion='".$_POST["dir"]."',
                          n_personas=".$_POST["n_personas"].",
                          age_0_12=".$_POST["age1"].",
                          age_13_20=".$_POST["age2"].",
                          age_20_100=".$_POST["age3"].",
                          participa='".$_POST["participa"]."',
                          telefono='".$_POST["tlf"]."',
                          email='".$_POST["email"]."'
                          where id=".$id);
    $resp = "listo";
  }else{
    Connection::request("insert into casas (t_identidad,n_identidad,nombre,direccion,n_personas,age_0_12,age_13_20,age_20_100,participa,telefono,email) values
    ('".$_POST["t_ident"]."','".$_POST["n_ident"]."','".$_POST["name"]."','".$_POST["dir"]."',".$_POST["n_personas"].",".$_POST["age1"].",".$_POST["age2"].",".$_POST["age3"].",'".$_POST["participa"]."','".$_POST["tlf"]."','".$_POST["email"]."')");
    $resp = "listo";
  }

  echo $resp;
?>
