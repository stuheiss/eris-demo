<?php

use Eris\Generator;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;

class HaskellErisTest extends TestCase
{
    use Eris\TestTrait;
    use Tests\GetAnnotations;
    // use InteractsWithExceptionHandling;

    /**
     * @test
     * @eris-repeat 100
     *
     * Property: sorting a sorted array returns the sorted array values
     */
    public function testArraySortingIsIdempotent()
    {
        // $this->withoutExceptionHandling();
        $this
            ->forAll(
                Generator\seq(Generator\nat())
            )
            ->then(function ($array) {
                sort($array);
                $expected = $array;
                sort($array);
                $this->assertEquals($expected, $array);
            });
    }

    /**
     * @test
     * @eris-repeat 100
     *
     * Property: decoding an encoded string equals the original string
     */
    public function testDecodeEncodedStringReturnsOriginalString()
    {
        // $this->withoutExceptionHandling();
        $this
            ->forAll(
                Generator\string()
            )
            ->then(function ($str) {
                $encoded = base64_encode($str);
                $expected = base64_decode($encoded);
                $this->assertEquals($expected, $str);
            });
    }
}
