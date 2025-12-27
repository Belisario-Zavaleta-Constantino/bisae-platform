<?php
/**
 * BISAE Platform Installer
 * Interactive CLI setup
 */

if (php_sapi_name() !== 'cli') {
    exit("❌ Este instalador sólo puede ejecutarse desde la consola.\n");
}

define('BASE_PATH', dirname(__DIR__));
define('ENV_FILE', BASE_PATH . '/.env');

require_once 'Support/Console.php';
require_once 'Support/EnvWriter.php';

//use Installer\Support\Console;
//use Installer\Support\EnvWriter;

Console::title('Bienvenido al instalador de BISAE Platform');

if (file_exists(ENV_FILE)) {
    Console::warning('Ya existe un archivo .env. La instalación parece completa.');
    exit;
}

/**
 * Paso 1. Datos de la plataforma
 */
Console::section('Configuración general');

$appName = Console::ask('Nombre de la plataforma', 'Mi Plataforma BISAE');
$appEnv  = Console::ask('Entorno (production, development)', 'development');

/**
 * Paso 2. Base de datos
 */
Console::section('Base de datos');

$dbHost = Console::ask('Host', '127.0.0.1');
$dbName = Console::ask('Nombre de la base de datos');
$dbUser = Console::ask('Usuario');
$dbPass = Console::askHidden('Contraseña');

/**
 * Paso 3. Directorios
 */
Console::section('Directorios');

$publicDir  = Console::ask('Directorio público', 'public');
$modulesDir = Console::ask('Directorio de módulos', 'modules');

/**
 * Guardar .env
 */
EnvWriter::create(ENV_FILE, [
    'APP_NAME'      => $appName,
    'APP_ENV'       => $appEnv,
    'DB_HOST'       => $dbHost,
    'DB_NAME'       => $dbName,
    'DB_USER'       => $dbUser,
    'DB_PASS'       => $dbPass,
    'PUBLIC_DIR'    => $publicDir,
    'MODULES_DIR'   => $modulesDir,
]);

Console::success('Instalación completada correctamente 🎉');
Console::info('Archivo .env generado.');
