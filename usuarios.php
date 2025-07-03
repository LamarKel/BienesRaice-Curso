<?php
//Conexión a la base de datos
require 'includes/config/database.php';
$db = conectarDB();

//Crear usuario
$email = 'Kelvin@correo.com';
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);
var_dump($passwordHash);

//query para crear usuario
$query = "INSERT INTO usuarios(email, password) VALUES ('$email','$passwordHash')";
var_dump($query);

//agregar usuario a la base de datos
mysqli_query($db, $query);