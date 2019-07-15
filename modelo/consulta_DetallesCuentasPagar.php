<?php 
    //Se consulta detalles del credito; pedido de Detalles_CuentasPagar.php
    $Consulta_1="SELECT * FROM detalles_cuenta_pagar INNER JOIN cuentas_pagar ON detalles_cuenta_pagar.ID_CP=cuentas_pagar.ID_CP WHERE cuentas_pagar.ID_CP=9 ";
    $Recordset_1= mysqli_query($Conexion, $Consulta_1);
    $Resultado_1= mysqli_fetch_array($Recordset_1);
    $C_Amortizada= $Resultado_1["cuota_amortizada"];    
    $C_Pendiente= $Resultado_1["cuota_pendiente"]; 
    $T_Amortizado= $Resultado_1["total_amortizado"]; 
    $T_Pendiente= $Resultado_1["total_pendiente"]; 
?>