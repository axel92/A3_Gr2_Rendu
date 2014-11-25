<?php

require __DIR__.'/vendor/autoload.php';

$test = \RENDU\ValuesValidator\IntegerValidator::positive(-10);

var_dump($test);