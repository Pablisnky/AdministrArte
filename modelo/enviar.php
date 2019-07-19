<?php 
//Se reciben de buscarNombre.php
$ID_UT= $_POST["ID_UT"];
$Nombre= $_POST["nombre"];
$Apellido= $_POST["apellido"];
$Cedula= $_POST["cedula"];
$Telefono= $_POST["telefono"];
$Banco= $_POST["banco"];
$Numero= $_POST["numero"];   
$MontoGiro= $_POST["montoGiro"];
$MontoRecibe= $_POST["montoRecibe"];


echo $ID_UT . "<br>";
echo $Nombre . "<br>";
echo $Apellido . "<br>";
echo $Cedula . "<br>";
echo $Telefono . "<br>";
echo $Banco . "<br>";
echo $Numero . "<br>";
echo $MontoGiro . "<br>";
echo $MontoRecibe . "<br>";

//Se consulta la tasa de transferencia para el dia actual, el incremento y la tasa de ImpresionArte
include("../conexion/Conexion_BD.php");
include("consulta_Tasa.php");

$ID_TT;
$Tasa;
$Incremento;
$TasaImpresionArte;
$Trans_Proveedor;

echo "ID_TT= " . $ID_TT . "<br>";
echo "La tasa del proveedor es: " . $Tasa . "<br>";
echo "El incremento a la tasa es: " . $Incremento . "<br>";
echo "Tasa de ImpresionArte: " . $TasaImpresionarte . "<br>";


//se formatea $MontoRecibe para poder realizar la operacion matematica, no se separan los miles y se cambia , por .
$Tasa= str_replace(',','.',$Tasa);
$MontoRecibe = str_replace(".", "" , $MontoRecibe);//se quita el punto separador de miles
$MontoRecibe = str_replace(",", "." , $MontoRecibe);//se cambia la coma por punto en los decimales

echo "Tasa proveedor formateada: " . $Tasa . "<br>";
echo "Monto a recibir formateado: " . $MontoRecibe . "<br>";
$Trans_Proveedor = $MontoRecibe * $Tasa;
echo "Transferir a proveedor: " . $Trans_Proveedor . "<br>";
    
//Utilidad
$Utilidad = $MontoGiro - $Trans_Proveedor;
echo "Utilidad de operacion: " . $Utilidad . "<br>";

echo $Trans_Proveedor= number_format($Trans_Proveedor, 2, ",", ".") . "<br>";
echo $Utilidad= number_format($Utilidad, 2, ",", "."); 

//Se inserta la transferencia en la BD
$Insertar= "INSERT INTO transferencia(ID_TT, ID_Usuario, banco, numero, monto_pesos, recibe_Bs, transferirProveedor, utilidad, fecha) VALUES('$ID_TT', '$ID_UT', '$Banco', '$Numero', '$MontoGiro', '$MontoRecibe','$Trans_Proveedor', '$Utilidad', NOW() )";
mysqli_query($Conexion, $Insertar) or die ( "Algo ha ido mal en la consulta a la base de datos");

header("Location:../vista/Transferencia.php");

