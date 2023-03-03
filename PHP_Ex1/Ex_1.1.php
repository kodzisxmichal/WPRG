<?php

function rzutKostka(){
    $number = random_int(1, 6);
    return $number;
}

echo rzutKostka();