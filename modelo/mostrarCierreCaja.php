<?php
	$Fecha= $_GET["val_1"]; //Se recibe desde funciones Ajax.js por medio de llamar_mostrarCierreCaja()
	 echo $Fecha;

	include("../conexion/Conexion_BD.php");

	//se busca en la BD todos los ingresos diarios
	$Consulta= "SELECT * FROM cierre_caja ORDER BY Fecha_Cierre DESC";
	$Recordset= mysqli_query($Conexion, $Consulta);
?>
	<table >
		<thead>
			<th>FECHA</th>
			<th>MONTO</th>
		</thead>
		<tbody>
			<?php 
				while($Resultado= mysqli_fetch_array($Recordset)){  
					//Se formatean el monto con separación de miles y dos decimales 
					$MontoCierre= number_format($Resultado["Monto_Cierre"], 2, ",", ".");	?>	
					<tr>
						<td><?php echo $Resultado["Fecha_Cierre"];?></td>
						<td><?php echo $MontoCierre;?></td>
					</tr>  
					<?php
				}  
					?>
		</tbody>
	</table>  	
<?php
	//Se suman todos los ingresos SELECT WEEK(Fecha_Cierre) As semana, SUM(Monto_Cierre) AS Total FROM cierre_caja GROUP BY week(Fecha_Cierre,0)

	$Consulta_2= "SELECT WEEK(Fecha_Cierre) As semana, SUM(Monto_Cierre) AS Total, 0.10 *SUM(Monto_Cierre) AS Diezmo FROM cierre_caja  GROUP BY week(Fecha_Cierre,0)";
	$Recordset_2= mysqli_query($Conexion, $Consulta_2);	
	//$Resultado= mysqli_fetch_array($Recordset_2);
	//echo "Total= " . $Resultado["Total"] . "<br>";
	?>
	<table>
		<thead>
			<th>SEMANA</th>
			<th>MONTO</th>
			<th>DIEZMO</th>
		</thead>
		<tbody>
			<?php 
				while($Resultado= mysqli_fetch_array($Recordset_2)){ 
					//Se formatean el monto con separación de miles y dos decimales  
					$Total= number_format($Resultado["Total"], 2, ",", "."); 
					$Diezmo= number_format($Resultado["Diezmo"], 2, ",", "."); ?>	
					<tr>
						<td><?php echo $Resultado["semana"];?></td>
						<td><?php echo $Total;?></td>
						<td><?php echo $Diezmo;?></td>
					</tr>   
					<?php
				}  
			?>
		</tbody>
	</table>  	
