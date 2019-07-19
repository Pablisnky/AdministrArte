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
			<form autocomplete="off" name="formImpre" id="FormImpre">
				<fieldset class="fieldset_1">
					<legend class="legend_2">Seleccione tipo papel</legend>
					<input type="radio" name="papel" id="Bond" value="Bond">
					<label for="Bond">Bond</label>
					<br>
					<input type="radio" name="papel" id="BondAdhesivo" value="BondAdhesivo">
					<label for="BondAdhesivo">Bond adhesivo</label>
					<br>
					<input type="radio" name="papel" id="Opalina" value="Opalina">
					<label for="Opalina">Opalina</label>
					<br>
					<input type="radio" name="papel" id="Propalcote" value="Propalcote">
					<label for="Propalcote">Propalcote</label>
					<br>
					<input type="radio" name="papel" id="Periodico" value="Periodico">
					<label for="Periodico">Periodico</label>
					<br>
					<input type="radio" name="papel" id="Kraft" value="Kraft">
					<label for="Kraft">Kraft</label>
				</fieldset>
				<fieldset class="fieldset_1">
					<legend class="legend_2">Seleccione tamaño papel</legend>
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
					<input type="radio" name="tamaño" id="Octavo" value="Octavo">
					<label for="Octavo">Octavo pliego</label>
					<br>
					<input type="radio" name="tamaño" id="Oficio" value="Oficio">
					<label for="Oficio">Oficio</label>
					<br>
					<input type="radio" name="tamaño" id="Carta" value="Carta">
					<label for="Carta">Carta</label>
					<br><br>
					<label>Indique dimensiones</label>
					<label>Ancho</label>
					<input type="text" name="ancho>"
					<label>Alto</label>
					<input type="text" name="alto">
				</fieldset>
				<fieldset class="fieldset_1"> 
					<legend class="legend_2">Ajuste de color</legend>
					<input type="radio" name="color" id="Color" value="color">
					<label for="Color">Color</label>
					<br>
					<input type="radio" name="color" id="Monocromatico" value="monocromatico">
					<label for="Monocromatico">Monocromatico</label>
				</fieldset>
				<fieldset class="fieldset_1"> 
					<legend class="legend_2">Porcentaje de color</legend>
					<input type="radio" name="P_color" id="PC_10" value="10">
					<label for="PC_10">10 %</label>
					<br>
					<input type="radio" name="P_color" id="PC_20" value="20">
					<label for="PC_20">20 %</label>
					<br>
					<input type="radio" name="P_color" id="PC_30" value="30">
					<label for="PC_30">30 %</label>
					<br>
					<input type="radio" name="P_color" id="PC_40" value="40">
					<label for="PC_40">40 %</label>
					<br>
					<input type="radio" name="P_color" id="PC_50" value="50">
					<label for="PC_50">50 %</label>
					<br>
					<input type="radio" name="P_color" id="PC_60" value="60">
					<label for="PC_60">60 %</label>
					<br>
					<input type="radio" name="P_color" id="PC_70" value="70">
					<label for="PC_70">70 %</label>
					<br>
					<input type="radio" name="P_color" id="PC_80" value="80">
					<label for="PC_80">80 %</label>
					<br>
					<input type="radio" name="P_color" id="PC_90" value="90">
					<label for="PC_90">90 %</label>
					<br>
					<input type="radio" name="P_color" id="PC_100" value="100">
					<label for="PC_100">100 %</label>
				</fieldset>
				<fieldset class="fieldset_1">
					<legend class="legend_2">Descuento</legend>
				</fieldset>
					<br>
					<input type="button" value="Calcular" onclick="llamar_PresupuestoPlotter()">
			</form>
		</div>
		<div id="MostrarImpresion"></div><!-- Muestra resultados de petición Ajax, trae respuesta de mostrarImpresion.php-->
        <a class="a_1" href="../index.php">Regresar</a>

