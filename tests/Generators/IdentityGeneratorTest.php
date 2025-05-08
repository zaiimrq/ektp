<?php

use PHPUnit\Framework\TestCase;
use Zmrq\Ektp\Core\Generators\IdentityGenerator;

class IdentityGeneratorTest extends TestCase
{
    public function testGenerateIdentity()
    {
        $identity = IdentityGenerator::make();
        $city = $identity->city;
        $province = $identity->province;
        $district = $identity->district;
        $user = $identity->user;

        $this->assertNotNull($city);
        $this->assertNotNull($province);
        $this->assertNotNull($district);
        $this->assertNotNull($user);
        $this->assertEquals(16 , strlen($identity->nik));
    }
}
