<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\Generators;

use Exception;
use Zmrq\Ektp\Core\Json\Serialize;
use Zmrq\Ektp\Core\ValueObjects\City;
use Zmrq\Ektp\Core\ValueObjects\Province;

final class CityGenerator extends Serialize
{
    public static function make(Province $province): City
    {
        $encoded = self::fromJson(__DIR__ . "/../../Data/city.json");
        $data = $encoded->data;

        return self::getCity(
            province: $province,
            data: $data
        );
    }

    private static function getCity(Province $province, array $data): City
    {
        foreach ($data as $item) {
            if ((int) $item->kode_provinsi === $province->code) {
                return new City(
                    province: $province,
                    code: (float) $item->kode_kabkota,
                    name: $item->nama_kabkota
                );
            }
        }

        throw new Exception("Province code not found !", 1);

    }
}
