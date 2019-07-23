<?php
    $Tipo_Papel= $_GET["val_1"];
    $Formato_Papel= $_GET["val_2"];
    $Ancho_Papel= $_GET["val_3"] != "" ? $Ancho_Papel= $_GET["val_3"] : $Ancho_Papel= "sin asignar" ;
    $Largo_Papel= $_GET["val_4"] != "" ? $Largo_Papel= $_GET["val_4"] : $Largo_Papel= "sin asignar" ;
    $Color_Impresion= $_GET["val_5"] != "" ? $Porcentaje_Color= $_GET["val_5"] : $Porcentaje_Color= "sin asignar" ;
    $Porcentaje_Color= $_GET["val_6"] != "" ? $Porcentaje_Color= $_GET["val_6"] : $Porcentaje_Color= "sin asignar" ;

    // echo "Tipo de papel= " . $Tipo_Papel . "<br>";
    // echo "Formato de papel= " . $Formato_Papel . "<br>";
    // echo "Ancho de papel= " . $Ancho_Papel . "<br>";
    // echo "Largo de papel= " . $Largo_Papel . "<br>";
    // echo "Color impresion= " . $Color_Impresion . "<br>";
    // echo "Porcentaje de color= " . $Porcentaje_Color . "<br>";

//Precio de la impresion según el papel 
        switch($Tipo_Papel){
            case "Bond": 
                switch($Formato_Papel){
                    case "A0":   
                        $Precio= 2;
                    break;   
                    case "A1": 
                        $Precio= 9; 
                    break;     
                    case "A3":
                        $Precio= 9; 
                    break;  
                    case "A4": 
                        $Precio= 9; 
                    break;  
                    case "Pliego": 
                        $Precio= 709; 
                    break;  
                    case "Medio":
                        $Precio= 9; 
                    break;  
                    case "Cuarto":
                        $Precio= 8; 
                    break;
                    case "Octavo": 
                        $Precio= 9; 
                    break;
                    case "Oficio": 
                        $Precio= 9; 
                    break;
                    case "Carta": 
                        $Precio= 9; 
                    break;
                } 
            case "Bond_Adhesivo":  
                switch($Formato_Papel){
                    case "A0":   
                        $Precio= 9;
                    break;   
                    case "A1": 
                        $Precio= 9; 
                    break;     
                    case "A3":
                        $Precio= 9; 
                    break;  
                    case "A4": 
                        $Precio= 9; 
                    break;  
                    case "Pliego": 
                        $Precio= 9; 
                    break;  
                    case "Medio":
                        $Precio= 9; 
                    break;  
                    case "Cuarto":
                        $Precio= 8; 
                    break;
                    case "Octavo": 
                        $Precio= 9; 
                    break;
                    case "Oficio": 
                        $Precio= 9; 
                    break;
                    case "Carta": 
                        $Precio= 9; 
                    break;
                }     
            case "Opalina": 
                switch($Formato_Papel){
                    case "A0":   
                        $Precio= 9;
                    break;   
                    case "A1": 
                        $Precio= 9; 
                    break;     
                    case "A3":
                        $Precio= 9; 
                    break;  
                    case "A4": 
                        $Precio= 9; 
                    break;  
                    case "Pliego": 
                        $Precio= 9; 
                    break;  
                    case "Medio":
                        $Precio= 9; 
                    break;  
                    case "Cuarto":
                        $Precio= 8; 
                    break;
                    case "Octavo": 
                        $Precio= 9; 
                    break;
                    case "Oficio": 
                        $Precio= 9; 
                    break;
                    case "Carta": 
                        $Precio= 9; 
                    break;
                }     
            case "Propalcote":  
                switch($Formato_Papel){
                    case "A0":   
                        $Precio= 9;
                    break;   
                    case "A1": 
                        $Precio= 9; 
                    break;     
                    case "A3":
                        $Precio= 9; 
                    break;  
                    case "A4": 
                        $Precio= 9; 
                    break;  
                    case "Pliego": 
                        $Precio= 9; 
                    break;  
                    case "Medio":
                        $Precio= 9; 
                    break;  
                    case "Cuarto":
                        $Precio= 8; 
                    break;
                    case "Octavo": 
                        $Precio= 9; 
                    break;
                    case "Oficio": 
                        $Precio= 9; 
                    break;
                    case "Carta": 
                        $Precio= 9; 
                    break;
                }     
            case "Periodico":  
                switch($Formato_Papel){
                    case "A0":   
                        $Precio= 9;
                    break;   
                    case "A1": 
                        $Precio= 9; 
                    break;     
                    case "A3":
                        $Precio= 9; 
                    break;  
                    case "A4": 
                        $Precio= 9; 
                    break;  
                    case "Pliego": 
                        $Precio= 9; 
                    break;  
                    case "Medio":
                        $Precio= 9; 
                    break;  
                    case "Cuarto":
                        $Precio= 8; 
                    break;
                    case "Octavo": 
                        $Precio= 9; 
                    break;
                    case "Oficio": 
                        $Precio= 9; 
                    break;
                    case "Carta": 
                        $Precio= 9; 
                    break;
                }     
            case "Kraft": 
                switch($Formato_Papel){
                    case "A0":   
                        $Precio= 9;
                    break;   
                    case "A1": 
                        $Precio= 9; 
                    break;     
                    case "A3":
                        $Precio= 9; 
                    break;  
                    case "A4": 
                        $Precio= 9; 
                    break;  
                    case "Pliego": 
                        $Precio= 9; 
                    break;  
                    case "Medio":
                        $Precio= 9; 
                    break;  
                    case "Cuarto":
                        $Precio= 8; 
                    break;
                    case "Octavo": 
                        $Precio= 9; 
                    break;
                    case "Oficio": 
                        $Precio= 9; 
                    break;
                    case "Carta": 
                        $Precio= 9; 
                    break;
                }     
            case "Pergamino":
                switch($Formato_Papel){
                    case "A0":   
                        $Precio= 9;
                    break;   
                    case "A1": 
                        $Precio= 9; 
                    break;     
                    case "A3":
                        $Precio= 9; 
                    break;  
                    case "A4": 
                        $Precio= 9; 
                    break;  
                    case "Pliego": 
                        $Precio= 9; 
                    break;  
                    case "Medio":
                        $Precio= 9; 
                    break;  
                    case "Cuarto":
                        $Precio= 8; 
                    break;
                    case "Octavo": 
                        $Precio= 9; 
                    break;
                    case "Oficio": 
                        $Precio= 9; 
                    break;
                    case "Carta": 
                        $Precio= 9; 
                    break;
                }      
            break;
        }   

//Calculo de papel por cm2
	// $Area= $Ancho*$Largo;
	// echo "Area de vinilo= " . $Area . "<br>";

//Valor del minuto de diseño en computadora
	$FactorTiempo= 150;  //  150$/min

//Valor de la mano de obra(montar en tapete, cortar vinilo, separar silueta, preparar tela para estampar, planchar, etc)
    $ManoObra= 1.225; //22,5% por mano de obra
    
// Incremento por impresiones a color
switch($Color_Impresion){
    case "monocromatico":   
        $Precio_Color= 1;
    break;   
    case "color":
        switch($Porcentaje_Color){
            case "10":   
                $Precio_Color= $Precio * 1.1;
            break;   
            case "20": 
                $Precio_Color= $Precio * 1.2; 
            break;     
            case "30":
                $Precio_Color= $Precio * 1.3; 
            break;  
            case "40": 
                $Precio_Color= $Precio * 1.4; 
            break;  
            case "50": 
                $Precio_Color= $Precio * 1.5; 
            break;  
            case "60":
                $Precio_Color= $Precio * 1.6; 
            break;  
            case "70":
                $Precio_Color= $Precio * 1.7;
            break;
            case "80": 
                $Precio_Color= $Precio * 1.8;
            break;
            case "90": 
                $Precio_Color= $Precio * 1.9; 
            break;
            case "100": 
                $Precio_Color= $Precio * 2;
            break;
        } 
    break;
}

//Calculo de presupuesto según datos recibidos
	$Presupuesto= ($Precio*$Precio_Color)*$ManoObra;
	echo $Presupuesto;		
?>