<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
    <title>Por una Ciudad Verde</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body id="main">
    <div class="">
      <h1>Por una Ciudad Verde</h1>
    </div>
    <form class="" action="php/controller/login.php" autocomplete="off" method="post">
      <div class="form-control user-control">
        <input type="text" name="user" value="">
      </div>
      <div class="form-control pass-control">
        <input type="password" name="pass" value="">
      </div>
      <div class="">
        <input type="submit" name="" value="LOGIN">
      </div>
    </form>
    <script type="text/javascript">
      document.getElementById("main").style.minHeight=window.outerHeight+"px";
      window.addEventListener("resize",function(){
        document.getElementById("main").style.minHeight=window.outerHeight+"px";
      })
    </script>
  </body>
</html>
