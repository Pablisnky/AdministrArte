<?php
//Recibe datos desde CorteVinilo.php por medio de funciones_Ajax.js
$Color= $_GET["val_1"];
$Ancho= $_GET["val_2"];
$Largo= $_GET["val_3"];
$Tiempo= $_GET["val_4"] != "" ? $Tiempo= $_GET["val_4"] : $Tiempo= "sin asignar" ;
$TiempoVariado= $_GET["val_5"] != "" ? $TiempoVariado= $_GET["val_5"] : $TiempoVariado= "sin asignar" ;
$Tipo= $_GET["val_6"];
$AnchoRollo= $_GET["val_7"];

// echo "Color: " . $Color . "<br>";
// echo "Ancho: " . $Ancho . "<br>";
// echo "Largo: " . $Largo . "<br>";
// echo "Tiempo: " . $Tiempo . "<br>";
// echo "Tiempo variado:" . $TiempoVariado . "<br>";
// echo "Tipo: " . $Tipo . "<br>";
// echo "Ancho rollo: " . $AnchoRollo . "<br>";


switch($Color){
	case "blancoMate": 
        $Precio= 1.33; //0.8 $/cm2
    break;
    default:
    $Precio= 0.83; //0.8 $/cm2
}

//Incremento de 30% por envio, mantenerlo en stock, entre otras.
    $Precio= $Precio + ($Precio * 1);

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