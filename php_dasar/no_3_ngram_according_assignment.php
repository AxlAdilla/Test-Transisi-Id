<?php

$input =  "Jakarta adalah ibukota negara Republik Indonesia";


function ngram(String $input):void{
    $input = strtolower($input);
    $words = explode(" ",$input);
    
    //Unigram processs
    $unigram = $words;
    
    //Bigram process
    $bigram = array_map(function($words){
        return implode(' ',$words);
    },array_chunk($words,2));
    
    //trigram process
    $trigram = array_map(function($words){
        return implode(' ',$words);
    },array_chunk($words,3));

    echo "<li>Unigram : ".implode(", ",$unigram)."</li>";
    echo "<li>Bigram : ".implode(", ",$bigram)."</li>";
    echo "<li>Trigram : ".implode(", ",$trigram)."</li>";
}

ngram($input);