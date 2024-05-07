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

    <div class="users-table">
        <h2>Bebidas Puntuadas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Nombre</th>
                    <th>Sabor</th>
                    <th>Puntuacion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID'] ?></th>
                        <th><?= $row['Marca'] ?></th>
                        <th><?= $row['Nombre'] ?></th>
                        <th><?= $row['Sabor'] ?></th>
                        <th><?= $row['Puntuacion'] ?></th>
                        <th><a href="actualizar.php?id=<?= $row['ID'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="Functions/eliminar_energetica.php?id=<?= $row['ID'] ?>" onclick="return confir_eliminar()" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>
