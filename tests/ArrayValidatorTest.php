<?php

namespace tests\RENDU\ValuesValidator;

use \RENDU\ValuesValidator\ArrayValidator;

class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerateIntegerIsEmpty()
    {
        $array = array();
        $this->assertTrue(ArrayValidator::isEmpty($array));
    }

    public function testGenerateArrayIsNotEmpty()
    {
        $array = array('key' => 'value');
        $this->assertFalse(ArrayValidator::isEmpty($array));
    }

    public function testException()
    {
        $array = array('Moto' => 5);
        ArrayValidator::compare($array, 'sd', 1);
    }

    public function testArrayIsEqual()
    {
        $array = array('Moto' => 5);
        $this->assertTrue(ArrayValidator::compare($array, ArrayValidator::LENGTH_EQUAL, 1));
    }

    public function testArrayIsNotEqual()
    {
        $array = array('Moto' => 5);
        $this->assertFalse(ArrayValidator::compare($array, ArrayValidator::LENGTH_EQUAL, 5));
    }

    public function testArrayIsInferior()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertTrue(ArrayValidator::compare($array, ArrayValidator::LENGTH_INFERIOR, 7));
    }

    public function testArrayIsSuperior()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertTrue(ArrayValidator::compare($array, ArrayValidator::LENGTH_SUPERIOR, 1));
    }

    public function testArrayIsInferiorOrEqual()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertTrue(ArrayValidator::compare($array, ArrayValidator::LENGTH_INFERIOR_OR_EQUAL, 2));
    }

    public function testArrayIsSuperiorOrEqual()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertTrue(ArrayValidator::compare($array, ArrayValidator::LENGTH_SUPERIOR_OR_EQUAL, 2));
    }

    public function testIsBetween()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertTrue(ArrayValidator::numberElementsBetween($array, 1, 2));
    }

    public function testIsNotBetween()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertFalse(ArrayValidator::numberElementsBetween($array, 5, 7));
    }

    public function testValueInArray()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertTrue(ArrayValidator::valueExists($array, '5'));
    }

    public function testNotValueInArray()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertFalse(ArrayValidator::valueExists($array, '6'));
    }

    public function testKeyInArray()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertTrue(ArrayValidator::keyExists($array, 'Car'));
    }

    public function testNotKeyInArray()
    {
        $array = array('Moto' => 5, 'Car' => 7);
        $this->assertFalse(ArrayValidator::keyExists($array, 'Ca'));
    }
}