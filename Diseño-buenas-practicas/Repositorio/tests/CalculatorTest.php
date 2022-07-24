<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    public function testAddWillReturnTheSumOfItsParameters(){
        $sut = new Calculator();
        $this ->assertEquals(4, $sut->add(2, 2));
    }
}


?>