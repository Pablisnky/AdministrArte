//Desactiva los radio button de tiempo en caso de que se dese introducir tiempo manualmente, llamada desde Estampados.js
function DesactivaRadio(){
	var radios = document.formEstam.tiempo;

	for(var i=0, iLen=radios.length; i<iLen; i++){
		  radios[i].checked = false;
	} 
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Desactiva el input con tiempo manual en caso de activar tiempo desde radio butoom, llamada desde Estampados.js
function DesactivaTiemManual(){
	document.getElementById("TiempoVariado").value="";	
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//llamada desde Transferencia.php
function calcular_Transferencia(){
	var A= document.Form_Transferencia.montoGiro.value;
	var B= document.getElementById("COP_Bs");
	var C= document.getElementById("Bs_COP");
	var E= document.getElementById("TasaImpresionarte").value;
	
	if(B.checked==true){
		var Transferir= E / A;
		// //Se formatean el monto con separación de miles y dos decimales 
		// var options1 = { style: 'decimal', maximumFractionDigits: 2,};
		// var numberFormat1 = new Intl.NumberFormat('de-DE', options1);
		// var MontoTransferencia= numberFormat1.format(Transferir);
		// var D= document.Form_Transferencia.Resultado.value= MontoTransferencia;
		// document.getElementById("Resultado").style.display="Block";
		alert(Transferir);
	}
	else{
		var Transferir= A * E;
		//Se formatean el monto con separación de miles y dos decimales 
		var options1 = { style: 'decimal', maximumFractionDigits: 2,};
		var numberFormat1 = new Intl.NumberFormat('de-DE', options1);
		var MontoTransferencia= numberFormat1.format(Transferir);
		var D= document.Form_Transferencia.Resultado.value= MontoTransferencia;
		document.getElementById("Resultado").style.display="Block";
	}
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde Transferencia.php
function Divisa_1(){
	var A= document.getElementById("Bs_COP");
	var B= document.getElementById("MontoGiro");
	var C= document.getElementById("MontoTransferido");

	if(A.checked==true){
		C.style.display = "block";
		B.style.visibility="false"
	}
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde mostrarTransferencia.php
function Detalles(id){
	// alert(id);
	var CI= document.getElementById(id).value;
	window.open("../controlador/detallesTrans.php?Cedula=" + CI,"anexo","width=800px,height=600px,left=300px");
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde mostrarCuentasPagar.php
function Detalles_CuentasPagar(id){
	// alert(id);
	var ID_CP= document.getElementById(id).value;
	window.open("../controlador/Detalles_CuentasPagar.php?ID_CP=" + ID_CP,"anexo","width=800px,height=600px,left=300px");
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde Transferencia.php
function configurarTasa(){
	window.open("../vista/configurarTasa.php","anexo","width=600px,height=400px,left=300px");
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde configurarTasa.php
function Calculo_1(){
	var A= document.getElementById("TasaProveedor").value;
	var B= document.getElementById("Incremento").value;

	var TasImpresion= parseFloat (A) + parseFloat (B);

	//Se formatean el monto con separación de miles y tres decimales 
	var options1 = {style: 'decimal', maximumFractionDigits: 3,};
	var numberFormat1 = new Intl.NumberFormat('de-DE', options1);
	var TasaDecimal= numberFormat1.format(TasImpresion);

	document.getElementById("TasaImpresionarte").value=TasaDecimal;
}