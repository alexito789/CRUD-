<?php

$varinv = $_GET['idenv'];

$usuario=$_GET['usuario'];
$telefono=$_GET['telefono'];
$correo=$_GET['correo'];
$contraseña=$_GET['contraseña'];

?>

<html>  
    <head>
    <link rel="stylesheet" href="index.css"/>
        <title>MODIFICAR</title>
    </head>
    <body style="background-color: gray">

    <div class="cont">
    <form class="for_c" action="modificar.php" method="get">
        
        ID
        <input type="text" name="idenv" value='<?php echo $varinv; ?>'>
        <br>
        Ingrese el usuario:
        <input type="text" name="usuario" value='<?php echo $usuario; ?>'>
        <br>
        Ingrese el telefono:
        <input type="text" name="telefono" value='<?php echo $telefono; ?>'>
        <br>
        Ingrese el correo:
        <input type="text" name="correo" value='<?php echo $correo; ?>'>
        <br>
        Ingrese la contraseña:
        <input type="text" name="contraseña" value='<?php echo $contraseña; ?>'>
        <br>
        <button type="submit">Enviar</button>
        </form>
        </div>    

        <br>
        <a href="selectividad.php">Ver registro</a>

    </body>
</html>