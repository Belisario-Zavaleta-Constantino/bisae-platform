<?php
//use Installer\Support\UrlDetector;
//require_once __DIR__ . '/../support/UrlDetector.php';
require_once 'C:/xampp/htdocs/bisae/platform/bisae-platform/installer/support/UrlDetector.php';

$appUrl = UrlDetector::detect();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Instalador BISAE</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h1>Bienvenido a BISAE Platform</h1>

<p>
Hemos detectado automáticamente la URL base de tu plataforma:
</p>

<input name="app_url" value="<?= htmlspecialchars($appUrl) ?>">

<code><?= htmlspecialchars($appUrl) ?></code>

<p>
Si es correcta, continúa con la instalación.
</p>

<a class="button" href="?step=database">Continuar</a>

</body>
</html>

