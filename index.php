<?php

use Zmrq\Ektp\Core\Generators\CityGenerator;
use Zmrq\Ektp\Core\Generators\DistrictGenerator;
use Zmrq\Ektp\Core\Generators\NumberGenerator;
use Zmrq\Ektp\Core\Generators\ProvinceGenerator;
use Zmrq\Ektp\Core\Generators\UserGenerator;

require_once "./vendor/autoload.php";

$district = DistrictGenerator::make(
    CityGenerator::make(
        ProvinceGenerator::make()
    )
);

$user = UserGenerator::make('', $district);

$number = NumberGenerator::make($district, $user);
var_dump($number);
