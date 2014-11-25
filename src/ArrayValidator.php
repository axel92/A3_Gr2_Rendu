<?php

namespace RENDU\ValuesValidator;
class ArrayValidator
{
    public function __construct()
    {
    }

    public static function isEmpty($tab)
    {
        if (!is_array($tab)) {
            throw new \Exception("You must give an array as param");
        }
        return count($tab) == 0 ? true : false;
    }
}