<?php

use Eris\Generator;
use PHPUnit\Framework\TestCase;

class PasswordHashErisTest extends TestCase
{
    use Eris\TestTrait;
    use Tests\GetAnnotations;

    /**
     * @test
     * @eris-repeat 10
     *
     * Property: a hashed string can be verified
     */
    public function testVerifyPasswordHash()
    {
        $this
            ->forAll(
                Generator\string()
            )
            ->then(function ($string) {
                $hash = password_hash($string, PASSWORD_DEFAULT);
                $this->assertTrue(password_verify($string, $hash));
            });
    }
}
