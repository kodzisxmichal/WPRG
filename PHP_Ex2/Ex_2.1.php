<?php

$input = readline();
echo getRandomNumber($input);

function getRandomNumber($index) {
    $numbers = array();
    for ($i = 0; $i <= $index; $i++) {
        $numbers[] = rand(1, 100);
    }

    return $numbers[$index];
}