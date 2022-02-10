<?php

$values = array(18, 9, 8, 7.5);
var_dump($values);

$names = ["Robi", "Ainul", "Ihsan"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

// membuat Map

$robi = array(
  "id" => "robi",
  "name" => "Robi Ainul",
  "age" => 24,
  "address" => array(
    "city" => "Bogor",
    "country" => "Indonesia"
  )
);

var_dump($robi);

var_dump($robi["name"]);
var_dump($robi["address"]["country"]);

$budi = array(
  "id" => "budi",
  "name" => "budi aja",
  "age" => 39
);

var_dump($budi);
