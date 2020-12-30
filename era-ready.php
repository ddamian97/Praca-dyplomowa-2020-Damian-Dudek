<?php
ini_set('memory_limit', '-1');
function reducer($accumulator, $current_value){
    $accumulator += $current_value;
    return $accumulator;
}
function sieve($limit)
{
    $bools = [];
    $primes = [];
    for ($i = 1; $i < $limit; $i++) {
        array_push($bools, true);
    }

    for ($i = 2; $i < $limit; $i++) {
        if ($bools[$i - 2]) {
            for ($j = $i * 2; $j <= $limit; $j += $i) {
                $bools[$j - 2] = false;
            }
        }
    }

    for ($p = 0; $p < count($bools); $p++) {
        if ($bools[$p]) {
            $primes[] = $p + 2;
        }
    }
    echo count($bools);

    return $primes;
}
if(isset($argv[1])){
    $limit = $argv[1];
    echo "Limit: ".$limit."\n";
    $primes_Sieve = sieve($limit);
    $sum = array_reduce($primes_Sieve, "reducer");
    echo $sum;
}else{
    echo "No arguments!";
}
