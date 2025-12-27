<?php
//namespace Installer\Support;

class Console
{
    public static function title(string $text)
    {
        echo "\n🧩 $text\n";
        echo str_repeat('=', strlen($text) + 3) . "\n\n";
    }

    public static function section(string $text)
    {
        echo "\n📌 $text\n";
    }

    public static function ask(string $question, string $default = null): string
    {
        $prompt = $default
            ? "$question [$default]: "
            : "$question: ";

        echo $prompt;
        $input = trim(fgets(STDIN));

        return $input !== '' ? $input : ($default ?? '');
    }

    /*public static function askHidden(string $question): string
    {
        echo "$question: ";
        system('stty -echo');
        $value = trim(fgets(STDIN));
        system('stty echo');
        echo "\n";
        return $value;
    }*/
	
	
	public static function askHidden(string $question): string
	{
		echo "$question: ";

		if (stripos(PHP_OS, 'WIN') === 0) {
			// Windows: no se puede ocultar sin hacks
			return trim(fgets(STDIN));
		}

		// Unix / Linux / macOS
		system('stty -echo');
		$value = trim(fgets(STDIN));
		system('stty echo');
		echo "\n";

		return $value;
	}

    public static function success(string $text)
    {
        echo "✅ $text\n";
    }

    public static function warning(string $text)
    {
        echo "⚠️ $text\n";
    }

    public static function info(string $text)
    {
        echo "ℹ️ $text\n";
    }
}
