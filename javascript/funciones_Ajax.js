var http_request = false;
    var peticion= conexionAJAX();

    function conexionAJAX(){
        http_request = false;
        if(window.XMLHttpRequest){ // Mozilla, Safari,...
            http_request = new XMLHttpRequest();
            if(http_request.overrideMimeType){
                http_request.overrideMimeType('text/xml');
            }
        }
        else if(window.ActiveXObject){ // IE
            try{
                http_request = new ActiveXObject("Msxml2.XMLHTTP");
            } 
            catch(e){
                try{
                    http_request = new ActiveXObject("Microsoft.XMLHTTP");
                } 
                catch(e){}
            }
        }
        if(!http_request){
            alert('No es posible crear una instancia XMLHTTP');
            return false;
        }
    //    else{
    //         alert("Instancia creada exitosamente ok");
    //     }
        return http_request;
    } 

//--------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------
//Es llamada desde Gastos.php
    function llamar_mostrarGastos(){
        A=document.getElementById("Calendario_CM").value;//se inserta la fecha desde Gastos.php; en realidad pudo ser cualquier input.
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

//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
//Es llamada desde Cierre_Caja.php
    function llamar_mostrarCierreCaja(){
        A=document.getElementById("Calendario_CM_2").value;//se inserta la fecha desde Cierre_Caja.php
        var url="../modelo/mostrarCierreCaja.php?val_1=" + A;
        http_request.open('GET',url,true);     
        peticion.onreadystatechange = respuesta_mostrarCierreCaja;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        peticion.send("null");
    }                                                           
    function respuesta_mostrarCierreCaja(){
        if (peticion.readyState == 4){
            if (peticion.status == 200){
                document.getElementById('MostrarCierreCaja').innerHTML=peticion.responseText;//se recoje el resultado de la consulta
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
    }

//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
//Es llamada desde Estampados.php
    function llamar_PresupuestoEstampado(){
        A=document.formEstam.color.value;//se inserta el color 
        B=document.getElementById("Ancho").value;//se inserta el ancho 
        C=document.getElementById("Largo").value;//se inserta el largo 
        D=document.formEstam.tiempo.value;//se insertan los minutos 
        E=document.getElementById("TiempoVariado").value;//se inserta el largo 
        F=document.formEstam.tipo.value;//se inserta el tipo de vinilo 
        G=document.formEstam.anchoRollo.value;//se inserta el tipo de vinilo 
        var url="../controlador/recibe_estampados.php?val_1=" + A + "&val_2=" + B + "&val_3=" + C + "&val_4=" + D + "&val_5=" + E + "&val_6=" + F + "&val_7=" + G;
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

//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
//Es llamada desde Transferencias.php
    function llamar_Transferencia(){
        A=document.getElementById("EnvioAjax").value;
        var url="../modelo/mostrarTransferencia.php?val_1=" + A;
        http_request.open('GET',url,true);     
        peticion.onreadystatechange = respuesta_Transferencia;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        peticion.send("null");
    }                                                           
    function respuesta_Transferencia(){
        if (peticion.readyState == 4){
            if (peticion.status == 200){
                document.getElementById('MostrarTransferencia').innerHTML=peticion.responseText;//se recoje el resultado de la consulta
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
    }

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//Es llamada desde Cuentas_Pagar.php
    function llamar_mostrarCuentasPagar(){
        A=document.getElementById("EnvioAjax").value;
        var url="../modelo/mostrarCuentasPagar.php?val_1=" + A;
        http_request.open('GET',url,true);     
        peticion.onreadystatechange = respuesta_mostrarCuentasPagar;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        peticion.send("null");
    }                                                           
    function respuesta_mostrarCuentasPagar(){
        if (peticion.readyState == 4){
            if (peticion.status == 200){
                document.getElementById('MostrarCuentas_Pagar').innerHTML=peticion.responseText;//se recoje el resultado de la consulta
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
    }

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//Es lamada desde Detalles_CuentasPagar.php
    function llamar_NuevaInversion(){
        A=document.getElementById("Codigo_CP").value;
        var url="../modelo/mostrarNuevaInversion.php?val_1=" + A;
        http_request.open('GET',url,true);     
        peticion.onreadystatechange = respuesta_NuevaInversion;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        peticion.send("null");
    }                                                           
    function respuesta_NuevaInversion(){
        if (peticion.readyState == 4){
            if (peticion.status == 200){
                document.getElementById('MostrarNuevaInversion').innerHTML=peticion.responseText;//se recoje el resultado de la consulta
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
    }

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------    
//Buscar datos de transferencia. función llamada desde Transferencia.php
function llamar_datosTransferencia(nombre){

    var divContenedor= document.getElementById("carga_4");
       var xmlhttp;
        if (window.XMLHttpRequest){ // Mozilla, Safari,...
            xmlhttp = new XMLHttpRequest();
        } else 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        
        if (!xmlhttp){
            alert('No es posible crear una instancia XMLHTTP');
            return false;
        }
      /*  else{
            alert("Instancia creada exitosamente");
        }     */
    
    A=document.getElementById("MontoGiro").value;
    B=document.getElementById("Banco").value;
    C=document.getElementById("Numero").value;
    D=document.getElementById("Resultado").value;
    
    if(nombre.length === ""){//sino hay nada escrito en el input de buscar, no se ejecuta ninguna accion
        divContenedor.innerHTML="";
    }
    else{//si hay algo escrito en el input de buscar se ejecuta la peticion de Ajax
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState === 4 && this.status ===200){
                divContenedor.innerHTML = xmlhttp.responseText;
            }                   
        }
        xmlhttp.open("GET","../modelo/buscarNombre.php?nombre=" + nombre + "&val_21=" + A + "&val_22=" + B + "&val_23=" + C + "&val_24=" + D,true);//se envia la informacion cargada en el input al servidor, true significa que se va a hacer de manera asincrona se utiliza el metodo send para enviar.                                                             
        xmlhttp.send();
    }
}

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------ 
//Es llamada desde CorteVinilo.php
function llamar_PresupuestoAdhesivo(){
    A=document.formEstam.color.value;//se inserta el color 
    B=document.getElementById("Ancho").value;//se inserta el ancho 
    C=document.getElementById("Largo").value;//se inserta el largo 
    D=document.formEstam.tiempo.value;//se insertan los minutos 
    E=document.getElementById("TiempoVariado").value;//se inserta el largo 
    F=document.formEstam.tipo.value;//se inserta el tipo de vinilo 
    G=document.formEstam.anchoRollo.value;//se inserta el tipo de vinilo 
    var url="../controlador/recibe_corteVinilo.php?val_1=" + A + "&val_2=" + B + "&val_3=" + C + "&val_4=" + D + "&val_5=" + E + "&val_6=" + F + "&val_7=" + G;
    http_request.open('GET',url,true);     
    peticion.onreadystatechange = respuesta_PresupuestoAdhesivo;
    peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
    peticion.send("null");
}                                                           
function respuesta_PresupuestoAdhesivo(){
    if (peticion.readyState == 4){
        if (peticion.status == 200){
            document.getElementById('MostrarPresupuesto').innerHTML=peticion.responseText;//se recoje el resultado de la consulta
        } 
        else{
            alert('Hubo problemas con la petición.');
        }
    }
}

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------ 
//Es llamada desde Impresion.php
function llamar_PresupuestoPlotter(){
    A=document.formImpre.papel.value;//se inserta el tipo de papel 
    B=document.formImpre.tamano.value;;//se inserta el tamaño de papel
    C=document.getElementById("Ancho").value;//se inserta el ancho de papel 
    D=document.getElementById("Alto").value;//se inserta el alto de papel 
    E=document.formImpre.color.value;//se inserta el color o monocromatico de la impresion
    F=document.formImpre.P_color.value;//se inserta el % de color de la impresion 
    var url="../controlador/recibe_impresion.php?val_1=" + A + "&val_2=" + B + "&val_3=" + C + "&val_4=" + D + "&val_5=" + E + "&val_6=" + F;
    http_request.open('GET',url,true);     
    peticion.onreadystatechange = respuesta_PresupuestoPlotter;
    peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
    peticion.send("null");
}                                                           
function respuesta_PresupuestoPlotter(){
    if(peticion.readyState == 4){
        if (peticion.status == 200){
            document.getElementById('MostrarImpresion').innerHTML=peticion.responseText;//se recoje el resultado de la consulta
        } 
        else{
            alert('Hubo problemas con la petición.');
        }
    }
}

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
    