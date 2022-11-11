<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "trabajo";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
		}
				
	$sql = "SELECT * FROM usuarios";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
	 
	echo "<div class='aqui' style='background-color: white'>"	;
	  echo "<table class='este'>";
	  echo "<tr style='background-color: blue'>";
	  echo "<th>ID</th><th>USUARIO</th><th>TELEFONO</th><th>CORREO</th><th>CONTRASEÑA</th><th>MODIFICAR</th><th>ELIMINAR</th>";
	  echo "</tr>";
	  while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["id"]."</td><td>".$row["usuario"]."</td><td>".$row["telefono"]."</td><td>".$row["correo"]."</td><td>".$row["contraseña"]."</td>";
		echo "<td>
		<a href='./form.php?idenv=".$row["id"]."&usuario=".$row["usuario"]."&telefono=".$row["telefono"]."&correo=".$row["correo"]."&contraseña=".$row["contraseña"]."'><img src='../img/edit.png' width='50'></a>
		</td>";
		echo "<td>
		<a href='./eliminar.php?idenv=".$row["id"]."'><img src='../img/delete.png' width='50'></a>
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