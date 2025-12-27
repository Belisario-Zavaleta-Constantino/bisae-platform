<?php
//namespace Installer\Support;

class UrlDetector
{
    public static function detect(): string
    {
        $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
              || ($_SERVER['SERVER_PORT'] ?? null) == 443;

        $scheme = $https ? 'https' : 'http';

        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

        $script = $_SERVER['SCRIPT_NAME'] ?? '';
        // ej: /plataformaY/installer/install.php

        $basePath = str_replace('/installer/install.php', '', $script);

        return rtrim($scheme . '://' . $host . $basePath, '/');
    }
}
