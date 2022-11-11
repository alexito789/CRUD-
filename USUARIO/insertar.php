<?php

$servername="localhost";
$username="root";
$password="";
$dbname="trabajo";

if($_POST){

$usuario=$_POST['usuario'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO usuarios (usuario, telefono, correo, contraseña)
  VALUES ('".$usuario."', '".$telefono."', '".$correo."', '".$contraseña."')";
  
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
        Ingrese el usuario:
        <input type="text" name="usuario">
        <br>
        Ingrese el telefono:
        <input type="text" name="telefono">
        <br>
        Ingrese el correo:
        <input type="text" name="correo">
        <br>
        Ingrese la contraseña:
        <input type="text" name="contraseña">
        <br>
        <button type="submit">Enviar</button>
    </form>
    </div>

  <a href="selectividad.php">Ver informacion</a>

    </body>
</html>