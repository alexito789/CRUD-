<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "trabajo";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
		}
				
	$sql = "SELECT * FROM producto";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
	 
	echo "<div class='aqui' style='background-color: white'>"	;
	  echo "<table class='este'>";
	  echo "<tr style='background-color: blue'>";
	  echo "<th>ID</th><th>MARCA</th><th>MODELO</th><th>GENERO</th><th>TALLA</th><th>COLOR</th><th>CANTIDAD</th><th>STOCK</th><th>MODIFICAR</th><th>ELIMINAR</th>";
	  echo "</tr>";
	  while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["id"]."</td><td>".$row["marca"]."</td><td>".$row["modelo"]."</td><td>".$row["genero"]."</td><td>".$row["talla"]."</td><td>".$row["color"]."</td><td>".$row["cantidad"]."</td><td>".$row["stock"]."</td>";
		echo "<td>
		<a href='./form.php?idenv=".$row["id"]."&marca=".$row["marca"]."&modelo=".$row["modelo"]."&genero=".$row["genero"]."&talla=".$row["talla"]."&color=".$row["color"]."&cantidad=".$row["cantidad"]."&stock=".$row["stock"]."'><img src='../img/edit.png' width='50'></a>
		</td>";
		echo "<td>
		<a href='./eliminar.php?idenv=".$row["id"]."'><img src=../img/delete.png' width='50'></a>
		</td>";
		echo "</tr>";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
	echo "</table>";
	echo "</div>";
?>

<html>
	<head>
	<link rel="stylesheet" href="index.css"/>
	</head>
	<body style="background-color: gray">
		<br>
		<a href="insertar.php" target="_blank">Insertar</a>
	</body>
</html>