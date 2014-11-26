<?php

namespace tests\RENDU\ValuesValidator;

use \RENDU\ValuesValidator\DateTimeValidator;

class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerateDateTimeIsEqual()
    {
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime();
        $this->assertTrue(DateTimeValidator::equal($date, $date));
    }

    public function testGenerateDateTimeIsNotEqual()
    {
        date_default_timezone_set('Europe/Paris');
        $this->assertFalse(DateTimeValidator::equal(new \DateTime(), new \DateTime('02/08/1958 00:00:00')));
    }

    public function testGenerateDateTimeIsSuperior()
    {
        date_default_timezone_set('Europe/Paris');
        $this->assertTrue(DateTimeValidator::isSuperior(new \DateTime('02/08/1958 00:00:00'), new \DateTime('01/08/1958 00:00:00')));
    }

    public function testGenerateDateTimeIsNotSuperior()
    {
        date_default_timezone_set('Europe/Paris');
        $this->assertFalse(DateTimeValidator::isSuperior(new \DateTime('01/08/1958 00:00:00'), new \DateTime('02/08/1958 00:00:00')));
    }

    public function testGenerateDateTimeIsInferior()
    {
        date_default_timezone_set('Europe/Paris');
        $this->assertTrue(DateTimeValidator::isInferior(new \DateTime('01/08/1958 00:00:00'), new \DateTime('02/08/1958 00:00:00')));
    }

    public function testGenerateDateTimeIsNotInferior()
    {
        date_default_timezone_set('Europe/Paris');
        $this->assertFalse(DateTimeValidator::isInferior(new \DateTime('02/08/1958 00:00:00'), new \DateTime('01/08/1958 00:00:00')));
    }

    public function testGenerateDateTimeIsBetween()
    {
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime();
        $this->assertTrue(DateTimeValidator::between($date, $date->sub(new \DateInterval('P1D')), $date->add(new \DateInterval('P3D'))));
    }

    public function testGenerateDateTimeIsNotBetween()
    {
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime();
        $this->assertFalse(DateTimeValidator::between($date, $date->add(new \DateInterval('P3D')), $date->sub(new \DateInterval('P5D'))));
    }
}