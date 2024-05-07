<?php 
    include("Functions/connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM Energetica WHERE ID='$id'";
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
        
    </head>
    <body>
        <div class="users-form">
            <form action="Functions/editar_energetica.php" method="POST">
                <input type="hidden" name="ID" value="<?= $row['ID']?>">
                <input type="text" name="Marca" placeholder="Marca" value="<?= $row['Marca']?>">
                <input type="text" name="Nombre" placeholder="Nombre" value="<?= $row['Nombre']?>">
                <input type="text" name="Sabor" placeholder="Sabor" value="<?= $row['Sabor']?>">
                <input type="text" name="Puntuacion" placeholder="Puntuacion" value="<?= $row['Puntuacion']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
        <a href="index.php" class="btn">Ir al Inicio</a>
    </body>
</html>