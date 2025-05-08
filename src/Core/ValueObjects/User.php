<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\ValueObjects;

final readonly class User{
    public function __construct(
        public readonly ?string $name,
        public readonly string $bornDate,
        public readonly string $bornCity,
        public readonly string $religion,
        public readonly string $marriedStatus,
        public readonly string $work,
        public readonly string $gender,
    ){}
}
