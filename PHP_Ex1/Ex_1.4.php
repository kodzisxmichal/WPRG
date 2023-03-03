<?php

$pesel = "810203111621";
ReadPesel($pesel);
function ReadPesel(string $pesel){
    $rr = strval($pesel[0]*10 + $pesel[1]);
    $mm = str_pad(strval($pesel[2]*10+$pesel[3]),2,"0",STR_PAD_LEFT);
    $dd = str_pad(strval($pesel[4]*10+$pesel[5]),2,"0",STR_PAD_LEFT);
    echo "{$dd}-{$mm}-{$rr}";
}