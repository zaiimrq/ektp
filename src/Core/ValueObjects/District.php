<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\ValueObjects;

final readonly class District
{
    public function __construct(
        public readonly Province $province,
        public readonly City $city,
        public readonly float $code,
        public readonly string $name
    ){}
}
