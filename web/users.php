<?php
include("Functions/connection.php");
$con = connection();

$sql = "SELECT * FROM Usuarios";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Usuarios</title>
    <script src="javascript/script.js"></script>
    <link rel="icon" href="MEDIA/jibagod.webp">

</head>

<body>
    <header class="centrar">
        <h1>Usuarios</h1>
    </header>
    <main class="centrar">
        <div class="users-table">
            <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>contraseña</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <th><?= $row['ID'] ?></th>
                            <th><?= $row['nombre'] ?></th>
                            <th><?= $row['correo'] ?></th>
                            <th><?= $row['contraseña'] ?></th>
                            <th><a href="actualizar-user.php?id=<?= $row['ID'] ?>" class="users-table--edit">Editar</a></th>
                            <th><a href="Functions/eliminar_energetica.php?id=<?= $row['ID'] ?>" onclick="return confir_eliminar()" class="users-table--delete" >Eliminar</a></th>
                        </tr>
                    <?php endwhile; ?>
            </table>
        </div>
        <a href="index-admin.php" class="btn">Ir al Inicio</a>
    </main>
</body>
</html>
