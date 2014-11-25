<?php

require __DIR__.'/vendor/autoload.php';

$test = \RENDU\ValuesValidator\IntegerValidator::equal(10, 10);

var_dump($test);