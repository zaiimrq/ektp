<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\Generators;

use Zmrq\Ektp\Core\ValueObjects\District;
use Zmrq\Ektp\Core\ValueObjects\User;

final class NumberGenerator
{
    public static function make(District $district, User $user): string
    {
        $provinceCode = self::formatCode($district->province->code);
        $cityCode = self::formatCode($district->city->code);
        $districtCode = self::formatCode($district->code);

        $birthDate = strtotime($user->bornDate);
        $day = (int) date('d', $birthDate);
        $month = date('m', $birthDate);
        $year = date('y', $birthDate);

        $dayFormatted = str_pad((string) ($user->gender === 'perempuan' ? $day + 40 : $day), 2, '0', STR_PAD_LEFT);

        $serial = str_pad((string) random_int(0, 9999), 4, '0', STR_PAD_LEFT);

        $nik = $provinceCode . $cityCode . $districtCode . $dayFormatted . $month . $year . $serial;

        if (strlen($nik) !== 16) {
            throw new \InvalidArgumentException("NIK tidak valid. Panjang: " . strlen($nik) . " digit.");
        }

        return $nik;
    }

    private static function formatCode(string|float $code): string
    {
        return str_pad(substr((string) $code, 0, 2), 2, '0', STR_PAD_LEFT);
    }
}
