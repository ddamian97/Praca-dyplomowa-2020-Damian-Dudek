<?php
ini_set('memory_limit', '-1');

function find_the_word($word, $file_name){
    $file_contents = file_get_contents($file_name);
    $word = '/'.$word.'/';
    if (preg_match_all($word, $file_contents, $matches)) {
        echo count($matches[0]);
    }else {
        echo "No verse found";
    }
}
if(isset($argv[1]) && isset($argv[2])){
    $word = $argv[1];
    $file_name = $argv[2];

    echo "Argument: ".$word." Plik: ".$file_name."\n";
    find_the_word($word, $file_name);
}else{
    echo "No arguments!";
}
