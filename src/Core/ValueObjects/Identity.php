<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\ValueObjects;

final readonly class Identity
{
    public function __construct(
        public readonly string $nik,
        public readonly ?User $user,
        public readonly City $city,
        public readonly District $district,
        public readonly Province $province,
    ){}
}
