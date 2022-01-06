<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ReverseTest extends TestCase
{
    public function __construct()
    {
        $this->h = new \App\Models\Reverse;
        parent::__construct();
    }

    /**
     * simple unit test can reverse an array
     */
    public function test_array_reverse_will_reverse_an_array()
    {
        $this->assertEquals([1,2,3], $this->h->reverse([3,2,1]));
    }
}
