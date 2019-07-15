<!DOCTYPE html>
<html lang="es">
	<head>
		<title>AdministrArte</title>

		<meta http-equiv="content-type"  content="text/html; charset=utf-8">
		<meta name="description" content="Directorio médico con reservas de citas en linea.">
		<meta name="keywords" content="cita medica, consulta medica, doctor, paciente, consulta medica, directorio medico">
		<meta name="author" content="Pablo Cabeza">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="expires" content="30 de junio de 2019">

		<meta name="MobileOptimized" content="width">
		<meta name="HandheldFriendly" content="true">

		<link rel="stylesheet" type="text/css" href="../css/Estilos_AdministrArte.css">
        <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="css/MediaQuery_EstilosAdministrArte_Movil.css"> 
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><!--Estilos calendario-->

        <script src="../javascript/funcionesVarias.js"></script> 
        <script src="../javascript/funciones_Ajax.js"></script> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script><!--Libreria del Calendario-->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!--Libreria del Calendario-->
    	<script src="../javascript/CalendarioJQwery.js"></script><!-- Formato Calendario -->
	</head>
	<body onload="llamar_mostrarCuentasPagar()">
		<div id="Principal">
			<?php 
				include("../modulos/header.php");
			?>
		</div>
		<div>
			<form action="../controlador/recibe_cuentasPagar.php" method="POST" autocomplete="off">
				<fieldset class="fieldset_2">
					<legend>Insertar nueva deuda</legend>
					<table>
						<thead>
							<th>Fecha</th>
                            <th>Descripción</th>
                            <th>Acreedor</th>
							<th>Monto</th>
							<th>Nº Cuotas</th>
							<th>Monto cuota</th>
							<th>Pagos</th>
							<th>Interes (%)</th>
							<th>Fecha pago</th>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="fecha" id="Calendario_CM"></td>
								<td><textarea name="descripcion"></textarea></td>
								<td><textarea name="acreedor"></textarea></td>
								<td><input type="text" name="monto" id="Monto"></td> 
								<td>
									<select name="numeroCuotas">
										<option></option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
									</select>
								</td> 
								<td><input type="text" name="montoCuota"></td> 
								<td>
									<select name="pagos">
										<option></option>
										<option>semanal</option>
										<option>quincenal</option>
										<option>mensual</option>
									</select></td> 
								<td><input type="text" name="interes"></td> 
								<td><input type="text" name="fecha_pagos"></td> 
							</tr>
						</tbody>
					</table>
					<input type="text" id="EnvioAjax" value="EnvioAjax_CuentasPagar" hidden="hidden">
					<!--solo para enviar a ajax,  -->
					<input type="submit" value="Cargar">
				</fieldset>
			</form>
		</div>
		<div id="MostrarCuentas_Pagar"></div><!-- Muestra resultados de petición Ajax, trae respuesta de mostrarCuentasPagar.php-->
		<a href="../index.php">Regresar</a>
		<br>
		<a href="">Registrar Pago</a><!--Abre un formulario para registrar el pago de una cuota o el pago total de la deuda-->
	</body>
</html>

<!--llamar_mostrarCuentasPagar() se encuentra en funciones_Ajax.js -->