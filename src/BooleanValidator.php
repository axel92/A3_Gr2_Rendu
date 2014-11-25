<?php

namespace RENDU\ValuesValidator;

/**
 * Class BooleanValidator
 * @package RENDU\ValuesValidator
 */
class BooleanValidator
{
    /**
     * @param $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isTrue($value)
    {
        if (!is_bool($value))
        {
            throw new \Exception('You must give a boolean then an integer as params');
        }
        return $value == true ? true : false;
    }

    /**
     * @param $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($value)
    {
        if (!is_bool($value))
        {
            throw new \Exception('You must give a boolean then an integer as params');
        }
        return $value == false ? true : false;
    }
}