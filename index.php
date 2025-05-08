<?php

use Zmrq\Ektp\Core\Generators\CityGenerator;
use Zmrq\Ektp\Core\Generators\ProvinceGenerator;

require "./vendor/autoload.php";

$province = ProvinceGenerator::make();

$city = CityGenerator::make($province);

var_dump(
    "Province Code $province->code",
    "Province Name $province->name",
    "City Province Code " . $city->province->code,
    "City Name " . $city->name,
);
