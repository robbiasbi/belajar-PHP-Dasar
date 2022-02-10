<?php

function sayHello(string $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Robi", "strtoupper");
sayHello("Robi", "strtolower");
sayHello("Robi", function (string $name): string {
  return strtoupper($name);
});
sayHello("Robi", fn ($name) => strtoupper($name));
