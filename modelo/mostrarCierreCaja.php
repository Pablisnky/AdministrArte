<?php
	$Fecha= $_GET["val_1"]; //Se recibe desde funciones Ajax.js por medio de llamar_mostrarCierreCaja()
	// echo $Fecha;

	include("../conexion/Conexion_BD.php");

	//se busca en la BD todos los gastos de la empresa
	$Consulta= "SELECT * FROM cierre_caja";
	$Recordset= mysqli_query($Conexion, $Consulta);

	?>
			<table>
				<thead>
					<th>FECHA</th>
					<th>MONTO</th>
				</thead>
				<tbody>
					<?php 
					while($Resultado= mysqli_fetch_array($Recordset)){  ?>	
						<tr>
							<td><?php echo $Resultado["Fecha_Cierre"];?></td>
							<td><?php echo $Resultado["Monto_Cierre"];?></td>
						</tr>   <?php
					}  ?>
				</tbody>
			</table>  		

