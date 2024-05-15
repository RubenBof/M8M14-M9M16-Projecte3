<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("connection.php");
$con = connection();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sql = "INSERT INTO Usuarios VALUES(null,'$nombre','$correo','$contraseña')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{}