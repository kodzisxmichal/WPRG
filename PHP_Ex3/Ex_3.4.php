<?php

$input = readline();
if(primary($input))
    echo "\nLiczba jest pierwsza";
else
    echo "\nLiczba nie jest pierwsza";

function primary($n): bool{
    $counter=0;

    if($n%2==0){
        echo "Ilość operacji: $counter";
        return ($n==2);
    }

    for ($i=3;$i<=sqrt($n);$i+=2) {
        $counter++;
        if ($n%$i==0) {
            echo "Ilość operacji: $counter";
            return false;
        }
    }

    echo "Ilość operacji: $counter";
    return true;
}