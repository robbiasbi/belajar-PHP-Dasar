<?php

function foo()
{
  echo "Foo" . PHP_EOL;
}

function bar()
{
  echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

function sayHello(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

function samplefunction(string $name): string
{
  return "Sample $name";
}

sayHello("Robi", "sampleFunction");
sayHello("Robi", "strtoupper");
sayHello("Robi", "strtolower");
