var optionsMenu = document.getElementById("menuOptions");
var despliegue = false;
var menuReg = document.getElementById("menuReg");

window.addEventListener("load",function(){
  document.getElementById("showMenuReg").addEventListener("click",function(){
    if(menuReg.style.display=="none"){
      menuReg.style.display="block";
    }else{
      menuReg.style.display="none";
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

  document.getElementById("estadistica").addEventListener("click",function(){
    location="home.php";
  })

  document.getElementById("btnSalir").addEventListener("click",function(){
    location="../controller/logOut.php";
  })
})
