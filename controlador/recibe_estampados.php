<?php
// el calculo esta basado en precio del cm2 de material, tiempo de diseño, montaje en la computadora, corte en cameo, la hora minima de un salario basico es de : 
	$Color= $_GET["val_1"];
	$Ancho= $_GET["val_2"];
	$Largo= $_GET["val_3"];
	$Tiempo= $_GET["val_4"] != "" ? $Tiempo= $_GET["val_4"] : $Tiempo= "N/A" ;
	$TiempoVariado= $_GET["val_5"] != "" ? $TiempoVariado= $_GET["val_5"] : $TiempoVariado= "N/A";

	// echo "Color= " . $Color . "<br>";
	// echo "Ancho= " . $Ancho . "<br>";
	// echo "Largo= " . $Largo . "<br>";
	// echo "Tiempo= " . $Tiempo . "<br>";
	// echo "Tiempo variado= " . $TiempoVariado . "<br>";

//Precio del vinilo textil según su color (cm2)
	switch($Color){
	    case "Amarillo": 
	    case "Azul_marino":     
        case "Azul_rey":
        case "Blanco": 
        case "Dorado": 
        case "Gris":
        case "Marron":
        case "Plateado":
        case "Rojo":   
        case "Verde": 
        case "Violeta":
	        $Vinilo= 8; //   8$/cm2 (incluye envio desde Cucuta)
	    break;
	    case "MoradoPurpuraDegradado": 
	        $Vinilo= 9; //   9$/cm2
	    break;
	}
	// echo "Color vinilo= " . $Vinilo . "<br>";
//Precio del bifass (cm2) Aplica solo con estampado de tela sobre tela
	$bifass= 3;  //   3$/cm2

//Calculo de vinilo por cm2
	$Area= $Ancho*$Largo;
	// echo "Area de vinilo= " . $Area . "<br>";

//Valor del minuto de diseño en computadora
	$FactorTiempo= 150;  //  150$/min

//Valor de la mano de obra(montar en tapete, cortar vinilo, separar silueta, preparar tela para estampar, planchar, etc)
	$ManoObra= 1.225; //22,5% por mano de obra

//Calculo de presupuesto según datos recibidos
	if($Tiempo == "N/A"){
		$Presupuesto= (($Vinilo*$Area)+($FactorTiempo*$TiempoVariado))*$ManoObra;
		echo $Presupuesto;
	}
	else{
		$Presupuesto= (($Vinilo*$Area)+($FactorTiempo*$Tiempo))*$ManoObra;
		echo $Presupuesto;		
	}

?>