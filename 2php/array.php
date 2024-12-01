<?php

$nama = array ("au", "ea", "max");


var_dump($nama);

echo $nama [2];

echo '<br>';

for ($i=0; $i < 3 ; $i++) { 
    echo $i. ' ';
    echo $nama[$i];
}

echo '<br>';

$aman = array(
    "au" => "sby",
    "ea" => "sda",
    "max" => "Belanda"
);

var_dump($aman);

echo '<br>';


foreach ($aman as $key => $v) {
    echo $key. " => " .$v;

    echo '<br>';
}
?>