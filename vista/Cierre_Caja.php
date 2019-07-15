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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><!-- Estilos calendario-->

        <script src="../javascript/funcionesVarias.js"></script> 
        <script src="../javascript/funciones_Ajax.js"></script> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script><!--Libreria del Calendario-->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!--Libreria del Calendario-->
        <script src="../javascript/CalendarioJQwery_2.js"></script> <!--Formato Calendario-->
	</head>
	<body onload="llamar_mostrarCierreCaja()"><!--() llamar_mostrarCierreCaja() se encuentran en funciones_Ajax.js -->
		<div id="Principal">
			<?php 
				include("../modulos/header.php");
			?>
		</div>
		<div>
			<form action="../controlador/recibe_cierre.php" method="POST" autocomplete="off">
				<fieldset class="fieldset_1">
					<legend class="legend_2">Insertar monto de cierre</legend>
					<label>fecha</label>
					<input type="text" name="fecha" id="Calendario_CM_2">
					<br>
					<label>Monto</label>
					<input type="text" name="monto">
					<br>
					<input type="submit" value="Cargar">
				</fieldset>
			</form> 
		</div>
		<div id="MostrarCierreCaja"></div><!-- Muestra resultados de petición Ajax, trae respuesta de mostrarCierreCaja.php-->
		<a href="../index.php">Regresar</a>
	</body>
</html>