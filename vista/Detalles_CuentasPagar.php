<?php
    $ID_CP= $_GET["ID_CP"];
    $Titulo= $_GET["pagina"];
    // echo $ID_CP;
    // echo $Titulo;
?>

<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" type="text/css" href="../css/Estilos_AdministrArte.css">
        
        <script src="../javascript/funciones_Ajax.js"></script> 
    </head>
    <body>
        <div id="Principal">
            <?php 
                include("../conexion/Conexion_BD.php");
                include("../modulos/header.php");
                include("../modelo/consulta_DetallesCuentasPagar.php");
                include("../modelo/consulta_CuentasPagar.php");
                include("../modelo/consulta_DetallesInversion.php");
            ?>
        </div>
        <div>
            <fieldset class="">
                <legend>Cuenta por pagar</legend>
                <label>Código CP</label>
                <input type="text" id="Codigo_CP" value="<?php echo $ID_CP;?>" >
                <br>
                <label>Descripción</label>
                <textarea><?php echo $Descripcion;?></textarea>
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
                <?php
                    //Consulta que ubica todas las inversiones que se hicieron con el credito
                    $Consulta_1="SELECT * FROM detalles_inversion WHERE ID_CP=9 ";
                    $Recordset= mysqli_query($Conexion, $Consulta_1); 
                ?> 
                <label class="label_1" onclick="llamar_NuevaInversion()">Insertar nueva inversión</label>
                <div id="MostrarNuevaInversion"></div><!--Inserta información traida desde mostrarNuevaInversion.php pormedio de Ajax-->
                <table>
                    <thead>
                        <th>Código inversión</th>
                        <th>Descripción inversión</th>
                        <th>Monto inversión</th>
                        <th>Fecha inversión</th>
                    </thead>
                    <tbody>
                        <?php
                        while($Resultado= mysqli_fetch_array($Recordset)){   ?>
                            <tr>
                                <td><?php echo $Resultado["ID_DI"];?></td>
                                <td><?php echo $Resultado["inversion"];?></td>
                                <td><?php echo $Resultado["monto_inversion"];?></td>
                                <td><?php echo $Resultado["fecha"];?></td>
                            </tr>
                            <?php
                        }   ?>
                            <tr>
                                <td><?php echo "TOTAL= " . $Total;?></td>
                            </tr>
                    </tbody>
                </table>
            </fieldset>
            <fieldset class="">
                <legend>Resumen</legend>
                <label>Monto invertido</label>
                <input type="text" value="<?php echo $Total;?>" >
                <br>
                <label>Monto no utilizado</label>
                <input type="text" value="<?php echo $SinInvertir;?>" >
                <br>
                <label>Observación</label>
                <input type="text" value="" >
                <br>
                <label>Total Amortizado</label>
                <input type="text" value="<?php echo $T_Amortizado;?>">
                <br>
                <label>Total por pagar</label>
                <input type="text" value="<?php echo $T_Pendiente;?>">
            </fieldset>
        </div>
    </body>
</html>