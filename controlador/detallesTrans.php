<?php
$ID_Transferencia= $_GET["ID_Transferencia"];//Se recibe desde mostrarTransferencia.php
// echo $ID_Transferencia;
?>

<!DOCTYPE html>
<html>
    <head> 
	    <link rel="stylesheet" type="text/css" href="../css/Estilos_AdministrArte.css">
    </head>
    <body>
        <div id="Principal">
            <?php 
                include("../conexion/Conexion_BD.php");
                include("../modulos/header.php");
                include("../modelo/consultaDetalleTransferencia.php");
            ?>
        </div>
        <div>
            <fieldset class="">
                <legend>Detalles transferencia</legend>
                <label>Tasa proveedor</label>
                <input type="text" value="<?php echo $Tasa;?>" >
                <br>
                <label>Incremento</label>
                <input type="text" value="<?php echo $Incremento;?>" >
                <br>
                <label>Tasa ImpresionArte</label>
                <input type="text" value="<?php echo $TasaImpresioArte;?>">
                <br>
                <label>$ recibidos por cliente</label>
                <input type="text" value="<?php echo $Monto;?>">
                <br>
                <label>Bs ofrecidos al cliente</label>
                <input type="text"  value="<?php echo $BS_Recibe;?>">
                <br>
                <label>Transferir a Proveedor</label>
                <input type="text"  value="<?php echo $TrasferirProveedor;?>">
                <br>
                <label>Utilidad</label>
                <input type="text"  value="<?php echo $Utilidad;?>">
                <br>
                <label>Fecha</label>
                <input type="text"  value="<?php echo $Fecha;?>">
            </fieldset>
        </div>