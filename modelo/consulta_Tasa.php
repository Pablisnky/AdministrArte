<?php 
    //Se consulta la tasa de transferencia del proveedor; pedido de Transferencia.php
    $Consulta_1="SELECT ID_TT, tasa_proveedor, (tasa_proveedor + 0.05) As aumentado, incremento FROM tasa_transferencia ORDER BY fecha DESC LIMIT 1 ";
    $Recordset_1= mysqli_query($Conexion, $Consulta_1);
    $Resultado_1= mysqli_fetch_array($Recordset_1);
    $ID_TT= $Resultado_1["ID_TT"];
    $Tasa= $Resultado_1["tasa_proveedor"];    
    $Incremento= $Resultado_1["incremento"];
    $TasaImpresionarte= $Resultado_1["aumentado"];

    //Se cambia el formato de la tasa del proveedor para mostrar en pantalla con ',' 
	$Tasa= str_replace('.',',',$Tasa); 
	$Incremento= str_replace('.',',',$Incremento); 
    $TasaImpresionarte= str_replace('.',',',$TasaImpresionarte); 
    
    //Se eliminan los ceros decimales que no tienen valor
    $Tasa= rtrim($Tasa, '0');
    $Incremento= rtrim($Incremento, '0');
    $TasaImpresionarte= rtrim($TasaImpresionarte, '0');
?>