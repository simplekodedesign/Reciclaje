var filter = document.getElementById("filter");
var contenedor = document.getElementById("contenedor");
var table = document.getElementById("filterCont");
var dataTotal = document.getElementsByClassName("dataTotal");

const headerStatic = ["Residuos no Tratados", "Residuos Tratados", "Plástico", "Cartón", "Papel", "Vidrio", "Metal"];

const headerSelect = [
  ["Fecha"],
  ["N° Casa", "Fecha"],
  ["Fecha", "Participación"]
];

window.addEventListener("load",function(){
  filter.addEventListener("change", tableConstructor);
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

function tableConstructor (data) {
  while(contenedor.firstElementChild)contenedor.removeChild(contenedor.firstElementChild);
  while(table.lastElementChild != table.firstElementChild)table.removeChild(table.lastChild);
  let div1, div2, label1, label2, input1, input2;
  let indexHS; // Index para headerSelect
  let tr = document.createElement("tr");
  let th; // Th para las tablas
  let columnas;
  // let value = this.value? this.value : data;
  switch (this.value ? this.value: data) {
    case "Fecha":
      indexHS = 0;
      if(this.value) {
        div1 = document.createElement("div");
        div2 = document.createElement("div");
        div1.classList.add("inputForm");
        div2.classList.add("inputForm");
        label1 = document.createElement("label");
        label2 = document.createElement("label")
        label1.setAttribute("for", "n_personas");
        label2.setAttribute("for", "n_personas");
        input1 = document.createElement("input");
        input2 = document.createElement("input");
        input1.setAttribute("type", "date");
        input2.setAttribute("type", "date");
        label1.innerHTML = "Desde: ";
        label2.innerHTML = "Hasta: ";
        input1.setAttribute("id", "desde");
        input2.setAttribute("id", "hasta");
        div1.appendChild(label1);
        div1.appendChild(input1);
        div2.appendChild(label2);
        div2.appendChild(input2);
        contenedor.appendChild(div1);
        contenedor.appendChild(div2);
      }
    break;
    case "Sector":
      indexHS = 1;
      if(this.value) {
        div1 = document.createElement("div");
        div1.classList.add("inputForm");
        label1 = document.createElement("label")
        label1.setAttribute("for", "n_personas");
        input1 = document.createElement("input");
        input1.setAttribute("type", "text");
        input1.setAttribute("id", "sector");
        label1.innerHTML = "Sector: ";
        div1.appendChild(label1);
        div1.appendChild(input1);
        contenedor.appendChild(div1);
      }
    break;
    case "Casa":
      indexHS = 2;
      if(this.value) {
        div1 = document.createElement("div");
        div1.classList.add("inputForm");
        label1 = document.createElement("label")
        label1.setAttribute("for", "n_personas");
        input1 = document.createElement("input");
        input1.setAttribute("type", "text");
        input1.setAttribute("id", "casa");
        label1.innerHTML = "Casa: ";
        div1.appendChild(label1);
        div1.appendChild(input1);
        contenedor.appendChild(div1);
      }
    break;
    default:
    break;
  }
  hs = headerSelect[indexHS];
  lengthHS = hs.length;
  columnas = headerStatic.length + lengthHS;

  for(var i = 0; i < columnas; i++) {
    th = document.createElement("th");
    if(i < lengthHS) {
      th.innerHTML = hs[i];
    } else {
      th.innerHTML = headerStatic[i - lengthHS];
    }
    tr.appendChild(th);
  }

  if(table.firstElementChild) {
    table.replaceChild(tr, table.firstElementChild);
  } else {
    table.appendChild(tr);
  }
}

function filasConstructor (data) {
  while(table.lastElementChild != table.firstElementChild)table.removeChild(table.lastChild);
  let datanum = data.datanum;
  let totales = [0, 0, 0, 0, 0, 0, 0];
  let totalesLength = totales.length;
  let tr, td;
  let filas = data.resp.length;
  let columnas = data.resp[0].length;
  if(data.participacion) {
    let participacion = data.participacion;
    let cantidades = [0, 0, 0];
  }

  for (var i = 0; i < filas; i++) {
    tr = document.createElement("tr");
    for (var j = 0; j < columnas; j++) {
      td = document.createElement("td");
      if(data.resp[i][j] == null) {
        td.innerHTML = "0";
      } else {
        td.innerHTML = data.resp[i][j];
      }

      if(participacion == 1 && i == 1) {
        switch(td.innerHTML){
          case "Si":
            cantidades[0]++;
            break;
          case "No":
            cantidades[1]++;
            break;
          case "Otro":
            cantidades[2]++;
            break;
        }
      }

      tr.appendChild(td);

      if(!(j < datanum)) {
        totales[j - datanum] += parseFloat(td.innerHTML);
      }
    }
    table.appendChild(tr);
  }
  if(participacion) {
    document.getElementById("csi").innerHTML = cantidades[0];
    document.getElementById("cno").innerHTML = cantidades[1];
    document.getElementById("cotro").innerHTML = cantidades[2];
  }
  for (var i = 0; i < totalesLength; i++) {
    dataTotal[i].innerHTML = totales[i];
  }
}


function filterFecha(){
  var desde = document.getElementById("desde");
  var hasta = document.getElementById("hasta");

  if(desde.value!=""&&hasta.vaLue!=""){
    var xhttp = new XMLHttpRequest();
    var d = desde.value.split("-")[2]+"-"+desde.value.split("-")[1]+"-"+desde.value.split("-")[0];
    var h = hasta.value.split("-")[2]+"-"+hasta.value.split("-")[1]+"-"+hasta.value.split("-")[0];
    var filas;
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        filas = JSON.parse(this.responseText);
        filasConstructor(filas);
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
    var filas;
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        filas = JSON.parse(this.responseText);
        filasConstructor(filas);
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
    var filas;
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        filas = JSON.parse(this.responseText);
        filasConstructor(filas);
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
      var data = JSON.parse(this.responseText);
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
      var data = JSON.parse(this.responseText);
      document.getElementById("csi").innerHTML = data[0];
      document.getElementById("cno").innerHTML = data[1];
      document.getElementById("cotro").innerHTML = data[2];
    }
  }
  xhttp.open("GET","../controller/participacion_sector.php?s="+sector.value,true);
  xhttp.send();
}
