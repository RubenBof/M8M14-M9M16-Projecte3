<?php
include("Functions/connection.php");
$con = connection();

$sql = "SELECT * FROM Energetica";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
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
            <h1>Inicio</h1>
        </header>
        <main class="centrar">
            <div class="users-table">
                <h2 class="centrar">Bebidas Puntuadas</h2>
                <table>
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Nombre</th>
                            <th>Sabor</th>
                            <th>Puntuacion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
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
                </table>
                </br><a href="index.php" class="centrar">Ir al Inicio de sesion</a>
                </br><a href="registrar.php"class="centrar">Registrar nueva bebida </a>
            </div>
        </main>
    </body>
</html>