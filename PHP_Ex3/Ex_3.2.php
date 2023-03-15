<?php


$input = readline();
$throws = rzutKostka($input);

foreach ($throws as $throw){
    echo $throw;
    echo " ";
}

function rzutKostka($n){
    $throws = array();
    for($i=0;$i<$n;$i++){
        $throws[$i] = rand(1, 6);
    }

    return $throws;
}