<!DOCTYPE html>
<html lang="es">

<head>
	<title>AdministrArte</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="Directorio médico con reservas de citas en linea.">
	<meta name="keywords" content="cita medica, consulta medica, doctor, paciente, consulta medica, directorio medico">
	<meta name="author" content="Pablo Cabeza">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="expires" content="30 de junio de 2019">

	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">

	<link rel="stylesheet" type="text/css" href="../css/Estilos_AdministrArte.css">
	<link rel="stylesheet" type="text/css" media="(max-width: 800px)"
		href="css/MediaQuery_EstilosAdministrArte_Movil.css">

	<script src="../javascript/funciones_Ajax.js"></script>
	<script src="../javascript/funcionesVarias.js"></script>
</head>
<body onload="llamar_Transferencia(); ">
	<div id="Principal">
		<?php 
			include("../modulos/header.php");
			include("../conexion/Conexion_BD.php");
			include("../modelo/consulta_Tasa.php");
		?>
	</div>
	<div>
		<form action="../controlador/recibe_transferencia.php" method="POST" autocomplete="off" name="Form_Transferencia" id="FormEstam">
			<fieldset class="fieldset_1">
				<label>Tasa del dia</label>
				<input type="text" id="TasaImpresionarte" value="<?php echo $TasaImpresionarte;?>" readonly>
				<br>
				<input type="radio" name="transf" id="COP_Bs" onclick="Divisa_1()" checked>
				<label for="COP_Bs">Pesos -> Bolivares</label>
				<br>
				<input type="radio" name="transf" value="" id="Bs_COP" onclick="Divisa_2()" >
				<label for="Bs_COP">Bolivaes -> Pesos</label>
				<hr>
				<legend>Conversiones</legend>
				<input type="text" name="montoGiro" id="MontoGiro" placeholder="Inserte monto">
				
				<input type="text" name="resultado" id="Resultado"  hidden>
				<br>
				<input type="button" onclick="calcular_Transferencia()" value="Cotizar"><!--calcular_Transferencia() se encuentra en funcionesVarias.js-->
				<input type="button" value="Actualizar" onclick="location.reload()"/>
			</fieldset>
			<label class="PopUp" onclick="configurarTasa()">Configurar</label>
			<hr>
			<fieldset class="fieldset_1">
				<legend>Datos transferencia</legend>
				<label for="Amarillo">Nombre</label>
				<input type="text" name="nombre" id="Nombre">
				<br>
				<label for="Azul_marino">Apellido</label>
				<input type="text" name="apellido" id="Apellido">
				<br>
				<label for="Azul_rey">Cedula</label>
				<input type="text" name="cedula" id="Cedula">
				<br>
				<label for="Azul_rey">Telefono contacto</label>
				<input type="text" name="telefono" id="Telefono">
			</fieldset>
			<fieldset class="fieldset_1">
				<legend>Datos bancario</legend>
				<label>Banco</label>
				<input type="text" name="banco" id="Banco">
				<br>
				<label>Número cuenta</label>
				<input type="text" name="numero" id="Numero">
			</fieldset>
			<br>
			<input type="text" id="EnvioAjax" value="1" hidden="hidden">
			<!--solo para enviar a ajax -->
			<input type="submit" value="Guardar">
		</form>
	</div>
	<!-- Muestra resultados de petición Ajax, trae respuesta de mostrarGastos.php-->
	<div id="MostrarTransferencia"></div>
	<br>

	<a class="" href="../index.php">Regresar</a>	