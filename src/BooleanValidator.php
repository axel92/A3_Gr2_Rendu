<?php

namespace RENDU\ValuesValidator;
class BooleanValidator
{
    public function __construct()
    {
    }

    public static function isTrue($value)
    {
        if (!is_bool($value))
        {
            throw new \Exception("You must give a boolean then an integer as params");
        }
        return $value == true ? true : false;
    }

    public static function isFalse($value)
    {
        if (!is_bool($value))
        {
            throw new \Exception("You must give a boolean then an integer as params");
        }
        return $value == false ? true : false;
    }
}