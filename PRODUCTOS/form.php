<?php

$varinv = $_GET['idenv'];

$marca=$_GET['marca'];
$modelo=$_GET['modelo'];
$genero=$_GET['genero'];
$talla=$_GET['talla'];
$color=$_GET['color'];
$cantidad=$_GET['cantidad'];
$stock=$_GET['stock'];

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
        Ingrese el nuevo modelo
        <input type="text" name="modelo" value='<?php echo $modelo?>' required>
        <br>
        Ingrese la nueva marca
        <input type="text" name="marca" value='<?php echo $marca?>' required>
        <br>
        Ingrese el nuevo genero
        <input type="text" name="genero" value='<?php echo $genero?>' required>
        <br>
        Ingrese la nueva talla
        <input type="text" name="talla" value='<?php echo $talla; ?>' required>
        <br>
        Ingrese el nuevo color
        <input type="text" name="color" value='<?php echo $color; ?>' required>
        <br>
        Ingrese la nueva cantidad
        <input type="text" name="cantidad" value='<?php echo $cantidad; ?>' required>
        <br>
        Ingrese el nuevo stock
        <input type="text" name="stock" value='<?php echo $stock; ?>' required>
        <br>
        <button type="submit">Guardar</button>
        </form>
        </div>    

        <br>
        <a href="selectividad.php">Ver registro</a>

    </body>
</html>