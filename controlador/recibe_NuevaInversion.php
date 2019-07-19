<?php
    $Codigo_CP= $_GET["ID_CP"];
	$Descripcion= $_POST["descripcionInversion"];
	$Monto= $_POST["montoInversion"];
	$Fecha= $_POST["fechaInversion"];

    // echo "ID_CP= " . $Codigo_CP . "<br>";
	// echo "Descripcion= " . $Descripcion . "<br>";
	// echo "Monto= " . $Monto . "<br>";
	// echo "Fecha= " . $Fecha . "<br>";

	// //se cambia el formato de la fecha antes de introducira a la base de datos para que mysql la pueda reconocer
    // $fechaFormatoMySQL = date("Y-m-d", strtotime($Fecha));
    // //echo "Fecha formato Mysql= " . $fechaFormatoMySQL . "<br>";

	include("../conexion/Conexion_BD.php");

    $Insertar= "INSERT INTO detalles_inversion(ID_CP, inversion, fecha, monto_inversion) VALUES('$Codigo_CP', '$Descripcion', '$Fecha', '$Monto')";
	mysqli_query($Conexion, $Insertar) or die ("Algo ha ido mal en la consulta a la base de datos");

    header("Location:../vista/Detalles_CuentasPagar.php?ID_CP=<?php echo $Codigo_CP;?>&pagina=Detalles cuentas por pagar,#MostrarNuevaInversion");
?>