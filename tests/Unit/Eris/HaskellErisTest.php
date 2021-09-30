<?php

use Eris\Generator;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;

class HaskellErisTest extends TestCase
{
    use Eris\TestTrait;
    use Tests\GetAnnotations;
    // use InteractsWithExceptionHandling;

    public function __construct()
    {
        $this->h = new \App\Models\Haskell;
        parent::__construct();
    }

    /**
     * simple unit test can reverse an array
     */
    public function test_array_reverse_will_reverse_an_array()
    {
        $this->assertEquals([1,2,3], $this->h->reverse([3,2,1]));
    }

    /**
     * @test
     * @eris-repeat 100
     *
     * Property: length of an array is retained when the array is reversed
     */
    public function testArrayReversePreserveLength()
    {
        // $this->withoutExceptionHandling();
        $this
            ->forAll(
                Generator\seq(Generator\nat())
            )
            ->then(function ($array) {
                $this->assertEquals(count($array), count($this->h->reverse($array)));
            });
    }

    /**
     * @test
     * @eris-repeat 100
     *
     * Property: reversing a reversed array returns the original array values
     */
    public function testArrayReverseWillReverseRandomArrays()
    {
        // $this->withoutExceptionHandling();
        $this
            ->forAll(
                Generator\seq(Generator\nat())
            )
            ->then(function ($array) {
                $this->assertEquals($array, $this->h->reverse($this->h->reverse($array)));
            });
    }

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
                // var_dump(['original'=>$str, 'encoded'=>$encoded]);
                $this->assertEquals($expected, $str);
            });
    }
}
