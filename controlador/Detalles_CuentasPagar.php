<?php
    $ID_CP= $_GET["ID_CP"];
    // echo $ID_CP;
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
                include("../modelo/consulta_DetallesCuentasPagar.php");
                include("../modelo/consulta_CuentasPagar.php");
            ?>
        </div>
        <div>
            <fieldset class="">
                <legend>Cuenta por pagar</legend>
                <label>Código CP</label>
                <input type="text" value="<?php echo $ID_CP;?>" >
                <br>
                <label>Descripción</label>
                <input type="text" value="<?php echo $Descripcion;?>" >
                <br>
                <label>Acredor</label>
                <input type="text" value="<?php echo $Acreedor;?>">
                <br>
                <label>Monto</label>
                <input type="text" value="<?php echo $Monto;?>">
                <br>
                <label>Fecha</label>
                <input type="text" value="<?php echo $Fecha;?>">
            </fieldset>
            <fieldset class="">
                <legend>Cuotas</legend>
                <label>Numero de cuotas</label>
                <input type="text" value="<?php echo $N_Cuotas;?>" >
                <br>
                <label>Fecha de pago</label>
                <input type="text" value="<?php echo $Fecha_Pago;?>" >
                <br>
                <label>Cuotas amortizadas</label>
                <input type="text" value="<?php echo $C_Amortizada;?>">
                <br>
                <label>Cuotas pendientes</label>
                <input type="text" value="<?php echo $C_Pendiente;?>">
                <br>
                <label>Forma de pago</label>
                <input type="text" value="<?php echo $Pagos;?>">
                <br>
                <label>% Interes</label>
                <input type="text" value="<?php echo $Interes;?>">
                <br>
                <label>Monto Cuotas</label>
                <input type="text" value="<?php echo $Monto_Cuota;?>">
            </fieldset>
            <fieldset class="">
                <legend>Detalles de inversión</legend>
                <label>Código inversión</label>
                <input type="text" value="<?php echo $Tasa;?>" >
                <br>
                <label>Monto inversión</label>
                <input type="text" value="<?php echo $Incremento;?>" >
                <br>
                <label>Descripción inversión</label>
                <input type="text" value="<?php echo $Aumento;?>">
                <br>
                <label>Fecha inversión</label>
                <input type="text" value="<?php echo $Monto;?>">
                <br>
                <label>Amortizado</label>
                <input type="text" value="<?php echo $Monto;?>">
            </fieldset>
            <fieldset class="">
                <legend>Resumen</legend>
                <label>Monto no utilizado</label>
                <input type="text" value="<?php echo $Tasa;?>" >
                <br>
                <label>Observación</label>
                <input type="text" value="<?php echo $Tasa;?>" >
                <br>
                <label>Total Amortizado</label>
                <input type="text" value="<?php echo $T_Amortizado;?>">
                <br>
                <label>Total por pagar</label>
                <input type="text" value="<?php echo $T_Pendiente;?>">
            </fieldset>
        </div>