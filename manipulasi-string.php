<?php

$name = "Robi Ainul Ihsan";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// konversi
$valueString = (string)100;
var_dump($valueString);


$valueInt = (int)"100";
var_dump($valueInt);


$valueFloat = (float)"1.01";
var_dump($valueFloat);

// mengakses karakter
$name = "Robi";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

// variable varsing
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

// curly brace
$var = "robi";
echo "This is {$var}s" . PHP_EOL;
