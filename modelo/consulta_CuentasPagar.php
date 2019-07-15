<?php 
    //Se consulta detalles del credito; pedido de Detalles_CuentasPagar.php
    $Consulta_1="SELECT * FROM cuentas_pagar ORDER BY fecha DESC LIMIT 1 ";
    $Recordset_1= mysqli_query($Conexion, $Consulta_1);
    $Resultado_1= mysqli_fetch_array($Recordset_1);
    $ID_CP= $Resultado_1["ID_CP"];    
    $Descripcion= $Resultado_1["Descripcion"]; 
    $Acreedor= $Resultado_1["Acreedor"]; 
    $Monto= $Resultado_1["Monto"]; 
    $Fecha= $Resultado_1["Fecha"]; 
    $N_Cuotas= $Resultado_1["Numero_Cuotas"];
    $Monto_Cuota= $Resultado_1["Monto_cuota"];
    $Pagos= $Resultado_1["Pagos"];
    $Interes= $Resultado_1["Interes"];
    $Fecha_Pago= $Resultado_1["Fecha_pago"];
?>