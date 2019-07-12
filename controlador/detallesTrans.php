<?php
$Cedula= $_GET["Cedula"];
echo $Cedula;
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
                include("../modelo/consultas.php");
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
                <input type="text" value="<?php echo $Aumento;?>">
                <br>
                <label>$ recibidos por cliente</label>
                <input type="text" value="<?php echo $Monto;?>">
                <br>
                <label>Bs ofrecidos al cliente</label>
                <input type="text"  value="">
                <br>
                <label>Transferir a Proveedor</label>
                <input type="text"  value="">
                <br>
                <label>Utilidad</label>
                <input type="text"  value="<?php echo $Utilidad;?>">
            </fieldset>
        </div>