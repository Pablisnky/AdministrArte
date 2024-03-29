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
                    <input type="text" name="tasaProveedor" id="TasaProveedor" value="<?php echo $Tasa;?>" onblur="Calculo_1()">
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

    // echo $TasaProveedor . " " . gettype($TasaProveedor) . "<br>";
    // echo $Incremento . " " . gettype($Incremento) ."<br>";
    // echo $TasaImpresionarte . " " . gettype($TasaImpresionarte) . "<br>";

    //se cambia el formato de $TasaPmpresionarte, $Incremento y $TasaImpresionarte antes de introducirlos a la base de datos para que mysql la pueda reconocer  
	$TasaProveedor= str_replace(',','.',$TasaProveedor); 
	$Incremento= str_replace(',','.',$Incremento); 
    $TasaImpresionarte= str_replace(',','.',$TasaImpresionarte);  
    
    // echo $TasaProveedor . " " . gettype($TasaProveedor) . "<br>";
    // echo $Incremento . " " . gettype($Incremento) . "<br>";
    // echo $TasaImpresionarte . " " . gettype($TasaImpresionarte) . "<br>";
 
    include("../conexion/Conexion_BD.php");

    $Insertar_1= "INSERT INTO tasa_transferencia(tasa_proveedor, incremento, tasa_impresionarte, fecha) VALUES('$TasaProveedor', '$Incremento','$TasaImpresionarte', NOW())";
    mysqli_query($Conexion, $Insertar_1) or die ("Algo ha ido mal en la consulta a la base de datos");
}  ?>

<script>
    // Se recarga la ventana padre
    window.opener.location.reload();
    // se cierra la ventana POPUP
    window.close();
</script>