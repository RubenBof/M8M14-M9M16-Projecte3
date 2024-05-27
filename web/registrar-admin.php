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
    <link rel="icon" href="MEDIA/jibagod.webp">

</head>

<body>
    <header>
        <h1>Añadir Bebida energetica</h1>
    </header>
    <main class="centrar">
        <div class="users-form">
            <form action="Functions/insertar_energetica-admin.php" method="POST" >
                <input type="text" name="Marca" placeholder="Marca">
                <input type="text" name="Nombre" placeholder="Nombre">
                <input type="text" name="Sabor" placeholder="Sabor">
                <input type="text" name="Puntuacion"placeholder="Puntuacion">
                <input type="submit" value="Agregar">
            </form>
        </div>
        <a href=index-user.php class="centrar">Registres</a>
    </main>
</body>

</html>