<?php
	//se reciben datos desde Transferencia.php
	$Nombre= $_POST["nombre"];
	$Apellido= $_POST["apellido"];
	$Cedula= $_POST["cedula"];
	$Telefono= $_POST["telefono"];
	$Banco= $_POST["banco"];
	$Numero= $_POST["numero"];
	$MontoGiro= $_POST["montoGiro"];
	$Resultado= $_POST["resultado"];//viene formateado 00.000,00
	$Tasa_Proveedor= $_POST["tasa_Proveedor"];//viene formateado 0,000

	echo "Nombre= " . $Nombre . "<br>";
	echo "Apellido= " . $Apellido . "<br>";
	echo "Cedula= " . $Cedula . "<br>";
	echo "Telefono= " . $Telefono . "<br>";
	echo "Banco= " . $Banco . "<br>";
	echo "Numero= " . $Numero . "<br>";
	echo "Monto giro= " . $MontoGiro . "<br>";
	echo "BS a recibir= " . $Resultado . "<br>";
	echo "Tasa proveedor= " . $Tasa_Proveedor . "<br>";

	//Se calcula el monto a transferir a proveedor
    //Se cambia el formato de $Tasa_Proveedor para mostrar en pantalla con ',' 
	$Tasa_Proveedor_2= str_replace(',','.',$Tasa_Proveedor); 
	$Resultado= str_replace('.','',$Resultado);
	$Resultado= str_replace(',','.',$Resultado);
	echo "Tasa de proveedor= " . $Tasa_Proveedor_2 . "<br>"; 
	echo "Bs a transferir= " . $Resultado ."<br>";
	$Trans_Proveedor = $Resultado * $Tasa_Proveedor_2;
	echo "Trans a proveedor= " . str_replace(',','.',$Trans_Proveedor) . "<br>";
		
	//Se genera un numero aleatorio para asegurar que se escogera al usuario recien insertado cuando se busque el ID_Usuario
    $Aleatorio = mt_rand(1000000,999999999);
    // echo "Nº aleatorio= " . $aleatorio . "<br>"; 

	//se conecta a la BD
	include("../conexion/Conexion_BD.php");

	//Se insertan los datos del usuario
	$Insertar_1= "INSERT INTO usuariotransferencia(nombre, apellido, cedula, telefono, aleatorio) VALUES('$Nombre', '$Apellido', '$Cedula', '$Telefono', '$Aleatorio')";
	mysqli_query($Conexion, $Insertar_1) or die ( "Algo ha ido mal en la consulta a la base de datos");

	//se busca el ID_Usuario recien insertado
	$Consulta_1= "SELECT ID_UT FROM usuariotransferencia WHERE aleatorio= '$Aleatorio' ORDER BY ID_UT DESC LIMIT 1";
	$Recordset_1= mysqli_query($Conexion, $Consulta_1);
	$Resultado_1= mysqli_fetch_array($Recordset_1);
	$ID_Usuario= $Resultado_1["ID_UT"];
	// echo $ID_Usuario;

	//Se consulta la tasa de transferencia para el dia que se realiza la transferencia
	$Consulta_2= "SELECT ID_TT, tasa_proveedor FROM tasa_transferencia WHERE fecha= CURDATE() ORDER BY ID_TT DESC";
	$Recordset_2= mysqli_query($Conexion, $Consulta_2);
	$Resultado_2= mysqli_fetch_array($Recordset_2);
	$ID_TT= $Resultado_2["ID_TT"];
	$TasaProveedor= $Resultado_2["tasa_proveedor"];
	// echo $ID_TT;

	//Se calcula cuanto se le envia al proveedor
	//Se cambia el formato de  $Resultado
	$Resultado= str_replace(',','.',$Resultado); 
	echo "Resultado formateado" . $Resultado . "<br>";
	
	$TransferirProveedor= $Resultado * $TasaProveedor;
	$TransferirProveedor= round($TransferirProveedor,2);
	
	// Se calcula la utilidad
	$Utilidad= $MontoGiro - $TransferirProveedor;
	$Utilidad= round($Utilidad,2) . "<br>";

	//Se insertan los datos de la transferencia
	$Insertar_2= "INSERT INTO transferencia(ID_TT, ID_Usuario, banco, numero, monto_pesos, recibe_Bs, transferirProveedor, utilidad, fecha) VALUES('$ID_TT','$ID_Usuario', '$Banco', '$Numero', '$MontoGiro', '$Resultado', '$TransferirProveedor', '$Utilidad', NOW())";
	mysqli_query($Conexion, $Insertar_2) or die ( "Algo ha ido mal en la consulta a la base de datos");

	header("Location:../vista/Transferencia.php");
?>