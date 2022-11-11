<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "trabajo";

    $varinv = $_GET['idenv'];

    $marca=$_GET['marca'];
    $modelo=$_GET['modelo'];
    $genero=$_GET['genero'];
    $talla=$_GET['talla'];
    $color=$_GET['color'];
    $cantidad=$_GET['cantidad'];
    $stock=$_GET['stock'];

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
		}

        $sql = "UPDATE producto SET marca='".$marca."', modelo='".$modelo."', genero='".$genero."', talla='".$talla."', color='".$color."', cantidad='".$cantidad."', stock='".$stock."' WHERE id=".$varinv;
		
	if($conn->query($sql) === TRUE){

        echo "EXITO AL MODIFICAR";

    }else{
        echo "ERROR". $conn->error;
    }
	$conn->close();

	echo "<br>";
	echo "<a href='selectividad.php'>Ver la actualizacion</a>";

?>



