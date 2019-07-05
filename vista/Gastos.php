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

		<link rel="stylesheet" type="text/css" href="css/EstilosAdministrArte.css">
        <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="css/MediaQuery_EstilosAdministrArte_Movil.css"> 
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><!-- Estilos calendario-->

        <script src="../javascript/funcionesVarias.js"></script> 
        <script src="../javascript/funciones_Ajax.js"></script> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script><!--Libreria del Calendario-->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!--Libreria del Calendario-->
        <script src="../javascript/CalendarioJQwery.js"></script> <!--Formato Calendario-->
	</head>
	<body onload="llamar_mostrarGastos()"><!--llamar_mostrarGastos() se encuentra en funciones_Ajax.js -->
		<div id="Principal">
			<h1 class="anula">AdministrArte</h1>
			<p id="Texto_1" class="">Sistema de gestión administrativa de ImpresiónArte</p>
            <!-- <img class="imagen_8" alt="Logo de ImpresiónArte" src="../images/LogoImpresionArte.jpg"> -->
            <a href="../index.html">Regresar</a>
		</div>
		<div>
			<form action="../controlador/recibe_gastos.php" method="POST" autocomplete="off">
				<fieldset>
					<legend>Insertar nuevo gasto</legend>
					<table>
						<thead>
							<th>fecha</th>
							<th>Descripción</th>
							<th>Monto</th>
						</thead>
						<tbody>
							<tr>
								<td><input type="text"  name="fecha" id="Calendario_CM"></td>
								<td><textarea name="descripcion"></textarea></td>
								<td><input type="text" name="monto" id="Monto"></td>
							</tr>
						</tbody>
					</table>
					<input type="submit" value="Cargar">
				</fieldset>
			</form>
		</div>
		<div id="MostrarGastos"></div><!-- Muestra resultados de petición Ajax, trae respuesta de mostrarGastos.php-->



