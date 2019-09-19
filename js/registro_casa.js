var t_ident = document.getElementById("t_ident");
var n_ident = document.getElementById("n_ident");
var representante = document.getElementById("representante");
var n_casa = document.getElementById("n_casa");
var direccion = document.getElementById("direccion");
var age1 = document.getElementById("age1");
var age2 = document.getElementById("age2");
var age3 = document.getElementById("age3");
var participa = document.getElementById("participa");
var telefono = document.getElementById("telefono");
var email = document.getElementById("email");

window.addEventListener("load",function(){
  document.getElementById("btnSave").addEventListener("click",function(){
    if(t_ident.value!=""&&n_ident.value!=""&&representante.value!=""&&n_casa.value!=""&&direccion.value!=""&&age1.value!=""&&age2.value!=""&&age3.value!=""&&participa.value!=""&&telefono.value!=""&&email.value!=""){
      var xhttp = new XMLHttpRequest();
      var params = "t_ident="+t_ident.value+
                   "&n_ident="+n_ident.value+
                   "&name="+representante.value+
                   "&n_casa="+n_casa.value+
                   "&dir="+direccion.value+
                   "&n_personas="+(parseFloat(age1.value)+parseFloat(age3.value)+parseFloat(age2.value))+
                   "&age1="+age1.value+
                   "&age2="+age2.value+
                   "&age3="+age3.value+
                   "&participa="+participa.value+
                   "&tlf="+telefono.value+
                   "&email="+email.value;
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          if(this.responseText=="listo"){
            t_ident.value = "";
            n_ident.value = "";
            representante.value = "";
            n_casa.value = "";
            direccion.value = "";
            age1.value = "";
            age2.value = "";
            age3.value = "";
            participa.value = "";
            telefono.value = "";
            email.value = "";
          }
        }
      }
      xhttp.open("POST", "../controller/registro_casa.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(params);
    }
  })
  n_casa.addEventListener("keypress",function(tecla){
    if(n_casa.value!=""&&tecla.keyCode == 13){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          if(this.responseText!="no"&&this.responseText!=""){
              var data = JSON.parse(this.responseText);
              t_ident.value = data[0];
              n_ident.value = data[1];
              representante.value = data[2];
              direccion.value = data[3];
              age1.value = data[4];
              age2.value = data[5];
              age3.value = data[6];
              participa.value = data[7];
              telefono.value = data[8];
              email.value = data[9];
          }else if(this.responseText=="no"){
            alert("El número de casa no se encuentra registrado");
          }
        }
      }
      xhttp.open("GET","../controller/search_casa.php?n="+n_casa.value,true);
      xhttp.send();
    }
  })
})
