<?php
	$Fecha= $_POST["fecha"];
	$Monto= $_POST["monto"];

	echo "Fecha= " . $Fecha . "<br>";
	echo "Monto= " . $Monto . "<br>";

	//se cambia el formato de la fecha antes de introducir a la base de datos para que mysql la pueda reconocer
	$fechaFormatoMySQL = date("Y-m-d", strtotime($Fecha));
	
	include("../conexion/Conexion_BD.php");

	$Insertar= "INSERT INTO cierre_caja (Fecha_Cierre, Monto_Cierre) VALUES('$fechaFormatoMySQL','$Monto')";
	mysqli_query($Conexion, $Insertar) or die ( "Algo ha ido mal en la consulta a la base de datos");

	header("Location:../vista/Cierre_Caja.php");
?>