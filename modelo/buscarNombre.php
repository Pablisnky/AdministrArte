<?php 
//Se reciben datos desde Transferencia por medio de la funcion llamar_datosTransferencia()
$Nombre= $_GET["nombre"];
$MontoGiro= $_GET["val_21"];
$MontoRecibe= $_GET["val_24"];
// echo $Nombre . "<br>";
// echo $MontoGiro . "<br>";
// echo $MontoRecibe . "<br>";

include("../conexion/Conexion_BD.php");

    //Se consulta si existe un cliente en el modulo de transferencias; pedido de Transferencia.php
    $Consulta="SELECT * FROM usuariotransferencia INNER JOIN transferencia ON usuariotransferencia.ID_UT=transferencia.ID_Usuario WHERE nombre= '$Nombre' ";
    $Recordset= mysqli_query($Conexion, $Consulta);
    $Resultado= mysqli_fetch_array($Recordset);
    if(mysqli_num_rows($Recordset) != 0){  ?>
        <form action="../modelo/enviar.php" method="post">
            <input type="text" name="ID_UT"  value="<?php echo $Resultado['ID_UT'];?>" hidden>
            <br>
            <label>Nombre</label>
            <input type="text" name="nombre" value="<?php echo $Resultado['nombre'];?>">
            <br> 
            <label>Apellido</label>
            <input type="text" name="apellido" value="<?php echo $Resultado['apellido'];?>">
            <br> 
            <label>Cedula</label>
            <input type="text" name="cedula" value="<?php echo $Resultado['cedula'];?>"> 
            <br>
            <label>Telefono</label>
            <input type="text" name="telefono" value="<?php echo $Resultado['telefono'];?>">
            <br>
            <label>Banco</label>
            <input type="text" name="banco" value="<?php echo $Resultado['banco'];?>">
            <br>           
            <label>Número cuenta</label>
            <input type="text" name="numero" value="<?php echo $Resultado['numero'];?>">
            <br>
            <label>Monto giro COP</label>
            <input type="text" name="montoGiro" value="<?php echo $MontoGiro;?>">
            <br>
            <label>Monto Bs</label>
            <input type="text" name="montoRecibe" value="<?php echo $MontoRecibe;?>">
			<br>
            <input type="text" name="fecha" value="<?php echo $Resultado["fecha"];?>" hidden>
			<br>
    
            <input type="submit" value="Insertar transferencia">
        </form>
        <?php
    }
    else{
        echo "No hay registros";
    }
?>

