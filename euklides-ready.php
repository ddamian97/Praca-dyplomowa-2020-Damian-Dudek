<?php
ini_set('memory_limit', '-1');

function euclidean($a, $b) {
    if($b != 0){
        $c = $a % $b;
        return euclidean($b, $c);
    }
    return $a;
}

function operate_Euclidean($a, $b, $limit){
    $results = 0;
    for($i = 1; $i <= $limit; $i++){
        $new_a = $a * $i;
        $new_b = $b * $i;
        $results = euclidean($new_a, $new_b);
    }
}
if((isset($argv[1])) && (isset($argv[2])) && (isset($argv[3]))){
    $arg1 = $argv[1];
    $arg2 = $argv[2];
    $limit = $argv[3];
    echo "Argumenty: ".$arg1." ".$arg2." Limit: ".$limit."\n";
    operate_Euclidean($arg1, $arg2, $limit);

}else{
    echo "No arguments!";
}
