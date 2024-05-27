<?php 
    include("Functions/connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM Usuarios WHERE ID='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="CSS/style.css" rel="stylesheet">
        <title>Editar Energeticas</title>
        <link rel="icon" href="MEDIA/jibagod.webp">

    </head>
    <body>
        <header class="centrar">
            <h1>Editar Energetica</h1>
        </header>
        <main class="centrar">
            <div class="users-form">
                <form action="Functions/editar_user.php" method="POST">
                    <input type="hidden" name="ID" value="<?= $row['ID']?>">
                    <input type="text" name="nombre" placeholder="nombre" value="<?= $row['nombre']?>">
                    <input type="text" name="correo" placeholder="correo" value="<?= $row['correo']?>">
                    <input type="text" name="contraseña" placeholder="contraseña" value="<?= $row['contraseña']?>">
                    <input type="submit" value="Actualizar">
                </form>
            </div>
            </br><a href="index.php" class="btn">Ir al Inicio</a>
        </main>
    </body>
</html>