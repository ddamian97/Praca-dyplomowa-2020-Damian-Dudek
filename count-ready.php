<?php
ini_set('memory_limit', '-1');
function count_the_lines($name) {
    $file_name = $name;
    $number_of_lines = count(file($file_name));

    echo $number_of_lines;
}

if(isset($argv[1])){
    $file_name = $argv[1];
	echo "File name: ".$file_name."\n";
	count_the_lines($file_name);
}else{
    echo "No arguments!";
}
