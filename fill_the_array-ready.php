<?php
ini_set('memory_limit', '-1');

function reducer($accumulator, $current_value){
    $accumulator += $current_value;
    return $accumulator;
}
function fill_the_array($number){
    $range = $number;
    $new_array =  array_fill(0, $range, 0);
    $random_number = 0;
    for($i = 1; $i <= $range; $i++){
        do{
            $random_number = rand(1, $range);
        }
        while(in_array($random_number, $new_array));
        $new_array[$i] = $random_number;
    }
    return $new_array;
}

if(isset($argv[1])){
    $range = $argv[1];
    echo "Range: ".$range."\n";
    $array = fill_the_array($range);
    $string=implode(", ",$array);
    $array_sum = array_reduce($array, "reducer");
}else{
    echo "No arguments!";
}
