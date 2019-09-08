var fecha = document.getElementById("fecha");
var items = document.querySelectorAll(".item");

window.addEventListener("load",function(){
  document.getElementById("btnSave").addEventListener("click",function(){
    var b = true;
    for(var i=0;i<items.length;i++){
      if(items[i].value=="")b=false;
    }
    if(fecha.value!=""&&b){
      var xhttp = new XMLHttpRequest();
      var date = fecha.value.split("-")[2]+"-"+fecha.value.split("-")[1]+"-"+fecha.value.split("-")[0];
      var params = "fecha="+date+
                   "&rsn="+items[0].value+
                   "&rst="+items[1].value+
                   "&plastic="+items[2].value+
                   "&carton="+items[3].value+
                   "&paper="+items[4].value+
                   "&glass="+items[5].value;
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          if(this.responseText=="listo"){
            for(var i=0;i<items.length;i++){
              items[i].value = "";
            }
          }
        }
      }
      xhttp.open("POST", "../controller/plastico_dia.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(params);
    }
  })

  fecha.addEventListener("change",function(){
    if(fecha.value!=""){
      var date = fecha.value.split("-")[2]+"-"+fecha.value.split("-")[1]+"-"+fecha.value.split("-")[0];
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          if(this.responseText!=""){
            var data = this.responseText.split("/");
            for(var i=0;i<items.length;i++){
              items[i].value = data[i];
            }
          }
        }
      }
      xhttp.open("GET","../controller/search_date_plastico.php?d="+date,true);
      xhttp.send();
    }
  })
})
