<?php

namespace App\tests\utils;

use App\src\utils\Calculator; 

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    /** @test */
    public function can_add_two_intgers(){
        $cal = new Calculator();           

        $result = $cal->add(4,8);
        $this->assertEquals(12, $result);
    }
}
        