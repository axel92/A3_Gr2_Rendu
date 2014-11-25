<?php

namespace RENDU\ValuesValidator;

/**
 * Class IntegerValidator
 * @package RENDU\ValuesValidator
 */
class IntegerValidator
{
    /**
     * @param $a
     * @param $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($a, $b)
    {
        if(!is_int($a) || !is_int($b)) {
            throw new \Exception('You must give integers as params');
        }
        return $a == $b ? true : false;
    }

    /**
     * @param $a
     * @param $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($a, $b)
    {
        if(!is_int($a) || !is_int($b))
        {
            throw new \Exception('You must give integers as params');
        }
        return $a > $b ? true : false;
    }

    /**
     * @param $a
     * @param $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function inferior($a, $b)
    {
        if(!is_int($a) || !is_int($b))
        {
            throw new \Exception('You must give integers as params');
        }
        return $a < $b ? true : false;
    }

    /**
     * @param $value
     * @param $min
     * @param $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function between($value, $min, $max)
    {
        if(!is_int($value) || !is_int($min) || !is_int($max))
        {
            throw new \Exception('You must give integers as params');
        }
        return $value >= $min && $value <= $max ? true : false;
    }

    /**
     * @param $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($value)
    {
        if(!is_int($value))
        {
            throw new \Exception('You must give integers as param');
        }
        return $value <= 0 ? true : false;
    }

    /**
     * @param $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($value)
    {
        if(!is_int($value))
        {
            throw new \Exception('You must give integers as param');
        }
        return $value >= 0 ? true : false;
    }
}