var filter = document.getElementById("filter");
var contenedor = document.getElementById("contenedor");
var table = document.getElementById("filterCont");

window.addEventListener("load",function(){
  filter.addEventListener("change",function(){
    for(var i = 0; i < 7; i++){
      document.getElementById("dat"+i).innerHTML = 0;
    }
    document.getElementById("csi").innerHTML = 0;
    document.getElementById("cno").innerHTML = 0;
    document.getElementById("cotro").innerHTML = 0;
    switch(filter.value){
      case "Fecha":
        contenedor.innerHTML = "<div class='inputForm'>"+
                               "<label for='n_personas'>Desde: </label>"+
                               "<input type='date' style='font-size: 1.2em;' id='desde'>"+
                               "</div>"+
                               "<div class='inputForm'>"+
                               "<label for='n_personas'>Hasta: </label>"+
                               "<input type='date' style='font-size: 1.2em;' id='hasta'>"+
                               "</div>";
        table.innerHTML = "<tr>"+
                          "<th>Fecha</th>"+
                          "<th>Residuos no Tratados</th>"+
                          "<th>Residuos Tratados</th>"+
                          "<th>Plastico</th>"+
                          "<th>Carton</th>"+
                          "<th>Papel</th>"+
                          "<th>Vidrio</th>"+
                          "<th>Metal</th>"+
                          "</tr>";
        break;
      case "Sector":
        contenedor.innerHTML = "<div class='inputForm'>"+
                               "<label for='n_personas'>Sector: </label>"+
                               "<input type='text' style='font-size: 1.2em;' id='sector'>"+
                               "</div>";
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
                          "</tr>";
        break;
      case "Casa":
        contenedor.innerHTML = "<div class='inputForm'>"+
                               "<label for='n_personas'>Casa: </label>"+
                               "<input type='text' style='font-size: 1.2em;' id='casa'>"+
                               "</div>";
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
                          "</tr>";
        break;
    }
  })

  document.getElementById("btnSearch").addEventListener("click",function(){
    if(filter.value!=""){
      switch(filter.value){
        case "Fecha":
          filterFecha();
          break;
        case "Sector":
          filterSector();
          break;
        case "Casa":
          filterCasa();
          break;
      }
    }
  })
})


function filterFecha(){
  var desde = document.getElementById("desde");
  var hasta = document.getElementById("hasta");

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
      participacion_fecha();
    }
    xhttp.open("GET","../controller/est_fecha.php?d="+d+"&h="+h,true);
    xhttp.send();
  }
}

function filterSector(){
  var sector = document.getElementById("sector");

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
        participacion_sector();
      }
    }
    xhttp.open("GET","../controller/est_sector.php?s="+sector.value,true);
    xhttp.send();
  }
}

function filterCasa(){
  var casa = document.getElementById("casa");

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
}

function participacion_fecha(){
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
  xhttp.open("GET","../controller/participacion_fecha.php?d="+d+"&h="+h,true);
  xhttp.send();
}

function participacion_sector(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data = this.responseText.split("_");
      document.getElementById("csi").innerHTML = data[0];
      document.getElementById("cno").innerHTML = data[1];
      document.getElementById("cotro").innerHTML = data[2];
    }
  }
  xhttp.open("GET","../controller/participacion_sector.php?s="+sector.value,true);
  xhttp.send();
}
