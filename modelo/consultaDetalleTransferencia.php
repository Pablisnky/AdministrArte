<?php 
    //Se consulta los detalles de transferencia; pedido de detallesTrans.php
    $Consulta_1="SELECT transferencia.fecha, transferencia.transferirProveedor, tasa_Proveedor, incremento, tasa_impresionarte, recibe_Bs, monto_pesos, utilidad FROM tasa_transferencia INNER JOIN transferencia ON tasa_transferencia.ID_TT=transferencia.ID_TT INNER JOIN usuariotransferencia ON transferencia.ID_Usuario=usuariotransferencia.ID_UT WHERE transferencia.ID_Transferencia= $ID_Transferencia";
    $Recordset_1= mysqli_query($Conexion, $Consulta_1);
    $Resultado_1= mysqli_fetch_array($Recordset_1);

    $Tasa= $Resultado_1["tasa_Proveedor"];
    $TasaImpresioArte= $Resultado_1["tasa_impresionarte"];
    $Incremento= $Resultado_1["incremento"];
    $Monto= $Resultado_1["monto_pesos"];
    $BS_Recibe= $Resultado_1["recibe_Bs"];
    $Utilidad= $Resultado_1["utilidad"]; 
    $TrasferirProveedor= $Resultado_1["transferirProveedor"]; 
    $Fecha= $Resultado_1["fecha"];
    
    
    //Se eliminan los ceros decimales que no tienen valor
    $Tasa= rtrim($Tasa, '0');
    // $TasaImpresioArte= rtrim($TasaImpresioArte, '0');
    $Incremento= rtrim($Incremento, '0');
    // $Monto= rtrim($Monto, '0');
    // $BS_Recibe= rtrim($BS_Recibe, '0');
    // $Utilidad= rtrim($Utilidad, '0');
?>