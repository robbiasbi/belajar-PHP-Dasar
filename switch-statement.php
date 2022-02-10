<?php

$nilai = "A";

// menggunakan switch
switch ($nilai):
  case "A":
    echo "Anda Lulus dengan Baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda Lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda Tidak Lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin Anda Salah jurusan" . PHP_EOL;
endswitch;
