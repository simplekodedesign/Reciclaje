var t_ident = document.getElementById("t_ident");
var n_ident = document.getElementById("n_ident");
var representante = document.getElementById("representante");
var direccion = document.getElementById("direccion");
var n_personas = document.getElementById("n_personas");
var age1 = document.getElementById("age1");
var age2 = document.getElementById("age2");
var age3 = document.getElementById("age3");
var participa = document.getElementById("participa");
var telefono = document.getElementById("telefono");
var email = document.getElementById("email");

window.addEventListener("load",function(){
  document.getElementById("btnSave").addEventListener("click",function(){
    if(t_ident.value!=""&&n_ident.value!=""&&representante.value!=""&&direccion.value!=""&&n_personas.value!=""&&age1.value!=""&&age2.value!=""&&age3.value!=""&&participa.value!=""&&telefono.value!=""&&email.value!=""){
      var xhttp = new XMLHttpRequest();
      var params = "t_ident="+t_ident.value+
                   "&n_ident="+n_ident.value+
                   "&name="+representante.value+
                   "&dir="+direccion.value+
                   "&n_personas="+n_personas.value+
                   "&age1="+age1.value+
                   "&age2="+age2.value+
                   "&age3="+age3.value+
                   "&participa="+participa.value+
                   "&tlf="+telefono.value+
                   "&email="+email.value;
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          if(this.responseText=="listo"){
            t_ident.value="";
            n_ident.value="";
            representante.value="";
            direccion.value="";
            n_personas.value="";
            age1.value="";
            age2.value="";
            age3.value="";
            participa.value="";
            telefono.value="";
            email.value="";
          }
        }
      }
      xhttp.open("POST", "../controller/registro_casa.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(params);
    }
  })
})
