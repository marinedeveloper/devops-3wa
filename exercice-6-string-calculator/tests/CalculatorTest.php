<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

//    public function testAdd()
//    {
//        $this->assertEquals(1, Calculator::add("1"));
//        $this->assertEquals(3, Calculator::add("3"));
//        $this->assertEquals(45, Calculator::add("1,2,3,4,5,6,7,8,9"));
//        $this->assertEquals(47, Calculator::add("1,2,2\n3,4,5,6,7,8,9"));
//    }
//
//    public function testFailWhenEndingByDelimiter() {
//        $this->expectExceptionMessage('La chaine ne peut pas finir par un délimiteur');
//        Calculator::add("1,2,3,4,5,6,7,");
//    }
//
//    public function testAddWithCustomDelimiter()
//    {
//        $this->assertEquals(7, Calculator::add("//sep\n2sep5"));
//        $this->assertEquals(3, Calculator::add("//;\n1;2"));
//    }

//    public function testNegativeNumbers()
//    {
//        $this->expectExceptionMessage('Negative number(s) not allowed : -4, -9');
//        Calculator::add("2,-4,-9");
//    }

    public function testNumberSuperiorThousands()
    {
        $this->assertEquals(2, Calculator::add("1000, 2"));
//
    }

}
