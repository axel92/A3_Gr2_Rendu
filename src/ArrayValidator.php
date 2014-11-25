<?php

namespace RENDU\ValuesValidator;

/**
 * Class ArrayValidator
 * @package RENDU\ValuesValidator
 */
class ArrayValidator
{
    const LENGTH_EQUAL = 1;
    const LENGTH_INFERIOR = 2;
    const LENGTH_SUPERIOR = 3;
    const LENGTH_INFERIOR_OR_EQUAL = 4;
    const LENGTH_SUPERIOR_OR_EQUAL = 5;

    /**
     * @param $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEmpty($array)
    {
        if (!is_array($array))
        {
            throw new \Exception('You must give an array as param');
        }
        return count($array) == 0 ? true : false;
    }

    /**
     * @param $array
     * @param $comparator
     * @param $integer
     *
     * @return bool|int
     *
     * @throws \Exception
     */
    public static function compare($array, $comparator, $integer)
    {
        if(!is_array($array) || !is_int($integer))
            throw new \Exception('Invalid format');
        if (!in_array($comparator, [
            self::LENGTH_EQUAL,
            self::LENGTH_INFERIOR,
            self::LENGTH_SUPERIOR,
            self::LENGTH_SUPERIOR_OR_EQUAL,
            self::LENGTH_INFERIOR_OR_EQUAL,
        ])) {
            throw new \InvalidArgumentException('You must give a valid comparator');
        }
        $arrayLength = count($array);
        $result = 0;
        switch ($comparator) {
            case self::LENGTH_EQUAL:
                $result = $arrayLength === $integer;
                break;
            case self::LENGTH_INFERIOR:
                $result = $arrayLength < $integer;
                break;
            case self::LENGTH_SUPERIOR:
                $result = $arrayLength > $integer;
                break;
            case self::LENGTH_INFERIOR_OR_EQUAL:
                $result = $arrayLength <= $integer;
                break;
            case self::LENGTH_SUPERIOR_OR_EQUAL:
                $result = $arrayLength >= $integer;
                break;
        }
        return $result;
    }

    /**
     * @param $array
     * @param $min
     * @param $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsBetween($array, $min, $max)
    {
        if (!is_array($array) || !is_int($min) || !is_int($max))
            throw new \Exception('You must give an array then two integers');
        return count($array) >= $min && count($array) <= $max ? true : false;
    }

    /**
     * @param $array
     * @param $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function keyExists($array, $key)
    {
        if(!is_array($array) || !is_string($key))
            throw new \Exception('Invalid parameter');
        return array_key_exists($key, $array) ? true : false;
    }

    /**
     * @param $array
     * @param $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function valueExists($array, $value)
    {
        if(!is_array($array) || !is_string($value))
            throw new \Exception('Invalid parameter');
        return in_array($value, $array) ? true : false;
    }
}