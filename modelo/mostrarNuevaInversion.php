<?php
	$Codigo_CP= $_GET["val_1"]; //Se recibe desde funciones_Ajax.js
    // echo $Codigo_CP;
    
	include("../conexion/Conexion_BD.php");
?>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><!-- Estilos calendario-->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script><!--Libreria del Calendario-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!--Libreria del Calendario-->
<script src="../javascript/CalendarioJQwery_3.js"></script> <!--Formato Calendario-->
</head>
	<div class="contenedor_1">
        <form action="../controlador/recibe_NuevaInversion.php?ID_CP=<?php echo $Codigo_CP;?>" method="post">
            <table class="tabla_1">
                <thead>
                    <th>DESCRIPCION INVERSION</th>
                    <th>MONTO INVERSION</th>
                    <th>FECHA INVERSION</th>
                </thead>
                <tbody>
                    <tr class="tr_1">
                        <td><input type="text" name="descripcionInversion"></td>
                        <td><input type="text" name="montoInversion"></td>
                        <td><input type="date" id="Calendario_CM_3" name="fechaInversion"></td> 
                    </tr>   
                </tbody>
            </table>  
            <input type="submit" value="Cargar">
        </form> 
	</div>		