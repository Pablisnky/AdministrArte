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

        <script src="../javascript/funcionesVarias.js"></script> 
        <script src="../javascript/funciones_Ajax.js"></script> 
	</head>
	<body>
		<div id="Principal">
			<?php 
				include("../modulos/header.php");
			?>
		</div>
		<div>
			<form action="../controlador/recibe_impresion.php" method="POST" autocomplete="off" name="formImpre" id="FormImpre">
				<fieldset class="fieldset_1">
					<legend>Seleccione tipo papel</legend>
					<input type="radio" name="tipo" id="Bond" value="Bond">
					<label for="Bond">Bond</label>
					<br>
					<input type="radio" name="tipo" id="BondAdhesivo" value="BondAdhesivo">
					<label for="BondAdhesivo">Bond adhesivo</label>
					<br>
					<input type="radio" name="tipo" id="Opalina" value="Opalina">
					<label for="Opalina">Opalina</label>
					<br>
					<input type="radio" name="tipo" id="Propalcote" value="Propalcote">
					<label for="Propalcote">Propalcote</label>
					<br>
					<input type="radio" name="tipo" id="Periodico" value="Periodico">
					<label for="Periodico">Periodico</label>
					<br>
					<input type="radio" name="tipo" id="Kraft" value="Kraft">
					<label for="Kraft">Kraft</label>
					<br>
				</fieldset>
				<fieldset class="fieldset_1">
					<legend>Seleccione tamaño papel</legend>
					<input type="radio" name="tamaño" id="A0" value="A0">
					<label for="A0">A0</label>
					<br>
					<input type="radio" name="tamaño" id="A1" value="A1">
					<label for="A1">A1</label>
					<br>
					<input type="radio" name="tamaño" id="A3" value="A3">
					<label for="A3">A3</label>
					<br>
					<input type="radio" name="tamaño" id="A4" value="A4">
					<label for="A4">A4</label>
					<br>
					<input type="radio" name="tamaño" id="Pliego" value="Pliego">
					<label for="Pliego">Pliego</label>
					<br>
					<input type="radio" name="tamaño" id="Medio" value="Medio">
					<label for="Medio">Medio pliego</label>
					<br>
					<input type="radio" name="tamaño" id="Cuarto" value="Cuarto">
					<label for="Cuarto">Cuarto pliego</label>
					<br>
					<input type="radio" name="tamaño" id="Octavo" value="Oficio">
					<label for="Octavo">Octavo pliego</label>
					<br>
					<input type="radio" name="tamaño" id="Oficio" value="Oficio">
					<label for="Oficio">Oficio</label>
					<br>
					<input type="radio" name="tamaño" id="Carta" value="Carta">
					<label for="Carta">Carta</label>
					<br>
				</fieldset>
				<fieldset class="fieldset_1"> 
					<legend>Ajuste de color</legend>
					<input type="radio" name="color" id="Color" value="color">
					<label for="Color">Color</label>
					<br>
					<input type="radio" name="color" id="Monocromatico" value="monocromatico">
					<label for="Monocromatico">Monocromatico</label>
					<br>
				</fieldset>
				<fieldset class="fieldset_1">
					<legend>Descuento al mayor</legend>
				</fieldset>
					<br>
					<input type="submit" value="Presupuestar">
			</form>
		</div>
		<div id="MostrarImpresion"></div><!-- Muestra resultados de petición Ajax, trae respuesta de mostrarGastos.php-->
        <a class="a_1" href="../index.php">Regresar</a>

