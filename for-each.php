<?php

$names = ["Robi", "Ainul", "Ihsan"];

for ($i = 0; $i < count($names); $i++) {
  echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
  echo "Data $name" . PHP_EOL;
}

$person = [
  "first_name" => "Robi",
  "niddle_name" => "Ainul",
  "last_name" => "Ihsan"
];

foreach ($person as $key => $value) {
  echo "$key : $value" . PHP_EOL;
}
