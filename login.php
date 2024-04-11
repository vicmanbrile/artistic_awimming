<?php

// Optengo las credenciales que estan guardadas en variables de entorno en el servidor alojado.
$mysql_user = getenv("mysql_user");
$mysql_pass = getenv("mysql_pass");


$dbName = "id21963112_art_swing";

$conn = mysqli_connect("localhost", $mysql_user, $mysql_pass, $dbName);


if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT `usr`, `pwd` FROM `users` WHERE usr = '$username' AND pwd = '$password';";

$result = mysqli_query($conn, $sql);

if (!$result) {
echo "Error: " . mysqli_error($conn);
} else {
    if ($result->num_rows === 1) {
        session_start();
        session_regenerate_id();
        $_SESSION["username"] = $username;
        header("Location: index.php");
      } else {
        echo "<p>Usuario o contraseña incorrectos.</p>";
    }
}

// Cerrando la conexión
mysqli_close($conn);

?>