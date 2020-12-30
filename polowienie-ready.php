<?php
function Cos_func($x, $multiplier){
    return cos($multiplier * $x) - $x;
}

function Bisection_Method($a, $b, $i, $epsilon){
    if(Cos_func($a, $i) == 0){
            return $a;
    }
    if(Cos_func($b, $i) == 0){
            return $b;
    }

    while ($b - $a > $epsilon) {
        $middle = ($a + $b) / 2;
        if (Cos_func($middle, $i) == 0) {
                return $middle;
        }
        if (Cos_func($a, $i) * Cos_func($middle, $i) < 0) {
            $b = $middle;
        } else {
            $a = $middle;
        }
    }
    return (($a + $b) / 2);
}
function Operate_Bisection($b, $epsilon, $size){
    $result = $b;
    $a = 0;

    for($i = 1; $i <=$size; $i++){
        $result = Bisection_Method($a, $b, $i, $epsilon);
        $b = $result;
    }
    return $result;
}
if(isset($argv[1]) && isset($argv[2])){
    $size = $argv[1];
    $epsilon = $argv[2];
    $b = M_PI;
    Operate_Bisection($b, $epsilon, $size);

}else{
    echo "No arguments!";
}
