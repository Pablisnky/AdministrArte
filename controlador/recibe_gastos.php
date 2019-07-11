<?php
	$Fecha= $_POST["fecha"];
	$Descripcion= $_POST["descripcion"];
	$Monto= $_POST["monto"];

	// echo "Fecha= " . $Fecha . "<br>";
	// echo "Descripcion= " . $Descripcion . "<br>";
	// echo "Monto= " . $Monto . "<br>";

	//se cambia el formato de la fecha antes de introducira a la base de datos para que mysql la pueda reconocer
    $fechaFormatoMySQL = date("Y-m-d", strtotime($Fecha));

	include("../conexion/Conexion_BD.php");

	$Insertar= "INSERT INTO gastos(Fecha, Descripcion, Monto) VALUES('$fechaFormatoMySQL', '$Descripcion', '$Monto')";
	mysqli_query($Conexion, $Insertar) or die ( "Algo ha ido mal en la consulta a la base de datos");

	header("Location:../vista/Gastos.php");
?>