<?php

echo 'Name : ';
echo 'Robi Ainul Ihsan';
echo "\n";

echo "Nama : ";
echo "Robi\t Ainul\t Ihsan\n";

echo <<<ROBI
Selamat belajar PHP
sekarang, kita belajar tipe data string
bisa mnggunakan herdoc

ROBI;

echo <<<'ROBI'
Selamat belajar PHP
sekarang, kita belajar tipe data string
bisa menggunakan nodoc
ROBI;
