<?php

$name = "robi"; // global scope

function sayHello()
{
  echo $name . PHP_EOL;
}

sayHello(); // error
