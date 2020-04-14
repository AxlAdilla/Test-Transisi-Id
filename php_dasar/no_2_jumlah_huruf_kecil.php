<?php

$input = "TranSISI";

function countLowercase($input):void{
    $lowercaseInput = strtolower($input); 
    $countLowerCase = similar_text($input,$lowercaseInput); // get only similar lowercase
    print_r("\"$input\" mengandung ".$countLowerCase." buah huruf kecil \n");
}

countLowercase($input);