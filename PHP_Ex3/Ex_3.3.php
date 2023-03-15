<?php

$input = readline();

for($i=1;$i<=$input;$i++){
    for($j=1;$j<=$input;$j++){
        if($i*$j<10){
            echo "  ";
            echo $i*$j;
        }
        else if($i*$j<100){
            echo " ";
            echo $i*$j;
        }
        else{
            echo $i*$j;
        }
    }
    echo "\n";
}