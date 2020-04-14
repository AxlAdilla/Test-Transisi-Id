<?php

$arr = [
    ['f','g','h','i'],
    ['j','k','p','q'],
    ['r','s','t','u']
];

function cari(Array $arr,String $words):bool{
    $isThere = true;

    $flatten = array_merge(...array_values($arr));

    foreach (str_split($words) as $word) {
        if (!in_array($word,$flatten)){
            $isThere=false;
            break;
        }
    }
    return $isThere; 
}

cari($arr,'fghi');
cari($arr, 'fghp'); 
cari($arr, 'fjrstp');