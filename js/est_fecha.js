var desde = document.getElementById("desde");
var hasta = document.getElementById("hasta");
var table = document.getElementById("filterCont");

window.addEventListener("load",function(){
  document.getElementById("btnSearch").addEventListener("click",function(){
    if(desde.value!=""&&hasta.vaLue!=""){
      var xhttp = new XMLHttpRequest();
      var d = desde.value.split("-")[2]+"-"+desde.value.split("-")[1]+"-"+desde.value.split("-")[0];
      var h = hasta.value.split("-")[2]+"-"+hasta.value.split("-")[1]+"-"+hasta.value.split("-")[0];
      var cant;
      var t;
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          table.innerHTML = "<tr>"+
                            "<th>Fecha</th>"+
                            "<th>Residuos no Tratados</th>"+
                            "<th>Residuos Tratados</th>"+
                            "<th>Plastico</th>"+
                            "<th>Carton</th>"+
                            "<th>Papel</th>"+
                            "<th>Vidrio</th>"+
                            "<th>Metal</th>"+
                            "</tr>"+this.responseText;
          for(var i = 0; i < 7; i++){
            cant = document.querySelectorAll(".item"+i);
            t = 0;
            for(var j = 0; j < cant.length; j++){
              t += parseFloat(cant[j].innerHTML);
            }
            document.getElementById("dat"+i).innerHTML = t;
          }
        }
        participacion();
      }
      xhttp.open("GET","../controller/est_fecha.php?d="+d+"&h="+h,true);
      xhttp.send();
    }
  })
})

function participacion(){
  var xhttp = new XMLHttpRequest();
  var d = desde.value.split("-")[2]+"-"+desde.value.split("-")[1]+"-"+desde.value.split("-")[0];
  var h = hasta.value.split("-")[2]+"-"+hasta.value.split("-")[1]+"-"+hasta.value.split("-")[0];
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data = this.responseText.split("_");
      document.getElementById("csi").innerHTML = data[0];
      document.getElementById("cno").innerHTML = data[1];
      document.getElementById("cotro").innerHTML = data[2];
    }
  }
  xhttp.open("GET","../controller/participacion.php?d="+d+"&h="+h,true);
  xhttp.send();
}
