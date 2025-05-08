<?php

use PHPUnit\Framework\TestCase;
use Zmrq\Ektp\Core\Generators\CityGenerator;
use Zmrq\Ektp\Core\Generators\DistrictGenerator;
use Zmrq\Ektp\Core\Generators\ProvinceGenerator;

class DistrictGeneratorTest extends TestCase
{
    public function testGenerateDistrict()
    {
        $province = ProvinceGenerator::make();
        $city = CityGenerator::make($province);
        $district = DistrictGenerator::make($city);

        $this->assertEquals($province->code, $district->province->code);
        $this->assertEquals($city->code, $district->city->code);
        $this->assertIsFloat($district->code);
        $this->assertIsString($district->name);
        $this->assertNotNull($district);
    }
}
