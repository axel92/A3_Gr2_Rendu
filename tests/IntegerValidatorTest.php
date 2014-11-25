<?php

namespace tests\RENDU\ValuesValidator;

use \RENDU\ValuesValidator\IntegerValidator;

class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerateIntegerIsEqual()
    {
        $value = mt_rand(0, 10);
        $this->assertTrue(IntegerValidator::equal($value, $value));
    }

    public function testGenerateIntegerIsNotEqual()
    {
        $value = mt_rand(0, 10);
        $this->assertFalse(IntegerValidator::equal($value, ++$value));
    }

    public function testGenerateIntegerIsSuperior()
    {
        $value = mt_rand(0, 10);
        $this->assertTrue(IntegerValidator::euperior($value, --$value));
    }

    public function testGenerateIntegerIsNotSuperior()
    {
        $value = mt_rand(0, 10);
        $this->assertFalse(IntegerValidator::euperior($value, ++$value));
    }

    public function testGenerateIntegerIsInferior()
    {
        $value = mt_rand(0, 10);
        $this->assertTrue(IntegerValidator::inferior($value, ++$value));
    }

    public function testGenerateIntegerIsNotInferior()
    {
        $value = mt_rand(0, 10);
        $this->assertFalse(IntegerValidator::inferior($value, --$value));
    }

    public function testGenerateIntegerIsBetween()
    {
        $value = mt_rand(0, 10);
        $this->assertTrue(IntegerValidator::between($value, --$value, $value + 2));
    }

    public function testGenerateIntegerIsNotBetween()
    {
        $value = mt_rand(0, 10);
        $this->assertFalse(IntegerValidator::between($value, ++$value, $value - 2));
    }

    public function testGenerateIntegerIsNegative()
    {
        $value = mt_rand(-10, 0);
        $this->assertTrue(IntegerValidator::negative($value));
    }

    public function testGenerateIntegerIsNotNegative()
    {
        $value = mt_rand(1, 11);
        $this->assertFalse(IntegerValidator::negative($value));
    }

    public function testGenerateIntegerIsPositive()
    {
        $value = mt_rand(0, 10);
        $this->assertTrue(IntegerValidator::positive($value));
    }

    public function testGenerateIntegerIsNotPositive()
    {
        $value = mt_rand(-11, -1);
        $this->assertFalse(IntegerValidator::positive($value));
    }
}