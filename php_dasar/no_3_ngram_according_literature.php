<?php

$input =  "Jakarta adalah ibukota negara Republik Indonesia";

function main(String $input):void{
    $input = strtolower($input);
    $words = explode(" ",$input);
    
    $unigram = $words;
    $bigram = ngrammer($words,2);
    $trigram = ngrammer($words,3);  

    $bigram = mapNgramWords($bigram);
    $trigram = mapNgramWords($trigram);

    echo "<li>Unigram : ".implode(", ",$unigram)."</li>";
    echo "<li>Bigram : ".implode(", ",$bigram)."</li>";
    echo "<li>Trigram : ".implode(", ",$trigram)."</li>";
}

function ngrammer(Array $input,int $n):Array{
    $res=[];
    $globalKey=0;
    while($globalKey<count($input)-($n-1)){
        $temp=[];
        $key=$globalKey;
        while(count($temp)<$n){
            $temp[]=$input[$key];
            $key++;
        }
        $res[$key]=$temp;
        $globalKey++;
    }
    return $res;
}

function mapNgramWords($words){
    $result = array_map(function($words){
        return implode(' ',$words);
    },$words);
    return $result;
}

main($input);