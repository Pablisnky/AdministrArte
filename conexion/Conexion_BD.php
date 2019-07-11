<?php
    require_once "constantesLocal.php";
    include("../modulos/muestraError.php");

    //se instacia un objeto de la clase mysqli(); que es una clase que viene con PHP y conecta directamente a la BD mediante su metodo constructor
    $Conexion = new mysqli(HOSTING, USUARIO, PASSWORD, NOMBRE_BD);

    if($Conexion->connect_errno){
        //echo "La conexión fallo " . $Conexion->connect_errno . "<br>";
        //var_dump($Conexion); 
        exit();       
    }
    else{
        //echo "La conexión fue exitosa " . mysqli_get_host_info($Conexion);
    }

    //echo "Tipo de variable: " . gettype($Conexion) . "<br>";
    //echo "Contenido de variable:" . "<br>";

    mysqli_query($Conexion, 'SET NAMES "' . CHARSET . '"');
?>