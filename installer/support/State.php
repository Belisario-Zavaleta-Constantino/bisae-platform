<?php
//namespace Installer\Support;

class State
{
    protected static string $file = __DIR__ . '/../state.json';

    public static function get(): array
    {
        if (!file_exists(self::$file)) {
            return [];
        }
        return json_decode(file_get_contents(self::$file), true) ?? [];
    }

    public static function set(array $data): void
    {
        file_put_contents(self::$file, json_encode($data, JSON_PRETTY_PRINT));
    }

    public static function merge(array $data): void
    {
        self::set(array_merge(self::get(), $data));
    }
}
