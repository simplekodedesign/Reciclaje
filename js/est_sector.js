var sector = document.getElementById("sector");
var table = document.getElementById("filterCont");

window.addEventListener("load",function(){
  document.getElementById("btnSearch").addEventListener("click",function(){
    if(sector.value!=""){
      var xhttp = new XMLHttpRequest();
      var cant;
      var t;
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          console.log(this.responseText);
          table.innerHTML = "<tr>"+
                            "<th>Nº Casa</th>"+
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
      }
      xhttp.open("GET","../controller/est_sector.php?s="+sector.value,true);
      xhttp.send();
    }
  })
})
