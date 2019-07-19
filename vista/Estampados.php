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
			<form autocomplete="off" name="formEstam" id="FormEstam">
				<fieldset class="fieldset_1">
					<legend class="legend_2">Tipo de vinilo textil</legend>
					<input type="radio" name="tipo" id="Estandar" value="estandar">
					<label for="Estandar">Estandar</label><!--$ 25.000/m x 50 cm ancho-->
					<br>
					<input type="radio" name="tipo" id="Imprimible" value="imprimible">
					<label for="Imprimible">Imprimible</label><!--$ 25.000/m x 50 cm ancho-->
					<br>
					<input type="radio" name="tipo" id="Flock_gamuza" value="flock_gamuza">
					<label for="Flock_gamuza">Flock</label><!--$ 34.000/m x 50 cm ancho-->
					<br>
					<input type="radio" name="tipo" id="Glitter" value="glitter">
					<label for="Glitter">Glitter</label><!--$ 37.000/m x 50 cm ancho-->
				</fieldset>

				<fieldset class="fieldset_1">
					<legend class="legend_2">Ancho de rollo</legend>
					<input type="radio" name="anchoRollo" id="A_30" value="30" onclick="habilitar_RolloColor()">
					<label for="A_30">30 cm</label>
					<br>
					<input type="radio" name="anchoRollo" id="A_50" value="50" onclick="habilitar_RolloColor()">
					<label for="A_50">50 cm</label>
				</fieldset>

				<fieldset class="fieldset_1">
					<legend class="legend_2">Indique color</legend>
					<input type="radio" name="color" id="Blanco" value="blanco">
					<label for="Blanco">Blanco</label>
					<br>
					<input type="radio" name="color" id="Negro" value="negro">
					<label for="Negro">Negro</label>
					<br>
					<input type="radio" name="color" id="Azul_rey_3" value="azul_rey_3">
					<label for="Azul_rey_3">Azul_rey</label>
					<br>
					<input type="radio" name="color" id="Axul_Marino_4" value="azul_Marino_4">
					<label for="Azul_Marino_4">Azul_Marino</label>
					<br>
					<input type="radio" name="color" id="Azul_Claro_A_15" value="azul_Claro_A_15">
					<label for="Azul_Claro_A_15">Azul_Claro_A</label>
					<br>
					<input type="radio" name="color" id="Agua_23" value="agua_23">
					<label for="Agua_23">Agua</label>
					<br>
					<input type="radio" name="color" id="Amarillo_6" value="amarillo_6">
					<label for="Amarillo_6">Amarillo</label>
					<br>
					<input type="radio" name="color" id="Verde_Claro_21" value="verde_Claro_21">
					<label for="Verde_Claro_21">Verde_Claro</label>
					<br>
					<input type="radio" name="color" id="Naranja_8" value="naranja_8">
					<label for="Naranja_8">Naranja</label>
					<br>
					<input type="radio" name="color" id="Purpura_12" value="purpura_12">
					<label for="Purpura_12">Purpura</label>
					<br>
					<input type="radio" name="color" id="Rosado_13" value="rosado_13">
					<label for="Rosado_13">Rosado</label>
					<br>
					<input type="radio" name="color" id="Fucsia_25" value="fucsia_25">
					<label for="Fucsia_25">Fucsia</label>
					<br>
					<input type="radio" name="color" id="Dorado" value="dorado">
					<label for="Dorado">Dorado</label>
					<br>
					<input type="radio" name="color" id="Plateado" value="plateado">
					<label for="Plateado">Plateado</label>
					<br>
					<input type="radio" name="color" id="Rojo" value="rojo">
					<label for="Rojo">Rojo</label>
				</fieldset>

				<fieldset class="fieldset_1">
					<legend class="legend_2">Indique area</legend>
					<label>Ancho (cm)</label>
					<input type="text" name="ancho" id="Ancho">
					<br>
					<label>Largo (cm)</label>
					<input type="text" name="largo" id="Largo">
				</fieldset>

				<fieldset class="fieldset_1">
					<legend class="legend_2">Tiempo de diseño</legend>
					<input type="radio" name="tiempo" id="Tiempo_10" value="10" checked="checked" onclick="DesactivaTiemManual()">
					<label for="Tiempo_10">10 min</label>
					<br>
					<input type="radio" name="tiempo" id="Tiempo_20" value="20" onclick="DesactivaTiemManual()">
					<label for="Tiempo_20">20 min</label>
					<br>
					<input type="radio" name="tiempo" id="Tiempo_25" value="25" onclick="DesactivaTiemManual()">
					<label for="Tiempo_25">25 min</label>
					<br>
					<input type="radio" name="tiempo" id="Tiempo_30" value="30" onclick="DesactivaTiemManual()">
					<label for="Tiempo_30">30 min</label>
					<br>
					<input type="radio" name="tiempo" id="Tiempo_35" value="35" onclick="DesactivaTiemManual()">
					<label for="Tiempo_35">35 min</label>
					<br>
					<input type="radio" name="tiempo" id="Tiempo_40" value="40" onclick="DesactivaTiemManual()">
					<label for="Tiempo_40">40 min</label>
					<br>
					<input type="radio" name="tiempo" id="Tiempo_45" value="45" onclick="DesactivaTiemManual()">
					<label for="Tiempo_45">45 min</label>
					<br>
					<input type="radio" name="tiempo" id="Tiempo_50" value="50" onclick="DesactivaTiemManual()">
					<label for="Tiempo_50">50 min</label>
					<br>
					<input type="radio" name="tiempo" id="Tiempo_55" value="55" onclick="DesactivaTiemManual()">
					<label for="Tiempo_55">55 min</label>
					<br>
					<input type="radio" name="tiempo" id="Tiempo_60" value="60" onclick="DesactivaTiemManual()">
					<label for="Tiempo_60">60 min</label>
					<br>
					<label>Indique tiempo (min)</label>
					<input type="text" name="tiempo_varido" id="TiempoVariado" onclick="DesactivaRadio()">
				</fieldset>
				<br>
				<input type="button" value="Calcular" onclick="llamar_PresupuestoEstampado()">
			</form>
		</div>
		<div id="MostrarPresupuesto">Presupuesto</div><!-- Muestra resultados de petición Ajax, trae respuesta de mostrarGastos.php-->
		<a class="a_1" href="../index.php">Regresar</a>
	</body>
</html>

<!-- Toda las funciones que comienzen con la palabra "llamar_......()" se encuentran en funciones_Ajax.js-->