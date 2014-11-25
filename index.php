<?php

require __DIR__.'/vendor/autoload.php';

$date = new \DateTime();
$date2 = new \DateTime('2000-01-01');
$test = \RENDU\ValuesValidator\DateTimeValidator::equal($date, $date2);

var_dump($test);