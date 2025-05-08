<?php

use PHPUnit\Framework\TestCase;
use Zmrq\Ektp\Core\Generators\CityGenerator;
use Zmrq\Ektp\Core\Generators\ProvinceGenerator;

class CityGeneratorTest extends TestCase
{
    public function testGenerateCity()
    {
        $province = ProvinceGenerator::make();
        $city = CityGenerator::make($province);

        $this->assertEquals($province->code, $city->province->code);
        $this->assertIsFloat($city->code);
        $this->assertIsString($city->name);
        $this->assertNotNull($city);
    }
}
