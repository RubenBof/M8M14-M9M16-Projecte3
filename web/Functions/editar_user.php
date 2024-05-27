<?php

include("connection.php");
$con = connection();

$id=$_POST['ID'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sql="UPDATE Usuarios SET nombre='$nombre', correo='$correo', contraseña='$contraseña' WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../users.php");
}else{

}