<?php

$mysqli = new mysqli("localhost", "root", "noxon", "patitas");

// Verificar conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}



?>