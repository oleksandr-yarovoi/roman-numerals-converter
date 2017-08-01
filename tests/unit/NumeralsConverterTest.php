<?php


class NumeralsConverterTest extends \Codeception\Test\Unit
{
    public function testConvertZero()
    {
        $this->assertEquals('', \NumeralsConverter\RomanConverter::toRoman(0));
    }

    public function testConvertOne()
    {
        $this->assertEquals('I', \NumeralsConverter\RomanConverter::toRoman(1));
    }

    public function testConvertFive()
    {
        $this->assertEquals('V', \NumeralsConverter\RomanConverter::toRoman(5));
    }

    public function testConvertTen()
    {
        $this->assertEquals('X', \NumeralsConverter\RomanConverter::toRoman(10));
    }

    public function testConvertTwo()
    {
        $this->assertEquals('II', \NumeralsConverter\RomanConverter::toRoman(2));
    }

    public function testConvertThree()
    {
        $this->assertEquals('III', \NumeralsConverter\RomanConverter::toRoman(3));
    }

    public function testConvertTwenty()
    {
        $this->assertEquals('XX', \NumeralsConverter\RomanConverter::toRoman(20));
    }

    public function testConvertFifty()
    {
        $this->assertEquals('L', \NumeralsConverter\RomanConverter::toRoman(50));
    }

    public function testConvertFour()
    {
        $this->assertEquals('IV', \NumeralsConverter\RomanConverter::toRoman(4));
    }

    public function testConvertBigNumber()
    {
        $this->assertEquals('MMMCMLXXVIII', \NumeralsConverter\RomanConverter::toRoman(3978));
    }
}