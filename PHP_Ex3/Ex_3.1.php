<?php

$array = array(5,7,9,-12,17,1);
$array2 = array(1,5,6,2,-5,7,12,3);

echo maxNumber($array);
echo "\n";
echo maxNumber($array2);

function maxNumber($array){
    $max = -9999;
    foreach ($array as $number){
        if($number>$max){
            $max = $number;
        }
    }

    return $max;
}