<?php
ini_set('memory_limit', '-1');
function run_the_code()
{
    $values = [10000, 20000, 50000, 100000, 500000 ];

    foreach ($values as $value) {
        for($i = 0; $i < 5; $i ++){
            $string = '{ time node fill_the_array-ready.js ' . $value . ' 2>> time-fill-js-err.txt ; }' . ' 2>> time-fill-js.txt ';
            echo $string;
            $output = shell_exec($string);
            echo $output;
        }
    }
}

run_the_code();

