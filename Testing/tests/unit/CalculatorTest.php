<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    private $calculator;

    protected function setUp(){
        $this->calculator = new \App\Calculator;
    }

    protected function tearDown(){
        unset($this->calculator);
    }

    public function testAddBothPositive(){
        $result = $this->calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testAddPositiveAndNegative(){
        $result = $this->calculator->add(1, -2);
        $this->assertEquals(-1, $result);
    }

    public function testAddPositiveAndZero(){
        $result = $this->calculator->add(2, 0);
        $this->assertEquals(2, $result);
    }

}