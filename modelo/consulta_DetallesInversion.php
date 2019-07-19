<?php 
    //Se consulta detalles del credito; pedido de Detalles_CuentasPagar.php
    $Consulta_1="SELECT SUM(monto_inversion) AS Total, Monto FROM detalles_inversion INNER JOIN cuentas_pagar ON detalles_inversion.ID_CP=cuentas_pagar.ID_CP  WHERE cuentas_pagar.ID_CP=9 ";
    $Recordset_1= mysqli_query($Conexion, $Consulta_1);
    $Resultado_1= mysqli_fetch_array($Recordset_1);
    $Total= $Resultado_1["Total"];  

    //monto no utilizado
    $Credito= $Resultado_1["Monto"];
    // echo "Monto Credito= " . $Credito;

    $SinInvertir= $Credito - $Total;
?>