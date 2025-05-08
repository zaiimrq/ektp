<?php declare(strict_types=1);

namespace Zmrq\Ektp\Core\Generators;

use Zmrq\Ektp\Core\ValueObjects\User;
use Zmrq\Ektp\Core\Generators\ProvinceGenerator;
use Zmrq\Ektp\Core\ValueObjects\District;

final class UserGenerator
{
    public static function make(string $name, District $district): User
    {
        $self = new static;
        return new User(
            name: $name,
            bornDate: $self->getBornDate(),
            bornCity: $self->getBornPlace($district),
            religion: $self->getReligion(),
            work: $self->getWork(),
            gender: $self->getGender(),
            marriedStatus: $self->getMarriedStatus()
        );
    }

    private function getBornDate(): string
    {
        $start = strtotime("01-01-1990");
        $end = time();
        $random = rand($start, $end);

        return date("d-m-Y", $random);

    }

    private function getBornPlace(District $district): string
    {
        return $district->name;
    }

    private function getReligion(): string
    {
        $religions = ['islam', 'kristen', 'hindu', 'buddha'];
        $key = array_rand($religions);
        return $religions[$key];
    }
    private function getGender(): string
    {
        $genders = ['laki-laki', 'perempuan'];
        $key = array_rand($genders);
        return $genders[$key];
    }
    private function getMarriedStatus(): string
    {
        $marriedStatus = ['kawin', 'belum kawin'];
        $key = array_rand($marriedStatus);
        return $marriedStatus[$key];
    }
    private function getWork(): string
    {
        $works = ['pelajar/mahasiswa', 'swasta', 'negeri'];
        $key = array_rand($works);
        return $works[$key];
    }
}
