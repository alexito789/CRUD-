<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "trabajo";

    $varinv = $_GET['idenv'];

    $usuario=$_GET['usuario'];
    $telefono=$_GET['telefono'];
    $correo=$_GET['correo'];
    $contraseña=$_GET['contraseña'];

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
		}

        $sql = "UPDATE usuarios SET usuario='".$usuario."', telefono='".$telefono."', correo='".$correo."', contraseña='".$contraseña."' WHERE id=".$varinv;
		
	if($conn->query($sql) === TRUE){

        echo "EXITO AL MODIFICAR";

    }else{
        echo "ERROR". $conn->error;
    }
	$conn->close();

	echo "<br>";
	echo "<a href='selectividad.php'>Ver la actualizacion</a>";

?>



