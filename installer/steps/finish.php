<?php
//use Installer\Support\State;
//require_once __DIR__ . '/../support/EnvWriter.php';
require 'C:/xampp/htdocs/bisae/platform/bisae-platform/installer/support/EnvWriter.php';

$data = State::get();

//Installer\Support\EnvWriter::create(ENV_FILE, $data);
EnvWriter::create(ENV_FILE, $data);
@unlink(__DIR__ . '/../state.json');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Instalación completa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h1>Instalación completada 🎉</h1>
<p>BISAE Platform está lista.</p>

<p>
    <strong>Por seguridad:</strong><br>
    Elimina la carpeta <code>/installer</code>.
</p>

<a class="button" href="../public/">Ir a la plataforma</a>

</body>
</html>
