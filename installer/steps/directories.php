<?php
//use Installer\Support\State;

if ($_POST) {
    State::merge([
        'PUBLIC_DIR'  => $_POST['public_dir'],
        'MODULES_DIR' => $_POST['modules_dir'],
    ]);
    header('Location: ?step=finish');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Directorios</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Estructura de Directorios</h2>

<form method="post">
    <input name="public_dir" value="public">
    <input name="modules_dir" value="modules">
    <button>Finalizar</button>
</form>

</body>
</html>
