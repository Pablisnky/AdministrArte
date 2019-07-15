<?php
	$Fecha= $_POST["fecha"];
	$Descripcion= $_POST["descripcion"];
	$Acreedor= $_POST["acreedor"];
	$Monto= $_POST["monto"];
	$NumeroCuotas= $_POST["numeroCuotas"];
	$MontoCuota= $_POST["montoCuota"];
	$Pagos= $_POST["pagos"];
	$Interes= $_POST["interes"];
	$FechaPago= $_POST["fecha_pagos"];

	echo "Fecha= " . $Fecha . "<br>";
	echo "Descripcion= " . $Descripcion . "<br>";
	echo "Acreedor= " . $Acreedor . "<br>";
	echo "Monto= " . $Monto . "<br>";
	echo "NumeroCuotas= " .$NumeroCuotas . "<br>";
	echo "MontoCuota= " . $MontoCuota . "<br>";
	echo "Pagos= " . $Pagos . "<br>";
	echo "Interes= " . $Interes . "<br>";

	//se cambia el formato de la fecha antes de introducira a la base de datos para que mysql la pueda reconocer
    $fechaFormatoMySQL = date("Y-m-d", strtotime($Fecha));
    //echo "Fecha formato Mysql= " . $fechaFormatoMySQL . "<br>";

	include("../conexion/Conexion_BD.php");

	$Insertar= "INSERT INTO cuentas_pagar(Fecha, Descripcion, Acreedor, Monto, Numero_Cuotas, Monto_cuota, Pagos, Interes, Fecha_pago) VALUES('$fechaFormatoMySQL', '$Descripcion', '$Acreedor', '$Monto', '$NumeroCuotas', '$MontoCuota', '$Pagos', '$Interes','$FechaPago')";
	mysqli_query($Conexion, $Insertar) or die ("Algo ha ido mal en la consulta a la base de datos");

	header("Location:../vista/Cuentas_Pagar.php");
?>