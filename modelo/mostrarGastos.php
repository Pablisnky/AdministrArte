<?php
	$Fecha= $_GET["val_1"]; //Se recibe desde funciones Ajax.js por medio de llamar_mostrarGastos()
	echo $Fecha;

	include("../conexion/Conexion_BD.php");

	//se busca en la BD todos los gastos de la empresa
	$Consulta= "SELECT * FROM gastos ORDER BY Fecha DESC";
	$Recordset= mysqli_query($Conexion, $Consulta);
	?>
			<div style="float: left;">
			<table>
				<thead>
					<th>FECHA</th>
					<th>DESCRIPCION</th>
					<th>MONTO</th>
				</thead>
				<tbody>
					<?php 
					while($Resultado= mysqli_fetch_array($Recordset)){  ?>	
						<tr>
							<td><?php echo $Resultado["Fecha"];?></td>
							<td><?php echo $Resultado["Descripcion"];?></td>
							<td><?php echo $Resultado["Monto"];?></td>
						</tr>   
						<?php
					}  ?>
				</tbody>
			</table>  
			</div>		
			<div style="float: right; margin-right: 50%;">
			<?php
			// Se consulta cuanto se gasto en el mes
			$Consulta_2= "SELECT SUM(monto) AS Total FROM gastos";
			$Recordset_2= mysqli_query($Conexion, $Consulta_2);
			$Resultado_2= mysqli_fetch_array($Recordset_2);
			$Total= $Resultado_2["Total"];
			echo "TOTAL= " . $Total;
			?>
			</div>

