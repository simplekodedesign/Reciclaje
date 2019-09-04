var optionsMenu = document.getElementById("menuOptions");
var despliegue = false;

window.addEventListener("load",function(){
  if(window.outerWidth>=500){
    document.getElementById("main").style.minHeight=window.outerHeight+"px";
    menuCont.style.minHeight=window.outerHeight+"px";
  }else{
    document.getElementById("main").style.minHeight="auto";
    menuCont.style.minHeight="50px";
  }
  window.addEventListener("resize",function(){
    if(window.outerWidth>=500){
      document.getElementById("main").style.minHeight=window.outerHeight+"px";
      menuCont.style.minHeight=window.outerHeight+"px";
      optionsMenu.style.transform = "translateY(42px)";
      despliegue = false;
    }else{
      document.getElementById("main").style.minHeight="auto";
      menuCont.style.minHeight="50px";
      optionsMenu.style.transform = "translateY(-200%)";
      despliegue = false;
    }
  })

  document.getElementById("showMenu").addEventListener("click",function(){
    if(!despliegue){
      optionsMenu.style.transform = "translateY(42px)";
      despliegue = true;
    }else{
      optionsMenu.style.transform = "translateY(-200%)";
      despliegue = false;
    }
  })

  document.getElementById("registrar_casa").addEventListener("click",function(){
    location="registro_casa.php";
  })

  document.getElementById("estadistica").addEventListener("click",function(){
    location="home.php";
  })

  document.getElementById("btnSalir").addEventListener("click",function(){
    location="../controller/logOut.php";
  })
})
