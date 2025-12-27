<?php
define('BASE_PATH', dirname(__DIR__));
define('ENV_FILE', BASE_PATH . '/.env');

require_once __DIR__ . '/support/State.php';

use Installer\Support\State;

if (file_exists(ENV_FILE)) {
    exit('⚠️ BISAE ya está instalado.');
}

$step = $_GET['step'] ?? 'welcome';

$allowed = ['welcome','database','platform','directories','finish'];
if (!in_array($step, $allowed)) {
    $step = 'welcome';
}

require __DIR__ . "/steps/{$step}.php";
