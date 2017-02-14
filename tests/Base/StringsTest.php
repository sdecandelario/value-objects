<?php

namespace ValueObjects\Base;

class StringsTest extends \PHPUnit_Framework_TestCase
{
    public function testWeCanCreateAStringFromAString()
    {
        $string = new Strings("Hello");
        $this->assertEquals("Hello", $string);
    }

    public function testWeCanCreateAStringFromAnInteger()
    {
        $string = Strings::fromInt(123);
        $this->assertEquals("123", $string);
    }

    public function testWeCanCreateAStringFromADouble()
    {
        $string = Strings::fromFloat(5.2);
        $this->assertEquals("5.2", $string);
    }

    public function testWeCanConvertAStringToUppercase()
    {
        $stringNotUppercase = new Strings("My normal string");
        $stringUppercase = $stringNotUppercase->toUpperCase();

        $this->assertEquals("My normal string", $stringNotUppercase);
        $this->assertEquals("MY NORMAL STRING", $stringUppercase);
    }

    public function testWeCanConvertAStringToLowerCase()
    {
        $stringNotLowerCase = new Strings("This Is Not Lower Case");
        $stringLowerCase = $stringNotLowerCase->toLowerCase();

        $this->assertEquals("This Is Not Lower Case", $stringNotLowerCase);
        $this->assertEquals("this is not lower case", $stringLowerCase);
    }
}
