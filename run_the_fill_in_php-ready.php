<?php
ini_set('memory_limit', '-1');
function run_the_code()
{
    $values = [10000, 20000, 50000, 100000, 500000 ];

    foreach ($values as $value) {
        for($i = 0; $i < 5; $i ++){
            $string = '{ time php fill_the_array-ready.php ' . $value . ' 2>> time-fill-php-err.txt ; }' . ' 2>> time-fill-php.txt ';
            echo $string;
            $output = shell_exec($string);
            echo $output;
        }
    }
}

run_the_code();

