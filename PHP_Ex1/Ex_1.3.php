<?php

echo CensoreText("lubie ciastka, banany i mleko");
function CensoreText($sentence){
    $curseWords = array("ciastka", "banany" ,"mleko");
    foreach ($curseWords as $curseWord){
        $sentence = str_replace($curseWord,"*****", $sentence);
    }
    return $sentence;
}