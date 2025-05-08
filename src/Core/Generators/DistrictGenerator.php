<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\Generators;

use Exception;
use Zmrq\Ektp\Core\Json\Serialize;
use Zmrq\Ektp\Core\ValueObjects\City;
use Zmrq\Ektp\Core\ValueObjects\District;

final class DistrictGenerator extends Serialize
{
    public static function make(City $city): District
    {
        $decoded = self::fromJson(__DIR__ . "/../../Data/district.json");
        $data = $decoded->data;

        return self::getDistrict(
            city: $city,
            data: $data
        );
    }

    private static function getDistrict(City $city, array $data): District
    {
        foreach ($data as $item) {
            if ((float) $item->kode_kabkota === $city->code) {
                return new District(
                    city: $city,
                    province: $city->province,
                    code: (float) $item->kode_kecamatan,
                    name: $item->nama_kecamatan
                );
            }
        }

        throw new Exception("District code not found !", 1);

    }
}
