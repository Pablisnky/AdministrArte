<?php 
    //Se consulta la tasa de transferencia del proveedor; pedido de Transferencia.php
    $Consulta_1="SELECT tasa, (tasa+0.05) As aumentado FROM tasa_transferencia WHERE  fecha= CURDATE() ORDER BY ID_TT DESC ";
    $Recordset_1= mysqli_query($Conexion, $Consulta_1);
    $Resultado_1= mysqli_fetch_array($Recordset_1);
    $Tasa= $Resultado_1["tasa"];
?>