<?php

include("connection.php");
$con = connection();

$id=$_POST['ID'];
$marca = $_POST['Marca'];
$nombre = $_POST['Nombre'];
$sabor = $_POST['Sabor'];
$puntuacion = $_POST['Puntuacion'];

$sql="UPDATE Energetica SET Marca='$marca', Nombre='$nombre', Sabor='$sabor', Puntuacion='$puntuacion' WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}