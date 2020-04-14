<?php
$input = "DFHKNQ";
function encryption($input){
    $words = str_split($input);
    $encrypted=[];
    foreach ($words as $key => $word) {
        if($key%2==0){
            $encryptedAscii = ord($word)+$key+1;    
            $encrypted[] = chr($encryptedAscii);
        }else{
            $encryptedAscii = ord($word)-$key-1;
            $encrypted[] = chr($encryptedAscii);
        }
    }
    print_r(implode('',$encrypted)."\n");
}

encryption($input);