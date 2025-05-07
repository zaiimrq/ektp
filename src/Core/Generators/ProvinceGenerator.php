<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\Generators;

use Zmrq\Ektp\Core\Json\Serialize;
use Zmrq\Ektp\Core\ValueObjects\Province;

final class ProvinceGenerator extends Serialize
{
    public static function make(): Province
    {
        $decoded = self::fromJson(__DIR__ . "/../../Data/province.json");
        $data = $decoded->data;
        $max = count($data) - 1 ;

        $province = $data[random_int(0, $max)];

        return new Province(
            code:(int) $province->kode_provinsi,
            name: $province->nama_provinsi
        );

    }
}
