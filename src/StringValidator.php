<?php

namespace RENDU\ValuesValidator;
class StringValidator
{
    public function __construct()
    {
    }

    public static function lengthIsEqual($string, $length)
    {
        if(!is_string($string) || !is_int($length))
        {
            throw new \Exception("You must give a string then an integer as params");
        }
        return mb_strlen($string) == $length ? true : false;
    }

    public static function lengthIsSuperior($string, $length)
    {
        if(!is_string($string) || !is_int($length))
        {
            throw new \Exception("You must give a string then an integer as params");
        }
        return mb_strlen($string) > $length ? true : false;
    }

    public static function lengthIsInferior($string, $length)
    {
        if(!is_string($string) || !is_int($length))
        {
            throw new \Exception("You must give a string then an integer as params");
        }
        return mb_strlen($string) < $length ? true : false;
    }

    public static function lengthIsBetween($string, $min, $max)
    {
        if(!is_string($string) || !is_int($min) || !is_int($max))
        {
            throw new \Exception("You must give a string then two integer as params");
        }
        return mb_strlen($string) >= $min && mb_strlen($string) <= $max ? true : false;
    }
}