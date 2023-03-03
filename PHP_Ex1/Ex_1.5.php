<?php

echo "
[1] Triangle field calculator
[2] Square field calculator
[3] Trapeze field calculator\n";

$input = readline();
switch($input){
    case 1:
        TriangleField();
        break;
    case 2:
        SquareField();
        break;
    case 3:
        TrapezeField();
        break;
    default:
        echo "wrong input";
}

function TriangleField(){
    echo "Podaj dlugosc boku A: ";
    $a = readline();
    echo "Podaj wysokosc H: ";
    $h = readline();
    $field = ($a * $h)/2;
    echo "Pole: $field\n";
    return $field;
}

function SquareField(){
    echo "Podaj dlugosc boku A: ";
    $a = readline();
    echo "Podaj dlugosc boku B: ";
    $b = readline();
    $field = ($a * $b);
    echo "Pole: $field\n";
    return $field;
}

function TrapezeField(){
    echo "Podaj dlugosc boku A: ";
    $a = readline();
    echo "Podaj dlugosc boku B: ";
    $b = readline();
    echo "Podaj wysokosc H: ";
    $h = readline();
    $field = (($a+$b)*$h)/2;
    echo "Pole: $field\n";
    return $field;
}
