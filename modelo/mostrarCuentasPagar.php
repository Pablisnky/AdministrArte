<?php
	$RecibeAjax= $_GET["val_1"]; //Se recibe desde funciones_Ajax.js por medio de llamar_mostrarCuentasPagar()
	// echo $RecibeAjax;

	include("../conexion/Conexion_BD.php");

	//se busca en la BD las cuentas por pagar de la empresa
	$Consulta= "SELECT * FROM cuentas_pagar ORDER BY Fecha DESC";
	$Recordset= mysqli_query($Conexion, $Consulta);
?>
	<div class="contenedor_1">
		<table class="tabla_1">
			<thead>
                <th>CÓDIGO</th>
				<th>FECHA</th>
				<th>DESCRIPCION</th>
				<th>ACREEDOR</th>
				<th>MONTO</th>
			</thead>
			<tbody>
				<?php 
				while($Resultado= mysqli_fetch_array($Recordset)){
                    $A= $Resultado['ID_CP']; 

                    //Se formatean el monto con separación de miles y dos decimales 
                    if((!empty($Resultado["Monto"])) == ""){
                        $MontoDeuda=0;
                    } 
                    else{
					    $MontoDeuda= number_format($Resultado["Monto"], 2, ",", "."); 	
                    }   ?>
                    <tr class="tr_1">
						<td><?php echo $Resultado["ID_CP"];?></td>
						<td><?php echo $Resultado["Fecha"];?></td>
						<td><?php echo $Resultado["Descripcion"];?></td>
						<td><?php echo $Resultado["Acreedor"];?></td>
						<td><?php echo $MontoDeuda;?></td>
                        <td><input type="text" id="<?php echo $A;?>" value="<?php echo $A;?>" hidden onclick="Detalles_CuentasPagar(this.id)"><label class="label_1" for="<?php echo $A;?>">Detalles</label></td> 
					</tr>   
					<?php
				}  ?>
			</tbody>
		</table>  
	</div>		
	<div style="float: right; margin-right: 50%;">
		<?php
			// Se consulta cuanto se debe en total
			$Consulta_2= "SELECT SUM(monto) AS Total FROM cuentas_pagar";
			$Recordset_2= mysqli_query($Conexion, $Consulta_2);
			$Resultado_2= mysqli_fetch_array($Recordset_2);
			$Total= $Resultado_2["Total"];

			//Se formatean el monto con separación de miles y dos decimales 
			$Monto= number_format($Total, 2, ",", ".");
			echo "TOTAL= " . $Monto;
		?>
	</div>