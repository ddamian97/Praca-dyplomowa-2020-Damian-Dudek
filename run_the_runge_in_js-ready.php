<?php
ini_set('memory_limit', '-1');
function run_the_code()
{
    $values = [10000000, 50000000, 100000000, 200000000, 400000000];

    foreach ($values as $value) {
        for($i = 0; $i < 5; $i ++){
            $string = '{ time node runge-ready.js 56.0 5.6 0.00000001 '.$value.' 2>> time-js-err.txt ; }' . ' 2>> time-js.txt';
            echo $string;
            $output = shell_exec($string);
            echo $output;
        }
    }
}

run_the_code();

