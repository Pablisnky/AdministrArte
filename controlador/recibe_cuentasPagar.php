<?php
	$Fecha= $_POST["fecha"];
	$Descripcion= $_POST["descripcion"];
	$Acreedor= $_POST["acreedor"];
	$Monto= $_POST["monto"];

	// echo "Fecha= " . $Fecha . "<br>";
	// echo "Descripcion= " . $Descripcion . "<br>";
	// echo "Acreedor= " . $Acreedor . "<br>";
	// echo "Monto= " . $Monto . "<br>";

	//se cambia el formato de la fecha antes de introducira a la base de datos para que mysql la pueda reconocer
    $fechaFormatoMySQL = date("Y-m-d", strtotime($Fecha));
    //echo "Fecha formato Mysql= " . $fechaFormatoMySQL . "<br>";

	include("../conexion/Conexion_BD.php");

	$Insertar= "INSERT INTO cuentas_pagar(Fecha, Descripcion, Acreedor, Monto) VALUES('$fechaFormatoMySQL', '$Descripcion', '$Acreedor', '$Monto')";
	mysqli_query($Conexion, $Insertar) or die ("Algo ha ido mal en la consulta a la base de datos");

	header("Location:../vista/Gastos.php");
?>