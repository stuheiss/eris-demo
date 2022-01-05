<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Diamond;

/**
 * Example driven tests
 */
class DiamondTest extends TestCase
{
    public function testDiamondLetterA()
    {
        $this->assertEquals([
            "A",
        ], Diamond::diamond("A"));
    }
    public function testDiamondLetterB()
    {
        $this->assertEquals([
            " A ",
            "B B",
            " A ",
        ], Diamond::diamond("B"));
    }

    public function testDiamondLetterC()
    {
        $this->assertEquals([
            "  A  ",
            " B B ",
            "C   C",
            " B B ",
            "  A  ",
        ], Diamond::diamond("C"));
    }
}
