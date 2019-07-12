<?php
if(!isset($_POST["guardar"])){//sino se a pulsado el boton enviar de este archivo se entra en el formulario     ?>
    <!DOCTYPE html>
    <html>
        <head> 
            <link rel="stylesheet" type="text/css" href="../css/Estilos_AdministrArte.css">
        </head>
        <body>
            <div id="Principal">
                <?php 
                    include("../conexion/Conexion_BD.php");
                    include("../modulos/header.php");
                ?>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <fieldset class="">
                    <legend>Ajustar valores</legend>
                    <label>Tasa proveedor</label>
                    <input type="text" name="tasa">
                    <br>
                    <label>Incremento</label>
                    <input type="text" name="incremento" placeholder="0.000" onblur="Calculo_1()">
                    <br>
                    <label>Tasa ImpresionArte</label>
                    <input type="text" name="tasa">
                    <input type="submit" value="Guardar" name="guardar">
                </fieldset>
            </form>
        </body>
    </html>
    <?php
    exit();
}    
else{//Si se ha pulsado en boton Guardar se recibe el formulario 
    $Tasa= $_POST["tasa"];
    $Incremento= $_POST["incremento"];

    // echo $Tasa . "<br>";
    // echo $Incremento . "<br>";

    include("../conexion/Conexion_BD.php");

    $Insertar_1= "INSERT INTO tasa_transferencia(tasa, incremento, fecha) VALUES(' $Tasa', '$Incremento', NOW())";
    mysqli_query($Conexion, $Insertar_1) or die ( "Algo ha ido mal en la consulta a la base de datos");

}  ?>

<script>
    window.close();
</script>