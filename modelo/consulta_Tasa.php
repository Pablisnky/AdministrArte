<?php 
    //Se consulta la tasa de transferencia del proveedor; pedido de Transferencia.php
    $Consulta_1="SELECT tasa_proveedor, (tasa_proveedor + 0.05) As aumentado, incremento FROM tasa_transferencia ORDER BY fecha DESC LIMIT 1 ";
    $Recordset_1= mysqli_query($Conexion, $Consulta_1);
    $Resultado_1= mysqli_fetch_array($Recordset_1);
    $Tasa= $Resultado_1["tasa_proveedor"];    
    $Incremento= $Resultado_1["incremento"];
    $TasaImpresionarte= $Resultado_1["aumentado"];
?>