<?php

namespace RENDU\ValuesValidator;

/**
 * Class DateTimeValidator
 * @package RENDU\ValuesValidator
 */
class DateTimeValidator
{
    /**
     * @param \Datetime $date1
     * @param \Datetime $date2
     *
     * @return bool
     */
    public static function equal(\Datetime $date1, \Datetime $date2)
    {
        return $date1 == $date2 ? true : false;
    }

    /**
     * @param \Datetime $date1
     * @param \Datetime $date2
     *
     * @return bool
     */
    public static function isSuperior(\Datetime $date1, \Datetime $date2)
    {
        return $date1 > $date2 ? true : false;
    }

    /**
     * @param \Datetime $date1
     * @param \Datetime $date2
     *
     * @return bool
     */
    public static function isInferior(\Datetime $date1, \Datetime $date2)
    {
        return $date1 < $date2 ? true : false;
    }

    /**
     * @param \Datetime $date
     * @param \Datetime $dateMin
     * @param \Datetime $dateMax
     *
     * @return bool
     */
    public static function between(\Datetime $date, \Datetime $dateMin, \Datetime $dateMax)
    {
        return $date >= $dateMin && $date <= $dateMax ? true : false;
    }
}