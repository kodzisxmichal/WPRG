<?php

function primary($n) {
    if($n%2==0)
        return ($n==2);
    for ($i=3;$i<=sqrt($n);$i+=2) {
        if ($n%$i==0) {
            return false;
        }
    }
    return true;
}