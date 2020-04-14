<?php
$results = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

function getArrIntOfNilai(String $results):Array{
    return $results = array_map('intval',explode(" ",$results));
}

function getSumResults(String $results):int{
    $results = getArrIntOfNilai($results);
    $sum = array_sum($results);
    return $sum;
}

function getTopResults(Array $results,int $top):String{
    $top = array_slice($results,0,$top);
    return implode(" ",$top);
}

function getTopHighestResults(String $results,int $top=7):String{
    $results = getArrIntOfNilai($results);
    rsort($results);
    return getTopResults($results,$top);
}

function getTopLowestResults(String $results,int $top=7):String{
    $results = getArrIntOfNilai($results);
    sort($results);
    return getTopResults($results,$top);
}

print_r("Simpanan Nilai : $results\n");
print_r("Jumlah Nilai : ".getSumResults($results)."\n");
print_r("7 Nilai Tertinggi : ".getTopHighestResults($results)."\n");
print_r("7 Nilai Terendah : ".getTopLowestResults($results)."\n");