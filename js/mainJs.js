var optionsMenu = document.getElementById("menuOptions");
var despliegue = false;
var menuReg = document.getElementById("menuReg");
var menuEst = document.getElementById("menuEst");

window.addEventListener("load",function(){
  document.getElementById("showMenuReg").addEventListener("click",function(){
    if(menuReg.style.display=="none"){
      menuReg.style.display="block";
    }else{
      menuReg.style.display="none";
    }
  })

  document.getElementById("showMenuEst").addEventListener("click",function(){
    if(menuEst.style.display=="none"){
      menuEst.style.display="block";
    }else{
      menuEst.style.display="none";
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

  document.getElementById("btnSalir").addEventListener("click",function(){
    location="../controller/logOut.php";
  })
})
