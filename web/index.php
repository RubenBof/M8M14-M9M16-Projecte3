<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/style2.css" rel="stylesheet">
        <title>Iniciar sesion</title>
        <script src="javascript/script.js"></script>
    </head>
    <body>
        <header>
            <h1>Inicio de sesion</h1>
        </header>
        <main>
            <form method="POST" action="index.php">
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
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Simulamos datos de usuarios para este ejemplo
    $users = [
        'admin' => 'admin123',
        'user' => 'user123'
    ];

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;

        if ($username == 'admin') {
            header("Location: index-admin.php");
        } else {
            header("Location: index-user.php");
        }
        exit();
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}
?>