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

        <script src="../javascript/funcionesVarias.js"></script> 
        <script src="../javascript/funciones_Ajax.js"></script> 
	</head>
	<body onload="llamar_mostrarCierreCaja()">
		<div id="Principal">
			<h1 class="anula">AdministrArte</h1>
			<p id="Texto_1" class="texto_1c">Sistema de gestión administrativa de ImpresiónArte</p>
            <img class="imagen_8" alt="Logo de ImpresiónArte" src="images/LogoImpresionArte.jpg">
            <a href="../index.html">Regresar</a>
		</div>
		<div>
			<form action="../controlador/recibe_cierre.php" method="POST" autocomplete="off">
				<fieldset>
					<legend>Insertar monto de cierre</legend>
					<label>fecha</label>
					<input type="date" name="fecha" id="Fecha">
					<br>
					<label>Monto</label>
					<input type="text" name="monto">
					<br>
					<input type="submit" value="Cargar">
				</fieldset>
			</form>
		</div>
		<div id="MostrarGastos"></div><!-- Muestra resultados de petición Ajax, trae respuesta de mostrarGastos.php-->