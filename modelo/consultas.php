<?php 
    //Se consulta la tasa de transferencia del proveedor; pedido de configurarTasa.php
    $Consulta_1="SELECT tasa_Proveedor, (tasa_Proveedor+0.05) As aumentado, monto, incremento, utilidad FROM transferencia INNER JOIN usuariotransferencia ON transferencia.ID_Usuario=usuariotransferencia.ID_UT WHERE usuariotransferencia.cedula= $Cedula";
    $Recordset_1= mysqli_query($Conexion, $Consulta_1);
    $Resultado_1= mysqli_fetch_array($Recordset_1);
    $Tasa= $Resultado_1["tasa_Proveedor"];
    $Aumento= $Resultado_1["aumentado"];
    $Incremento= $Resultado_1["incremento"];
    $Monto= $Resultado_1["monto"];
    $BS_Recibe= $Resultado_1["monto"];
    $Utilidad= $Resultado_1["utilidad"];
?>