<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/style.css" rel="stylesheet">
        <title>Iniciar sesion</title>
        <script src="javascript/script.js"></script>
        <link rel="icon" href="MEDIA/jibagod.webp">

    </head>
    <body>
        <header>
            <h1>Inicio de sesion</h1>
        </header>
        <main class="centrar">
            <form class="centrar" method="POST" action="index.php">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </main>
    </body>
</html>

<?php
include("Functions/connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $admin_username = 'admin';
    $admin_password = 'admin123';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = connection();

    if ($username == $admin_username && $password == $admin_password) {
        $_SESSION['username'] = $username;
        header("Location: index-admin.php");
        exit();
    } else {
        // Consulta preparada para evitar inyección SQL
        $stmt = $con->prepare("SELECT contraseña FROM Usuarios WHERE nombre = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($stored_password);
            $stmt->fetch();
            // Comparación directa de contraseñas en texto plano
            if ($password == $stored_password) {
                $_SESSION['username'] = $username;
                header("Location: index-user.php");
                exit();
            } else {
                echo "<script>alert('Nombre de usuario o contraseña incorrectos.'); window.location.href='index.php';</script>";
            }
        } else {
            echo "<script>alert('Nombre de usuario o contraseña incorrectos.'); window.location.href='index.php';</script>";
        }
        $stmt->close();
    }
    $con->close();
}
?>