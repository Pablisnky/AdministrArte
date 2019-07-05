<?php
    require_once "constantesLocal.php";

    //se instacia la clase mysqli(); que es una clase que viene con PHP y conecta directamente a la BD mediante su metodo constructor
    $Conexion = new mysqli(HOSTING, USUARIO, PASSWORD, NOMBRE_BD);

    mysqli_query($Conexion, 'SET NAMES "' . CHARSET . '"');
?>