<?php

$array = array(5,7,9,-12,17,1);
$array2 = array(1,5,6,2,-5,7,12,24);

echo foreachMaxNumber($array);
echo "\n";
echo forMaxNumber($array2);
echo "\n";
echo whileMaxNumber($array2);
echo "\n";
echo doWhileMaxNumber($array2);

function foreachMaxNumber($array){
    $max = -9999;
    foreach ($array as $number){
        if($number>$max){
            $max = $number;
        }
    }

    return $max;
}
function forMaxNumber($array){
    $max = -9999;
    for($i=0;$i<sizeof($array);$i++){
        if($array[$i]>$max){
            $max = $array[$i];
        }
    }

    return $max;
}

function whileMaxNumber($array){
    $max = -9999;
    $i=0;
    while($i<sizeof($array)-1){
        $i++;
        if($array[$i]>$max){
            $max = $array[$i];
        }
    }

    return $max;
}

function doWhileMaxNumber($array){
    $max = -9999;
    $i=-1;
    do{
        $i++;
        if($array[$i]>$max){
            $max = $array[$i];
        }
    }while($i<sizeof($array)-1);

    return $max;
}