<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\Json;

class Serialize
{
    protected static function fromJson(string $path): mixed
    {
        $json = file_get_contents($path);
        $decoded = json_decode($json);
        return $decoded;
    }

}
