<?php

use PHPUnit\Framework\TestCase;
use Zmrq\Ektp\Core\Generators\ProvinceGenerator;

class ProvinceGeneratorTest extends TestCase
{
    public function testGenerateProvince()
    {
        $province = ProvinceGenerator::make();

        $this->assertNotNull($province);
        $this->assertIsInt($province->code);
        $this->assertIsString($province->name);
    }
}
