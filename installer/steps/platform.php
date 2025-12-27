<?php
//use Installer\Support\State;

if ($_POST) {
    State::merge([
        'APP_NAME' => $_POST['app_name'],
        'APP_ENV'  => $_POST['app_env'],
    ]);
    header('Location: ?step=directories');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Plataforma</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Datos de la Plataforma</h2>

<form method="post">
    <input name="app_name" placeholder="Nombre de la plataforma" required>
    <select name="app_env">
        <option value="development">Development</option>
        <option value="production">Production</option>
    </select>
    <button>Siguiente</button>
</form>

</body>
</html>
