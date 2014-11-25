<?php

namespace RENDU\ValuesValidator;
class IntegerValidator
{
    public function __construct()
    {
    }

    public static function equal($a, $b)
    {
        if(!is_int($a) || !is_int($b))
        {
            throw new \Exception("You must give integers as params");
        }
        return $a == $b ? true : false;
    }

    public static function superior($a, $b)
    {
        if(!is_int($a) || !is_int($b))
        {
            throw new \Exception("You must give integers as params");
        }
        return $a > $b ? true : false;
    }

    public static function inferior($a, $b)
    {
        if(!is_int($a) || !is_int($b))
        {
            throw new \Exception("You must give integers as params");
        }
        return $a < $b ? true : false;
    }

    public static function between($value, $min, $max)
    {
        if(!is_int($value) || !is_int($min) || !is_int($max))
        {
            throw new \Exception("You must give integers as params");
        }
        return $value >= $min && $value <= $max ? true : false;
    }

    public static function negative($value)
    {
        if(!is_int($value))
        {
            throw new \Exception("You must give integers as params");
        }
        return $value <= 0 ? true : false;
    }

    public static function positive($value)
    {
        if(!is_int($value))
        {
            throw new \Exception("You must give integers as params");
        }
        return $value >= 0 ? true : false;
    }
}