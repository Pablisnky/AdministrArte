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

        <script src="javascript/funcionesVarias.js"></script> 
	</head>
	<body>
		<div id="Principal">
			<?php 
				include("modulos/header.php");
			?>
		</div>
		<div>
			<fieldset>
				<legend>Presupuestos</legend>
				<a href="vista/Impresion.php?pagina=Impresión" name="presupuesto" id="ImpresionPlotter" value="Impresion_Plotter">Impresion Plotter</a>
				<br>
				<a href="vista/Estampados.php?pagina=Estampados" name="presupuesto" id="EstampadoVinilo" value="Estampado_Vinilo">Estampado Vinilo textil</a>
				<br>
				<a href="" name="presupuesto" id="CorteViniloAdhesivo" value="Corte_Vinilo_Adhesivo">Corte Vinilo Adhesivo</a>
				<br>
				<a href="" name="presupuesto" id="DibujoPlanos" value="Dibujo_Planos">Dibujo de planos</a>
				<br>
				<a href="" name="presupuesto" id="DiseñoGrafico" value="Diseño_Grafico">Diseño Grafico</a>
			</fieldset>

			<fieldset>
				<legend>Administración</legend>
				<a href="vista/Cierre_Caja.php?pagina=Cierre caja" id="CierreCaja" value="Cierre_Caja">Cierre Caja</a>
				<br>
				<a href="vista/Gastos.php?pagina=Gastos" id="Gastos" value="Gastos">Gasto diario</a>
				<br>
				<a href="vista/Cuentas_Pagar.php?pagina=CuentasPagar" id="CuentasPagar" value="Cuentas_Pagar">Cuentas por pagar</a>
				<br>
				<a href="" id="CuentasCobrar" value="Cuentas_Cobrar">Cuentas por cobrar</a>
				<br>
				<a href="" id="Inventario" value="Inventario">Inventario</a>
				<br>
				<a href="" id="Pedidos" value="Pedidos">Pedidos</a>
				<br>
				<a href="" id="Proveedores" value="Proveedores">Proveedores</a>
			</fieldset>
			<fieldset>
				<legend>Otras tareas</legend>
				<a href="vista/Transferencia.php?pagina=Transferencias" name="transferencia" id="Transferencia" value="Transferencias">Transferencias</a>
			</fieldset>
		</div>
	</body>
</html>