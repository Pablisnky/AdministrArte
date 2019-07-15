<?php
// el calculo esta basado en precio del cm2 de material, tiempo de diseño, montaje en la computadora, corte en cameo, la hora minima de un salario basico es de : 
	$Papel= $_GET["val_1"];
	$Tamaño= $_GET["val_2"];
	$Color= $_GET["val_3"];

	echo "Papel= " . $Papel . "<br>";
	echo "Tamaño= " . $Tamaño . "<br>";
	echo "Color= " . $Color . "<br>";
exit();
//Precio de la impresion según el papel 
	switch($Papel){
	    case "Bond": 
	    case "Bond_Adhesivo":     
        case "Opalina":
        case "Propalcote": 
        case "Periodico": 
        case "Kraft":
        case "Pergamino":
	        $Papel= 8; //   8$ (incluye envio desde Cucuta)
	    break;
    }
   
//Precio de la impresion según el tamaño 
switch($Tamano){
    case "A0 ": 
    case "A1":     
    case "A3":
    case "A4": 
    case "Pliego": 
    case "Medio":
    case "Cuarto":
        $Tamano= 8; //   8$(incluye envio desde Cucuta)
    break;
    case "Octavo": 
        $Tamano= 9; //   9$
    break;
    case "Oficio": 
        $Tamano= 9; //   9$
    break;
    case "Carta": 
        $Tamano= 9; //   9$
    break;
}    
 //Precio de la impresion según el color
switch($Color){
    case "color": 
        $Color= 9; //   9$
    break;
    case "monocromatico": 
        $Color= 9; //   9$
    break;
}      

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