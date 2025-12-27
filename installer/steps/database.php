<?php
//use Installer\Support\State;

if ($_POST) {
    State::merge([
        'DB_HOST' => $_POST['db_host'],
        'DB_NAME' => $_POST['db_name'],
        'DB_USER' => $_POST['db_user'],
        'DB_PASS' => $_POST['db_pass'],
    ]);
    header('Location: ?step=platform');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Base de datos</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Configuración de Base de Datos</h2>

<form method="post">
    <input name="db_host" placeholder="Host" value="127.0.0.1" required>
    <input name="db_name" placeholder="Base de datos" required>
    <input name="db_user" placeholder="Usuario" required>
    <input name="db_pass" placeholder="Contraseña" type="password">
    <button>Siguiente</button>
</form>

</body>
</html>
