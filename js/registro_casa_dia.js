var fecha = document.getElementById("fecha");
var n_casa = document.getElementById("n_casa");
var participa = document.getElementById("participa");

window.addEventListener("load",function(){
  document.getElementById("btnSave").addEventListener("click",function(){
    if(fecha.value!=""&&n_casa.value!=""&&participa.value!=""){
      var xhttp = new XMLHttpRequest();
      var date = fecha.value.split("-")[2]+"-"+fecha.value.split("-")[1]+"-"+fecha.value.split("-")[0];
      var params = "fecha="+date+
                   "&n_casa="+n_casa.value+
                   "&participa="+participa.value;
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          if(this.responseText=="listo"){
            n_casa.value = "";
            participa.value = "";
          }else if(this.responseText == "no"){
            alert("El número de casa no se encuentra registrado");
          }
        }
      }
      xhttp.open("POST", "../controller/registro_casa_dia.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(params);
    }
  })
})
