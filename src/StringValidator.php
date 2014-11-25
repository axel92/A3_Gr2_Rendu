<?php

namespace RENDU\ValuesValidator;

/**
 * Class StringValidator
 * @package RENDU\ValuesValidator
 */
class StringValidator
{
    /**
     * @param $string
     * @param $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthEqual($string, $length)
    {
        if(!is_string($string) || !is_int($length))
        {
            throw new \Exception('You must give a string then an integer as params');
        }
        return mb_strlen($string) == $length ? true : false;
    }

    /**
     * @param $string
     * @param $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthSuperior($string, $length)
    {
        if(!is_string($string) || !is_int($length))
        {
            throw new \Exception('You must give a string then an integer as params');
        }
        return mb_strlen($string) > $length ? true : false;
    }

    /**
     * @param $string
     * @param $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthInferior($string, $length)
    {
        if(!is_string($string) || !is_int($length))
        {
            throw new \Exception('You must give a string then an integer as params');
        }
        return mb_strlen($string) < $length ? true : false;
    }

    /**
     * @param $string
     * @param $min
     * @param $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthBetween($string, $min, $max)
    {
        if(!is_string($string) || !is_int($min) || !is_int($max))
        {
            throw new \Exception('You must give a string then two integer as params');
        }
        return mb_strlen($string) >= $min && mb_strlen($string) <= $max ? true : false;
    }

    /**
     * @param $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthNoWhiteSpaceStartEnd($string)
    {
        if(!is_string($string))
        {
            throw new \Exception('You must give a string as param');
        }
        return trim($string) != $string ? true : false;
    }

    /**
     * @param $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpace($string)
    {
        if(!is_string($string))
        {
            throw new \Exception('You must give a string as param');
        }
        return count(explode(' ', $string)) < 2 ? true : false;
    }
}