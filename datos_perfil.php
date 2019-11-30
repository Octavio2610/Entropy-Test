<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT b.nombre,b.edad,b.email, MAX(a.id) FROM acceso_para a, registro_usuarios b";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br><h5> Me llamo ". $row["nombre"];
        echo "<br> tengo ". $row["edad"];
        echo "<br> y mi correo es ". $row["email"] . "<br></h5>";




    }
} else {
    echo "0 results";
}

$conn->close();
?>
