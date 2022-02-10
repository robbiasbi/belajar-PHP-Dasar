<?php

$sayHello = function (string $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("Robi");
$sayHello("Aji");

function sayGoodBye(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Robi", function (string $name): string {
  return strtoupper($name);
});

$filterFunction = function (string $name): string {
  return strtoupper($name);
};

sayGoodBye("Robi", $filterFunction);

$firstName = "Robi";
$lastName = "Ainul";

$sayHelloRobi = function () use ($firstName, $lastName) {
  echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloRobi();

$firstName = "Aji";
$lastName = "subakti";
$sayHelloRobi();
