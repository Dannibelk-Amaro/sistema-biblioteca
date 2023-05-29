function validar(){
    var nombre, correo, contraseña, direccion, telefono, expresion;
   
    nombre = document.getElementById('nomape').value;
    correo = document.getElementById('email').value;
    contraseña = document.getElementById('pass').value;
    direccion = document.getElementById('direccion').value;
    telefono = document.getElementById('tlfono').value;
   
   expresion = /\w+@\w+\.+[a-z]/;
      
    if(nombre === "" || correo === "" || contraseña === "" || direccion === "" || telefono === "" ){
       alert("Todos los campos son obligatorios");
       return false;
    }
    else if(nombre.length>50){
       alert("El nombre no puede tener mas de 50 caracteres");
       return false;
    }
    else if(correo.length>40){
       alert("El correo no puede tener mas de 40 caracteres");
       return false;
    }
    else if(!expresion.test(correo)){
       alert("Introduzca un correo valido");
       return false;
    }
   
    else if(contraseña.length>10){
       alert("La contraseña no puede tener mas de 10 caracteres");
       return false;
    }
    else if(direccion.length>70){
       alert("La direccion no puede tener mas de 70 caracteres");
       return false;
    }
   else if(telefono.length>11){
       alert("El telefono no puede tener mas de 11 caracteres");
       return false;
    }
   
   }
   
   function numeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       er = /^[0-9 ]/;
       a = er.test(tecla);
       if(!a){
           e.preventDefault();
       }
       
   }
   function letras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       er = /^[a-z ]/;
       a = er.test(tecla);
       if(!a){
           e.preventDefault();
       }
   }
