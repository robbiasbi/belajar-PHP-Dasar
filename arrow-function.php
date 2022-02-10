<?php

$firstName = "Robi";
$lastName = "Ainul";

$annonymousFunction = function () use ($firstName, $lastName): string {
  return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn () => "Hello $firstName $lastName" . PHP_EOL;

echo $annonymousFunction();
echo $arrowFunction();
