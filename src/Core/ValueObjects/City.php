<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\ValueObjects;

use Zmrq\Ektp\Core\ValueObjects\Province;

final readonly class City
{
    public function __construct(
        public Province $province,
        public readonly float $code,
        public readonly string $name
    ){}
}
