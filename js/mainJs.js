var optionsMenu = document.getElementById("menuOptions");
// var despliegue = false;
// var menuReg = document.getElementById("menuReg");
// var menuEst = document.getElementById("menuEst");

window.addEventListener("load",function(){
  // document.getElementById("showMenuReg").addEventListener("click", myToggle);
  //
  // document.getElementById("showMenuEst").addEventListener("click", myToggle);

  document.getElementById("showMenu").addEventListener("click",function(){
    optionsMenu.classList.toggle("showMenu");
  });

  document.getElementById("btnSalir").addEventListener("click",function(){
    location="../controller/logOut.php";
  });
})

// const myToggle = function () {
//   this.classList.toggle("show");
// }
