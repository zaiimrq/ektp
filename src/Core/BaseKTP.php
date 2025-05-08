<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core;

use Zmrq\Ektp\Core\Generators\IdentityGenerator;


class BaseKTP
{
    public function __get($name)
    {
        return IdentityGenerator::make()->$name;
    }
}
