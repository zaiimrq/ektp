<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\ValueObjects;

final readonly class Province
{
    public function __construct(
        public readonly int $code,
        public readonly string $name
    ){}
}
