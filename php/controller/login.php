<?php
  session_start();

  require("db_connection.php");

  Connection::connect();

  $resultado = Connection::request("select * from usuarios where username like '".$_POST["user"]."'");
  if($resultado->rowCount()>0){
    while($result = $resultado->fetch(PDO::FETCH_ASSOC)){
      $pass = $result["password"];
    }

    if(password_verify($_POST["pass"],$pass)){
        $_SESSION["username"]=$_POST["user"];
        echo "<script>location='../views/home.php';</script>";
    }else{
        session_destroy();
        echo "<script>location='../../index.php';</script>";
    }
  }else{
    session_destroy();
    echo "<script>location='../../index.php';</script>";
  }
?>
