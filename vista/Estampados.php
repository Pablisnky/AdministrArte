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
	<body onload="">
		<div id="Principal">
			<h1 class="anula">AdministrArte</h1>
			<p id="Texto_1" class="">Sistema de gestión administrativa de ImpresiónArte</p>
            <!-- <img class="imagen_8" alt="Logo de ImpresiónArte" src="../images/LogoImpresionArte.jpg"> -->
            <h2>Presupuesto Estampados</h2>
		</div>
		<div>
			<form action="" method="POST" autocomplete="off" name="formEstam" id="FormEstam">
				<fieldset class="fieldset_1">
					<legend>Indique color</legend>
					<input type="radio" name="color" id="Amarillo" value="Amarillo">
					<label for="Amarillo">Amarillo</label>
					<br>
					<input type="radio" name="color" id="Azul_marino" value="Azul_marino">
					<label for="Azul_marino">Azul marino</label>
					<br>
					<input type="radio" name="color" id="Azul_rey" value="Azul_rey">
					<label for="Azul_rey">Azul rey</label>
					<br>
					<input type="radio" name="color" id="Blanco" value="Blanco">
					<label for="Blanco">Blanco</label>
					<br>
					<input type="radio" name="color" id="Dorado" value="Dorado">
					<label for="Dorado">Dorado</label>
					<br>
					<input type="radio" name="color" id="Gris" value="Gris">
					<label for="Gris">Gris</label>
					<br>
					<input type="radio" name="color" id="Marron" value="Marron">
					<label for="Marron">Marron</label>
					<br>
					<input type="radio" name="color" id="Negro" value="Negro">
					<label for="Negro">Negro</label>
					<br>
					<input type="radio" name="color" id="Plateado" value="Plateado">
					<label for="Plateado">Plateado</label>
					<br>
					<input type="radio" name="color" id="Rojo" value="Rojo">
					<label for="Rojo">Rojo</label>
					<br>
					<input type="radio" name="color" id="Verde" value="Verde">
					<label for="Verde">Verde</label>
					<br>
					<input type="radio" name="color" id="Violeta" value="Violeta">
					<label for="Violeta">Violeta</label>
				</fieldset>
				<fieldset class="fieldset_1">
					<legend>Indique area</legend>
					<label>Ancho (cm)</label>
					<input type="text" name="ancho" id="Ancho">
					<br>
					<label>Largo (cm)</label>
					<input type="text" name="largo" id="Largo">
				</fieldset>
				<fieldset class="fieldset_1">
					<legend>Tiempo de diseño</legend>
					<input type="radio" name="tiempo" id="Tiempo_20" value="20" checked="checked" onclick="DesactivaTiemManual()">
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
        <a class="a_1" href="../index.html">Regresar</a>

<script type="text/javascript">
	//Desactiva los radio button de tiempo en caso de que se dese introducir tiempo manualmente
	function DesactivaRadio(){
		var radios = document.formEstam.tiempo;

		for(var i=0, iLen=radios.length; i<iLen; i++){
	  		radios[i].checked = false;
		} 
	}

	//Desactiva el input con tiempo manual en cas de activar tiempo desde radio butoom
	function DesactivaTiemManual(){
		document.getElementById("TiempoVariado").value="";	
	}
</script>

