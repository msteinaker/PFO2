<?php
$servername = "mysql";  
$username = "root";
$password = "pass123";
$dbname = "bd";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT nombre, rol, fecha_registro FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Lista de Usuarios</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Rol</th><th>Fecha de Registro</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["nombre"]) . "</td><td>" . htmlspecialchars($row["rol"]) . "</td><td>" . htmlspecialchars($row["fecha_registro"]) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>