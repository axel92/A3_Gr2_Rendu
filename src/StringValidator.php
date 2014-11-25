<?php

namespace RENDU\ValuesValidator;
class StringValidator
{
    public function __construct()
    {
    }

    public static function lengthEqual($string, $length)
    {
        if(!is_string($string) || !is_int($length))
        {
            throw new \Exception("You must give a string then an integer as params");
        }
        return mb_strlen($string) == $length ? true : false;
    }

    public static function lengthSuperior($string, $length)
    {
        if(!is_string($string) || !is_int($length))
        {
            throw new \Exception("You must give a string then an integer as params");
        }
        return mb_strlen($string) > $length ? true : false;
    }

    public static function lengthInferior($string, $length)
    {
        if(!is_string($string) || !is_int($length))
        {
            throw new \Exception("You must give a string then an integer as params");
        }
        return mb_strlen($string) < $length ? true : false;
    }

    public static function lengthBetween($string, $min, $max)
    {
        if(!is_string($string) || !is_int($min) || !is_int($max))
        {
            throw new \Exception("You must give a string then two integer as params");
        }
        return mb_strlen($string) >= $min && mb_strlen($string) <= $max ? true : false;
    }

    public static function lengthNoWhiteSpaceStartEnd($string)
    {
        if(!is_string($string))
        {
            throw new \Exception("You must give a string as param");
        }
        return trim($string) != $string ? true : false;
    }

    public static function noWhiteSpace($string)
    {
        if(!is_string($string))
        {
            throw new \Exception("You must give a string as param");
        }
        return count(explode(' ', $string)) < 2 ? true : false;
    }
}