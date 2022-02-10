<?php

$first = [
  "first_name" => "Robi"
];

$last = [
  "first_name" => "budi",
  "last_name" => "ihsan"
];

$full = $first + $last;
var_dump($full);

$a = [
  "first_name" => "Robi",
  "last_name" => "ihsan"
];


$b = [
  "last_name" => "ihsan",
  "first_name" => "robi"
];

var_dump($a == $b);
var_dump($a === $b);
