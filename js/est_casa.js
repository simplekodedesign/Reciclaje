var casa = document.getElementById("casa");
var table = document.getElementById("filterCont");

window.addEventListener("load",function(){
  document.getElementById("btnSearch").addEventListener("click",function(){
    if(casa.value!=""){
      var xhttp = new XMLHttpRequest();
      var cant;
      var t;
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          console.log(this.responseText);
          table.innerHTML = "<tr>"+
                            "<th>Fecha</th>"+
                            "<th>Participacion</th>"+
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
          cant = document.querySelectorAll(".participa");
          t = [0,0,0];
          for(var i = 0; i < cant.length; i++){
            switch(cant[i].innerHTML){
              case "Si":
                t[0]++;
                break;
              case "No":
                t[1]++;
                break;
              case "Otro":
                t[2]++;
                break;
            }
          }
          document.getElementById("csi").innerHTML = t[0];
          document.getElementById("cno").innerHTML = t[1];
          document.getElementById("cotro").innerHTML = t[2];
        }
      }
      xhttp.open("GET","../controller/est_casa.php?c="+casa.value,true);
      xhttp.send();
    }
  })
})
