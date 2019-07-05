  var http_request = false;
        var peticion= conexionAJAX();

         function conexionAJAX(){
            http_request = false;
            if (window.XMLHttpRequest){ // Mozilla, Safari,...
                http_request = new XMLHttpRequest();
                if (http_request.overrideMimeType){
                    http_request.overrideMimeType('text/xml');
                }
            } else if (window.ActiveXObject){ // IE
                try {
                    http_request = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e){
                    try{
                        http_request = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {}
                }
            }
            if (!http_request){
                alert('No es posible crear una instancia XMLHTTP');
                return false;
            }
          	// else{
           //      alert("Instancia creada exitosamente ok");
           //  }
           return http_request;
        } 

//--------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------
//Es llamada desde Gastos.php
    function llamar_mostrarGastos(){
        A=document.getElementById("Calendario_CM").value;//se inserta la fecha desde Gastos.php
        var url="../modelo/mostrarGastos.php?val_1=" + A;
        http_request.open('GET',url,true);     
        peticion.onreadystatechange = respuesta_mostrarGastos;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        peticion.send("null");
    }                                                           
    function respuesta_mostrarGastos(){
        if (peticion.readyState == 4){
            if (peticion.status == 200){
                document.getElementById('MostrarGastos').innerHTML=peticion.responseText;//se recoje el resultado de la consulta
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
    }

//--------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------
//Es llamada desde Cierre_Caja.php
    function llamar_mostrarCierreCaja(){
        A=document.getElementById("Fecha").value;//se inserta la fecha desde Gastos.php
        var url="../modelo/mostrarCierreCaja.php?val_1=" + A;
        http_request.open('GET',url,true);     
        peticion.onreadystatechange = respuesta_mostrarCierreCaja;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        peticion.send("null");
    }                                                           
    function respuesta_mostrarCierreCaja(){
        if (peticion.readyState == 4){
            if (peticion.status == 200){
                document.getElementById('MostrarGastos').innerHTML=peticion.responseText;//se recoje el resultado de la consulta
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
    }

//--------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------
//Es llamada desde Estampados.php
    function llamar_PresupuestoEstampado(){
        A=document.formEstam.color.value;//se inserta el color desde Estampados.php
        B=document.getElementById("Ancho").value;//se inserta el ancho desde Estampados.php
        C=document.getElementById("Largo").value;//se inserta el largo desde Estampados.php
        D=document.formEstam.tiempo.value;//se insertan los minutos desde Estampados.php
        E=document.getElementById("TiempoVariado").value;//se inserta el largo desde Estampados.php
        var url="../controlador/recibe_estampados.php?val_1=" + A + "&val_2=" + B + "&val_3=" + C + "&val_4=" + D + "&val_5=" + E;
        http_request.open('GET',url,true);     
        peticion.onreadystatechange = respuesta_PresupuestoEstampado;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        peticion.send("null");
    }                                                           
    function respuesta_PresupuestoEstampado(){
        if (peticion.readyState == 4){
            if (peticion.status == 200){
                document.getElementById('MostrarPresupuesto').innerHTML=peticion.responseText;//se recoje el resultado de la consulta
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
    }
