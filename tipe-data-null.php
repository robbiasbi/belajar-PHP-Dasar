<?php

$name = "ROBI";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";


echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "RObi";
unset($contoh);

$contoh = "ngemprah";
$contoh = null;

var_dump(isset($name));
