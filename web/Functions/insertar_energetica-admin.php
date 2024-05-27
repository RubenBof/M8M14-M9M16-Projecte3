<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("connection.php");
$con = connection();

$Marca = $_POST['Marca'];
$Nombre = $_POST['Nombre'];
$Sabor = $_POST['Sabor'];
$Puntuacion = $_POST['Puntuacion'];

$sql = "INSERT INTO Energetica VALUES(null,'$Marca','$Nombre','$Sabor','$Puntuacion')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../registres.php");
}else{}