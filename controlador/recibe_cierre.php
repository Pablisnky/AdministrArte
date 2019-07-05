<?php
	$Fecha= $_POST["fecha"];
	$Monto= $_POST["monto"];

	// echo "Fecha= " . $Fecha . "<br>";
	// echo "Monto= " . $Monto . "<br>";

	include("../conexion/Conexion_BD.php");

	$Insertar= "INSERT INTO cierre_caja (Fecha_Cierre, Monto_Cierre) VALUES('$Fecha','$Monto')";
	mysqli_query($Conexion, $Insertar) or die ( "Algo ha ido mal en la consulta a la base de datos");

	header("Location:../vista/Cierre_Caja.php");
?>