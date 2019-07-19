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

	//Se reemplaza la coma por punto para poder hacer el calculo matematico
	A_1= A.replace(",",".");
	E_1= E.replace(",",".");
	
	if(B.checked==true){
		var Transferir= A_1 / E_1;
		//Se formatean el monto con separación de miles "." y dos decimales ","
		var options1 = { style: 'decimal', maximumFractionDigits: 2,};
		var numberFormat1 = new Intl.NumberFormat('de-DE', options1);
		var MontoTransferencia= numberFormat1.format(Transferir);

		//se envia el numero formateado para ser visualizado pero no sirve para realizar calculos
		var D= document.Form_Transferencia.Resultado.value= MontoTransferencia;
		document.getElementById("Resultado").style.display="Block";
	}
	else{
		var Transferir= A * E;
		//Se formatean el monto con separación de miles "." y dos decimales ","
		var options1 = { style: 'decimal', maximumFractionDigits: 2,};
		var numberFormat1 = new Intl.NumberFormat('de-DE', options1);
		var MontoTransferencia= numberFormat1.format(Transferir);

		//se envia el numero formateado para ser visualizado pero no sirve para realizar calculos
		var D= document.Form_Transferencia.Resultado.value= MontoTransferencia;
		document.getElementById("Resultado").style.display="Block";
	}
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde Transferencia.php
function Divisa_1(){
	// var A= document.getElementById("Bs_COP");
	// var B= document.getElementById("MontoGiro");
	// var C= document.getElementById("MontoTransferido");

	// if(A.checked==true){
	// 	C.style.display = "block";
	// 	B.style.visibility="false"
	// }
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde mostrarTransferencia.php
function Detalles(id){
	// alert(id);
	var CI= document.getElementById(id).value;
	window.open("../controlador/detallesTrans.php?ID_Transferencia=" + CI,"anexo","width=800px,height=600px,left=300px");
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde mostrarCuentasPagar.php
function Detalles_CuentasPagar(id){
	// alert(id);
	var ID_CP= document.getElementById(id).value;
	window.open("Detalles_CuentasPagar.php?ID_CP=" + ID_CP + "&pagina=Detalles cuentas por pagar","anexo","width=800px,height=600px,left=300px");
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

	//Se reemplaza la coma que el usuario insertó, por un punto para poder hacer el calculo
	A_1= A.replace(",",".");
	B_1= B.replace(",",".");

	//se convierten las variables en numeros decimales, javascript no reconoce numeros a menos que se le indique
	var TasImpresion= parseFloat (A_1) + parseFloat (B_1);
	var TasaDecimal_1= parseFloat(TasImpresion);
	
	//Se formatean el monto con separación de miles "." y tres decimales "," para que sea legible
	var options1 = {style: 'decimal', maximumFractionDigits: 3,};
	var numberFormat1 = new Intl.NumberFormat(options1);
	var TasaDecimal_2= numberFormat1.format(TasaDecimal_1);

	C_1= TasaDecimal_2.replace(".",",");
	
	document.getElementById("TasaImpresionarte").value = C_1;
}

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde Estampados.php 
// function habilitar_Color(){
// 	//Indica la cantidad de elementos que componen el array colors
// 	var B= document.formEstam.tipo[0];
// 	// alert(B);
// 	if(B.checked == true){
// 		var i;
// 		var A= document.formEstam.color.length;
// 		for(i=0; i<A; i++){ 
// 			if(document.formEstam.color[i]){ 
// 				document.formEstam.color[i].disabled=false;
// 			} 
// 		}
// 	}
// 	else{
// 		var e;
// 		var A= document.formEstam.color.length;
// 		for(e=0; e<A; e++){ 
// 			if(document.formEstam.color[e]){ 
// 				document.formEstam.color[e].disabled=true;
// 			} 
// 		}
// 	}
// }

//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//Llamada desde Estampados.php
function habilitar_RolloColor(){
	var A= document.formEstam.anchoRollo[0];//vinilo de 30 cm ancho
	var B= document.formEstam.anchoRollo[1];//vinilo de 50 cm ancho,
	if(A.checked == true){
		document.formEstam.color[0].disabled=true;//Blanco,
		document.formEstam.color[1].disabled=true;//Negro
		document.formEstam.color[2].disabled=true;//Azul_rey_3
		document.formEstam.color[3].disabled=true;//Axul_Marino_4
		document.formEstam.color[4].disabled=true;//Azul_Claro_A_15
		document.formEstam.color[5].disabled=true;//Agua_23
		document.formEstam.color[6].disabled=true;//Amarillo_6
		document.formEstam.color[7].disabled=true;//Verde_Claro_21
		document.formEstam.color[8].disabled=true;//Naranja_8
		document.formEstam.color[9].disabled=true;//Purpura_12
		document.formEstam.color[10].disabled=true;//Rosado_13
		document.formEstam.color[11].disabled=true;//Fucsia_25
		document.formEstam.color[12].disabled=false;//Dorado, $ 20.200/m x 30 cm ancho
		document.formEstam.color[13].disabled=false;//Plateado, $ 20.200/m x 30 cm ancho
		document.formEstam.color[14].disabled=false;//Rojo, $ 25.200/m x 30 cm ancho	
	}
	else if(B.checked == true){
		document.formEstam.color[0].disabled=false;//Blanco, $ 23.000/m x 50 cm ancho 
		document.formEstam.color[1].disabled=false;//Negro, $ 23.000/m x 50 cm ancho
		document.formEstam.color[2].disabled=false;//Azul_rey_3, $ 28.000/m x 50 cm ancho
		document.formEstam.color[3].disabled=false;//Axul_Marino_4, $ 28.000/m x 50 cm ancho
		document.formEstam.color[4].disabled=false;//Azul_Claro_A_15, $ 28.000/m x 50 cm ancho
		document.formEstam.color[5].disabled=false;//Agua_23, $ 28.000/m x 50 cm ancho
		document.formEstam.color[6].disabled=false;//Amarillo_6, $ 28.000/m x 50 cm ancho
		document.formEstam.color[7].disabled=false;//Verde_Claro_21, $ 28.000/m x 50 cm ancho
		document.formEstam.color[8].disabled=false;//Naranja_8, $ 28.000/m x 50 cm ancho
		document.formEstam.color[9].disabled=false;//Purpura_12, $ 28.000/m x 50 cm ancho
		document.formEstam.color[10].disabled=false;//Rosado_13, $ 28.000/m x 50 cm ancho
		document.formEstam.color[11].disabled=false;//Fucsia_25, $ 28.000/m x 50 cm ancho
		document.formEstam.color[12].disabled=true;//Dorado
		document.formEstam.color[13].disabled=true;//Plateado
		document.formEstam.color[14].disabled=true;//Rojo}
	}
}