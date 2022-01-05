<?php

use Eris\Generator;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;
use App\Models\Diamond;

class DiamondErisTest extends TestCase
{
    /**
     * Property driven tests
     *
     * Example property based tests on Diamond Kata
     * See: https://blog.ploeh.dk/2015/01/10/diamond-kata-with-fscheck/
     * See: https://eris.readthedocs.io/en/latest/
     *
     * Properties to test:
     * Diamond is non-empty
     * First row contains "A"
     * Last row contains "A"
     * All rows must have a symmetric contour
     * Rows must contain the correct letters, in the correct order
     * Diamond is as wide as it is high
     * All rows except top and bottom have two identical letters
     * Lower left space is a triangle
     * Diamond is symetric around the horizontal axis
     */
    use Eris\TestTrait;
    use Tests\GetAnnotations;
    // use InteractsWithExceptionHandling;

    /**
     * @test
     * @eris-repeat 100
     *
     * Property: Diamond is non-empty
     */
    public function testDiamondIsNotEmpty()
    {
        // $this->withoutExceptionHandling();
        $this
            ->forAll(
                Generator\elements(range("A", "Z"))
            )
            ->then(function ($c) {
                $diamond = Diamond::diamond($c);
                $this->assertTrue(count($diamond) > 0);
            });
    }

    /**
     * @test
     * @eris-repeat 100
     *
     * Property: First row contains "A"
     */
    public function testFirstRowContainsA()
    {
        // $this->withoutExceptionHandling();
        $this
            ->forAll(
                Generator\elements(range("A", "Z"))
            )
            ->then(function ($c) {
                $diamond = Diamond::diamond($c);
                $this->assertTrue(str_contains(array_shift($diamond), "A"));
            });
    }

    /**
     * @test
     * @eris-repeat 100
     *
     * Property: Last row contains "A"
     */
    public function testLastRowContainsA()
    {
        // $this->withoutExceptionHandling();
        $this
            ->forAll(
                Generator\elements(range("A", "Z"))
            )
            ->then(function ($c) {
                $diamond = Diamond::diamond($c);
                $this->assertTrue(str_contains(array_pop($diamond), "A"));
            });
    }

    /**
     * @test
     * @eris-repeat 100
     *
     * Property: Rows must contain the correct letters, in the correct order
     */
    public function testRowsMustContainCorrectLettersInCorrectOrder()
    {
        // $this->withoutExceptionHandling();
        $this
            ->forAll(
                Generator\elements(range("A", "Z"))
            )
            ->then(function ($c) {
                $diamond = Diamond::diamond($c);
                foreach(range("A", $c) as $k => $v) {
                    $this->assertTrue(str_contains($diamond[$k], $v));
                }
                $k_max = $k;
                foreach (range($c, "A") as $k => $v) {
                    $this->assertTrue(str_contains($diamond[$k + $k_max], $v));
                }
            });
    }

    // ToDo
    // * All rows must have a symmetric contour
    // * Diamond is as wide as it is high
    // * All rows except top and bottom have two identical letters
    // * Lower left space is a triangle
    // * Diamond is symetric around the horizontal axis

}
