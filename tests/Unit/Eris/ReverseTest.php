<?php

use Eris\Generator;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;

class ReverseTest extends TestCase
{
    use Eris\TestTrait;
    use Tests\GetAnnotations;
    // use InteractsWithExceptionHandling;

    public function __construct()
    {
        $this->h = new \App\Models\Reverse;
        parent::__construct();
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
}
