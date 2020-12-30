<?php
ini_set('memory_limit', '-1');
function run_the_code()
{
    $values = [10000000, 50000000, 100000000, 200000000, 400000000];

    foreach ($values as $value) {
        for($i = 0; $i < 5; $i ++){
            $string = '{ time php runge-ready.php 56.0 5.6 0.00000001 '.$value.' 2>> time-php-err.txt ; }' . ' 2>> time-php.txt';
            echo $string;
            $output = shell_exec($string);
            echo $output;
        }
    }
}

run_the_code();

