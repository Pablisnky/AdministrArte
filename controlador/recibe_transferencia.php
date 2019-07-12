<?php
// el calculo esta basado en precio del cm2 de material, tiempo de diseño, montaje en la computadora, corte en cameo, la hora minima de un salario basico es de : 
	$Nombre= $_POST["nombre"];
	$Apellido= $_POST["apellido"];
	$Cedula= $_POST["cedula"];
	$Telefono= $_POST["telefono"];
	$Banco= $_POST["banco"];
	$Numero= $_POST["numero"];
	$Monto= $_POST["montoGiro"];
	$Resultado= $_POST["resultado"];

	  echo "Nombre= " . $Nombre . "<br>";
	 echo "Apellido= " . $Apellido . "<br>";
	  echo "Cedula= " . $Cedula . "<br>";
	 echo "Telefono= " . $Telefono . "<br>";
	 echo "Banco= " . $Banco . "<br>";
	  echo "Numero= " . $Numero . "<br>";
	 echo "Monto= " . $Monto . "<br>";
	  echo "BS a recibir= " . $Resultado . "<br>";

	//Se genera un numero aleatorio para asegurar que se escogera al usuario recien insertado cuando se busque el ID_Usuario
    $Aleatorio = mt_rand(1000000,999999999);
    // echo "Nº aleatorio= " . $aleatorio . "<br>"; 

	//se insertan los valores a la BD
	include("../conexion/Conexion_BD.php");

	$Insertar_1= "INSERT INTO usuariotransferencia(nombre, apellido, cedula, telefono, aleatorio) VALUES('$Nombre', '$Apellido', '$Cedula', '$Telefono', '$Aleatorio')";
	mysqli_query($Conexion, $Insertar_1) or die ( "Algo ha ido mal en la consulta a la base de datos");

	//se busca el ID_Usuario recien insertado
	$Consulta_1= "SELECT ID_UT FROM usuariotransferencia WHERE aleatorio= '$Aleatorio' ORDER BY ID_UT DESC LIMIT 1";
	$Recordset_1= mysqli_query($Conexion, $Consulta_1);
	$Resultado_1= mysqli_fetch_array($Recordset_1);
	$ID_Usuario= $Resultado_1["ID_UT"];
	// echo $ID_Usuario;

	$Insertar_2= "INSERT INTO transferencia(ID_Usuario, banco, numero, monto, Bs_recibe, fecha) VALUES('$ID_Usuario', '$Banco', '$Numero', '$Monto', '$Resultado', NOW())";
	mysqli_query($Conexion, $Insertar_2) or die ( "Algo ha ido mal en la consulta a la base de datos");

	header("Location:../vista/Transferencia.php");
?>