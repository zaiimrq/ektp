<?php

use PHPUnit\Framework\TestCase;
use Zmrq\Ektp\Core\Generators\CityGenerator;
use Zmrq\Ektp\Core\Generators\UserGenerator;
use Zmrq\Ektp\Core\Generators\NumberGenerator;
use Zmrq\Ektp\Core\Generators\DistrictGenerator;
use Zmrq\Ektp\Core\Generators\ProvinceGenerator;

class NumberGeneratorTest extends TestCase
{
    public function testGenerateNumber()
    {
        $district = DistrictGenerator::make(
            CityGenerator::make(
                ProvinceGenerator::make()
            )
        );

        $user = UserGenerator::make('', $district);

        $number = NumberGenerator::make($district, $user);

        $this->assertEquals(16, strlen($number));
    }
}
