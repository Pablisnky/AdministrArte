<?php
// el calculo esta basado en precio del cm2 de material, tiempo de diseño, montaje en la computadora, corte en cameo, la hora minima de un salario basico es de : 
	$Color= $_GET["val_1"] != "" ? $Color= $_GET["val_1"] : $Color= "sin asignar" ;
	$Ancho= $_GET["val_2"];
	$Largo= $_GET["val_3"];
	$Tiempo= $_GET["val_4"] != "" ? $Tiempo= $_GET["val_4"] : $Tiempo= "sin asignar" ;
	$TiempoVariado= $_GET["val_5"] != "" ? $TiempoVariado= $_GET["val_5"] : $TiempoVariado= "sin asignar";
	$Tipo= $_GET["val_6"];
	$AnchoRollo= $_GET["val_7"];

	// echo "Color= " . $Color . "<br>";
	// echo "Ancho= " . $Ancho . "<br>";
	// echo "Largo= " . $Largo . "<br>";
	// echo "Tiempo= " . $Tiempo . "<br>";
	// echo "Tiempo variado= " . $TiempoVariado . "<br>";
	// echo "Tipo= " . $Tipo . "<br>";
	// echo "Ancho de rollo= " . $AnchoRollo . "<br>";

//Precio del vinilo textil tipo y ancho de rollo
switch($Tipo){
	case "estandar": 
		switch($AnchoRollo){
			case "30": //30 cm de ancho
				switch($Color){
					case "rojo":
					$Precio= 8.3;//   8.3 $/cm2 
					//Incremento de 30% por envio, mantenerlo en stock, entre otras.
					$Precio= $Precio + ($Precio * 0.30);

					break;
					case "dorado":
					case "plateado":
						$Precio= 6.6;//   6.6 $/cm2 
						//Incremento de 30% por envio, mantenerlo en stock, entre otras.
						$Precio= $Precio + ($Precio * 0.30);
					break;
				}
			break;
			case "50": //50 cm de ancho
				switch($Color){
					case "azul_rey_3": 
					case "azul_Marino_4":     
					case "azul_Claro_A_15":
					case "agua_23": 
					case "amarillo_6": 
					case "verde_Claro_21":
					case "naranja_8":
					case "purpura_12":
					case "rosado_13":   
					case "fucsia_25": 
						$Precio= 5.6;//   5.6 $/cm2 
						//Incremento de 30% por envio, mantenerlo en stock, entre otras.
						$Precio= $Precio + ($Precio * 0.30);
					break;
					case "blanco": 
					case "negro": 
						$Precio= 4.6;//   4.6 $/cm2
						//Incremento de 30% por envio, mantenerlo en stock, entre otras.
						$Precio= $Precio + ($Precio * 0.30);
					break;
				}
			break;
		}
	break;
	case "imprimible":  
		$Precio= 5; //   5 $/cm2
		//Incremento de 30% por envio, mantenerlo en stock, entre otras.
		$Precio= $Precio + ($Precio * 0.30);
	break;    
	case "flock_gamuza": 
		$Precio= 6.8; //   6.8 $/cm2
		//Incremento de 30% por envio, mantenerlo en stock, entre otras.
		$Precio= $Precio + ($Precio * 0.30);
	break;
	case "glitter":  
		$Precio= 7.4; //   7.4 $/cm2
		//Incremento de 30% por envio, mantenerlo en stock, entre otras.
		$Precio= $Precio + ($Precio * 0.30);
	break;
}

//Precio del bifass (cm2) Aplica solo con estampado de tela sobre tela
	$bifass= 3;  //   3$/cm2

//Calculo de vinilo por cm2
	$Area= $Ancho * $Largo;
	// echo "Area de vinilo= " . $Area . "<br>";

//Valor del minuto de diseño en computadora
	$FactorTiempo= 150;  //  150$/min

//Valor de la mano de obra(montar en tapete, cortar vinilo, separar silueta, preparar tela para estampar, planchar, etc)
	$ManoObra= 1.225; //22,5% por mano de obra

//Calculo de presupuesto según datos recibidos
	if($Tiempo == "sin asignar"){
		$Presupuesto= (($Precio * $Area) + ($FactorTiempo * $TiempoVariado)) * $ManoObra;
		echo $Presupuesto;
	}
	else{
		$Presupuesto= (($Precio * $Area) + ($FactorTiempo * $Tiempo)) * $ManoObra;
		echo $Presupuesto;		
	}
?>