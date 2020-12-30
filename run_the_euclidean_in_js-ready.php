<?php
ini_set('memory_limit', '-1');
function run_the_code()
{
    $values = [1000000, 10000000, 20000000, 50000000, 100000000];

    foreach ($values as $value) {
        for($i = 0; $i < 5; $i ++){
            $string = '{ time node euklides-ready.js 922337203685460 857214 ' . $value . ' 2>> time-js-err.txt ; }' . ' 2>> time-js.txt ';
            echo $string;
            $output = shell_exec($string);
            echo $output;
        }
    }
}

run_the_code();

