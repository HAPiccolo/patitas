<?php
include "conexion.php";


$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Consulta el usuario y password
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";

if ($result->num_rows ===1){
    header("Location: carga.html");
    exit();
} else{
    echo "Login incorrecto;"
}

$conn->close();
?>