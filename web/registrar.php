<?php
include("Functions/connection.php");
$con = connection();

$sql = "SELECT * FROM Energetica";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Inicio</title>
    <script src="javascript/script.js"></script>
</head>

<body>
    <div class="users-form">
        <h1>Añadir Bebida energetica</h1>
        <form action="Functions/insertar_energetica.php" method="POST">
            <input type="text" name="Marca" placeholder="Marca">
            <input type="text" name="Nombre" placeholder="Nombre">
            <input type="text" name="Sabor" placeholder="Sabor">
            <input type="text" name="Puntuacion"placeholder="Puntuacion">
            <input type="submit" value="Agregar">
        </form>
    </div>
    <a href=Registres.php>Registres</a>
</body>

</html>