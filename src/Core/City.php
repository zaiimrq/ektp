<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core;

use Zmrq\Ektp\Core\Json\Serialize;
final class City extends Serialize
{
    public float $code;
    public string $name;
    public float $provinceCode ;

    private int $randomInt = 0;

    public function __construct() {
        $this->generate();
    }

    private function generate(): void
    {
        $decoded = $this->fromJson(__DIR__ . "/../data/province.json");
        $data = $decoded->data;
        $this->randomInt = random_int(0, count($data));
        $this->code = $this->getCode();
        $this->name = $this->getName();
        $this->provinceCode = $this->getProvinceCode();
    }

    private function getName(): string
    {

        $decoded = $this->fromJson(__DIR__ . "/../data/province.json");
        $data = $decoded->data;
        return $data[$this->randomInt]->nama_kabkota;
    }

    private function getCode(): float
    {
        $decoded = $this->fromJson(__DIR__ . "/../data/province.json");
        $data = $decoded->data;
        return (float) $data[$this->randomInt]->kode_kabkota;
    }
    private function getProvinceCode(): float
    {  $decoded = $this->fromJson(__DIR__ . "/../data/province.json");
        $data = $decoded->data;
        return (float) $data[$this->randomInt]->kode_provinsi;
    }
}
