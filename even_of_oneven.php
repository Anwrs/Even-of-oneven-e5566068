<?php

echo ("Voer een getal in"). PHP_EOL;
$a = readline("");

if($a % 2 == 0){
    echo ("Het getal is even");
} else {
    echo ("Het getal is oneven");
}