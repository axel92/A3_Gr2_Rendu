<?php

namespace tests\RENDU\ValuesValidator;

use \RENDU\ValuesValidator\StringValidator;

class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerateStringIsEqual()
    {
        $string = str_shuffle("azertyuiop987654321");
        $this->assertTrue(StringValidator::lengthEqual($string, mb_strlen($string)));
    }

    public function testGenerateStringIsNotEqual()
    {
        $string = str_shuffle("azertyuiop987654321");
        $this->assertFalse(StringValidator::lengthEqual($string, mb_strlen($string) - 10));
    }

    public function testGenerateStringIsSuperior()
    {
        $this->assertTrue(StringValidator::lengthSuperior(str_shuffle("azertyuiop987654321") , 1));
    }

    public function testGenerateStringIsNotSuperior()
    {
        $this->assertFalse(StringValidator::lengthSuperior(str_shuffle("azertyuiop987654321") , 9999));
    }

    public function testGenerateStringIsInferior()
    {
        $string = str_shuffle("azertyuiop987654321");
        $this->assertEquals(StringValidator::lengthInferior($string , mb_strlen($string) + 10), true);
    }

    public function testGenerateStringIsNotInferior()
    {
        $string = str_shuffle("azertyuiop987654321");
        $this->assertFalse(StringValidator::lengthInferior($string , mb_strlen($string) - 10));
    }

    public function testGenerateStringIsBetween()
    {
        $string = str_shuffle("azertyuiop987654321");
        $length = mb_strlen($string);
        $this->assertTrue(StringValidator::lengthBetween($string , $length - 10, $length + 10));
    }

    public function testGenerateStringIsNotBetween()
    {
        $string = str_shuffle("azertyuiop987654321");
        $length = mb_strlen($string);
        $this->assertFalse(StringValidator::lengthBetween($string , $length + 10, $length - 10));
    }

    public function testGenerateStringHasWhiteSpaceStartEnd()
    {
        $this->assertTrue(StringValidator::lengthNoWhiteSpaceStartEnd(" azertyuiop987654321 "));
    }

    public function testGenerateStringHasNoWhiteSpaceStartEnd()
    {
        $this->assertFalse(StringValidator::lengthNoWhiteSpaceStartEnd("azertyuiop987654321"));
    }

    public function testGenerateStringHasWhiteSpace()
    {
        $this->assertTrue(StringValidator::noWhiteSpace("azertyuiopqsdfghjklm"));
    }

    public function testGenerateStringHasNoWhiteSpace()
    {
        $this->assertFalse(StringValidator::noWhiteSpace("azerty uiop qsdf ghjklm"));
    }
}