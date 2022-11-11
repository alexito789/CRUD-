<?php

$servername="localhost";
$username="root";
$password="";
$dbname="trabajo";

if($_POST){

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$genero=$_POST['genero'];
$talla=$_POST['talla'];
$color=$_POST['color'];
$cantidad=$_POST['cantidad'];
$stock=$_POST['stock'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO producto (marca, modelo, genero, talla, color, cantidad, stock)
  VALUES ('".$marca."', '".$modelo."', '".$genero."', '".$talla."', '".$color."', '".$cantidad."', '".$stock."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<strong>EXITO</strong>";
  } else {
    echo "<strong>ERROR</strong>" . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>

<html>
    <head>
    <link rel="stylesheet" href="index.css"/>
        <title>INSERTAR</title>
    </head>
    <body style="background-color: gray">
        
    <div>
    <form action="insertar.php" method="post">
        Ingrese la marca:
        <input type="text" name="marca">
        <br>
        Ingrese el modelo:
        <input type="text" name="modelo">
        <br>
        Ingrese el genero:
        <input type="text" name="genero">
        <br>
        Ingrese la talla:
        <input type="text" name="talla">
        <br>
        Ingrese el color:
        <input type="text" name="color">
        <br>
        Ingrese la cantidad:
        <input type="text" name="cantidad">
        <br>
        Ingrese el stock:
        <input type="text" name="stock">
        <br>
        <button type="submit">Enviar</button>
    </form>
    </div>

  <a href="selectividad.php">Ver informacion</a>

    </body>
</html>