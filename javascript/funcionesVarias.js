//Desactiva los radio button de tiempo en caso de que se dese introducir tiempo manualmente, llamada desde Estampados.js
function DesactivaRadio(){
	var radios = document.formEstam.tiempo;

	for(var i=0, iLen=radios.length; i<iLen; i++){
		  radios[i].checked = false;
	} 
}

//Desactiva el input con tiempo manual en caso de activar tiempo desde radio butoom, llamada desde Estampados.js
function DesactivaTiemManual(){
	document.getElementById("TiempoVariado").value="";	
}

//llamada desde Transferencia.php
function calcular_Transferencia(){
	var A= document.Form_Transferencia.montoGiro.value;
	var Transferir= A / 0.48;

	//Se formatean el monto con separación de miles y dos decimales 
	var options1 = { style: 'decimal', maximumFractionDigits: 2,};
	var numberFormat1 = new Intl.NumberFormat('de-DE', options1);
	MontoTransferencia= numberFormat1.format(Transferir);
	
	var B= document.Form_Transferencia.montoTransferido.value= MontoTransferencia;
}
