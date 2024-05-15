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
        <h1>Añadir nuevo usuario</h1>
        <form action="Functions/insertar_usuario.php" method="POST">
            <input type="text" name="nombre" placeholder="nombre">
            <input type="text" name="correo" placeholder="correo">
            <input type="password" name="contraseña" placeholder="contraseña">
            <input type="submit" value="Agregar">
        </form>
    </div>
</body>

</html>