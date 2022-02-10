<?php

$name = "robi"; //  global scope



function createName()
{
  global $name; // global keyword
  echo $name . PHP_EOL;

  echo $GLOBALS["name"] . PHP_EOL;
}

createName();
