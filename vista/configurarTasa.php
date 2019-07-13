<?php
if(!isset($_POST["guardar"])){//sino se a pulsado el boton enviar de este archivo se entra en el formulario     ?>
    <!DOCTYPE html>
    <html>
        <head> 
            <link rel="stylesheet" type="text/css" href="../css/Estilos_AdministrArte.css">
	        <script src="../javascript/funcionesVarias.js"></script>        
        </head>
        <body>
            <div id="Principal">
                <?php 
                    include("../conexion/Conexion_BD.php");
                    include("../modulos/header.php");
                    include("../modelo/consulta_Tasa.php");
                ?>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" autocomplete="off">
                <fieldset class="">
                    <legend>Ajustar valores</legend>
                    <label>Tasa proveedor</label>
                    <input type="text" name="tasaProveedor" id="TasaProveedor" value="<?php echo $Tasa;?>">
                    <br>
                    <label>Incremento</label>
                    <input type="text" name="incremento" id="Incremento" value="<?php echo $Incremento;?>" onblur="Calculo_1()">
                    <br>
                    <label>Tasa ImpresionArte</label>
                    <input type="text" name="tasaImpresionarte" id="TasaImpresionarte" value="<?php  echo $TasaImpresionarte;?>">
                    <br>
                    <input type="submit" value="Guardar" name="guardar">
                </fieldset>
            </form>
        </body>
    </html>
    <?php
    exit();
}    
else{//Si se ha pulsado en boton Guardar se recibe el formulario 
    $TasaProveedor= $_POST["tasaProveedor"];
    $Incremento= $_POST["incremento"];
    $TasaImpresionarte= $_POST["tasaImpresionarte"];

    echo $TasaProveedor . "<br>";
    echo $Incremento . "<br>";
    echo $TasaImpresionarte . "<br>";

	//se cambia el formato de la tasa Impresionarte antes de introducira a la base de datos para que mysql la pueda reconocer  
	$TasaFormatoMySQL= number_format($TasaImpresionarte,3, ".", ",");  
    echo $TasaFormatoMySQL;
exit();
    include("../conexion/Conexion_BD.php");

    $Insertar_1= "INSERT INTO tasa_transferencia(tasa_proveedor, incremento, tasa_impresionarte, fecha) VALUES('$TasaProveedor', '$Incremento','$TasaFormatoMySQL', NOW())";
    mysqli_query($Conexion, $Insertar_1) or die ("Algo ha ido mal en la consulta a la base de datos");
}  ?>

<script>
    window.close();
</script>