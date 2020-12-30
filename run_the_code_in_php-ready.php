<?php
ini_set('memory_limit', '-1');
function run_the_code()
{
    $values = [1000000, 10000000, 20000000, 50000000, 100000000];

    foreach ($values as $value) {
        for($i = 0; $i < 5; $i ++){
            $string = '{ time php polowienie-ready.php ' . $value . ' 0.0000000000000001 2>> time-php-err.txt ; }' . ' 2>> time-php.txt';
            echo $string;
            $output = shell_exec($string);
            echo $output;
        }
    }
}

run_the_code();

