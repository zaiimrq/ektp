<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\Generators;

use Zmrq\Ektp\Core\ValueObjects\Identity;
use Zmrq\Ektp\Core\ValueObjects\Province;

final class IdentityGenerator
{
    public static function make(): Identity
    {
        $district = DistrictGenerator::make(
            city: CityGenerator::make(
                province: ProvinceGenerator::make()
            )
        );

        $user = UserGenerator::make("", $district);
        $number = NumberGenerator::make($district, $user);

        return new Identity(
            nik: $number,
            user: $user,
            district: $district,
            city: $district->city,
            province: $district->province
        );
    }
}
