<?php
	$RecibeAjax= $_GET["val_1"]; //Se recibe desde funciones Ajax.js por medio de llamar_Transferencia()
	// echo $RecibeAjax;

	include("../conexion/Conexion_BD.php");

	?>
<div style="float: left; width:80%;">
    <table class="tabla_1">
        <thead>
            <th>ID_Transferencia</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Banco</th>
            <th>Nº Cuenta</th>
            <th>Monto</th>
            <th>Fecha</th>
        </thead>
        <tbody>
            <?php 
						$Consulta_1="SELECT * FROM usuariotransferencia INNER JOIN transferencia ON usuariotransferencia.ID_UT=transferencia.ID_Usuario ORDER BY ID_Transferencia DESC";
						$Recordset_1= mysqli_query($Conexion, $Consulta_1)or die( "Algo ha ido mal en la consulta a la base de datos");
						while($Resultado_1= mysqli_fetch_array($Recordset_1)){  
                            $A= $Resultado_1['ID_Transferencia'] ?>
            <tr>
                <td><?php echo $Resultado_1['ID_Transferencia'];?></td>
                <td><?php echo $Resultado_1['nombre'];?></td>
                <td><?php echo $Resultado_1['apellido'];?></td>
                <td><?php echo $Resultado_1['cedula'];?></td>
                <td><?php echo $Resultado_1['telefono'];?></td>
                <td><?php echo $Resultado_1['banco'];?></td>
                <td><?php echo $Resultado_1['numero'];?></td>
                <td><?php echo $Resultado_1['monto_pesos'];?></td>
                <td><?php echo $Resultado_1['fecha'];?></td>
                <td><input type="text" id="<?php echo $A;?>" value="<?php echo $A;?>" hidden
                 onclick="Detalles(this.id)"><label class="label_1" for="<?php echo $A;?>">Detalles</label></td>   
            </tr> <?php
						}   ?>
        </tbody>
    </table>
</div>