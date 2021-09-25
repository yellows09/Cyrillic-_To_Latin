<?php
$alfabet = [
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
];
$word = 'приВет!!';

function tr($word,$alfabet){
    $result = '';
    for($i=0;$i<mb_strlen($word);$i++){ // count sym $word
        $letter = mb_substr($word, $i, 1); // goes through every element
        $smalLetter = mb_strtolower($letter); // turn it to small
        if(isset($alfabet[$smalLetter])) { // if letter exist
            if($smalLetter == $letter) { // or it was a small letter
                $result .= $alfabet[$letter]; // assign it to $resuly
            }else{
                $result .= ucfirst($alfabet[$smalLetter]); 
            }
        }else{
            $result = $result . $letter;
        }
    }
    echo $result;
}
echo tr($word,$alfabet);




