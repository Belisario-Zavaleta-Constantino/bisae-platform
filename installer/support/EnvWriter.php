<?php
//namespace Installer\Support;

class EnvWriter
{
    public static function create(string $path, array $data): void
    {
        $content = "";

        foreach ($data as $key => $value) {
            $escaped = str_replace('"', '\"', $value);
            $content .= "{$key}=\"{$escaped}\"\n";
        }

        file_put_contents($path, $content);
    }
}
