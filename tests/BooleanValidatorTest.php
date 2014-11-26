<?php

namespace tests\RENDU\ValuesValidator;

use \RENDU\ValuesValidator\BooleanValidator;

class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIsTrue()
    {
        $this->assertTrue(BooleanValidator::isTrue(true));
    }

    public function testIsNotTrue()
    {
        $this->assertFalse(BooleanValidator::isTrue(false));
    }

    public function testIsFalse()
    {
        $this->assertTrue(BooleanValidator::isFalse(false));
    }

    public function testIsNotFalse()
    {
        $this->assertFalse(BooleanValidator::isFalse(true));
    }
}