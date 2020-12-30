<?php
function Runge_Kutta($t, $h, $v, $g, $step, $steps){
    $prev_v = $v;
    $prev_h = $h;
    for($i = 0; $i < $steps; $i++){
        $h = $prev_h + $prev_v * $step;
        $v = $prev_v - $g * $step;
        $prev_h = $h;
        $prev_v = $v;
    }
    return [$h, $v];
}

if(isset($argv[1]) && isset($argv[2]) && isset($argv[3]) && isset($argv[4])){
    $height0 = $argv[1];
    $velocity0 = $argv[2];
    $step = $argv[3];
    $steps = $argv[4];
    $g = 9.81;
    $time0 = 0;

    echo "Height: ".$height0." Velocity 0: ".$velocity0." Time 0: ".$time0." g: ".$g." Precision: ".$step." Steps: ".$steps."\n";
    $results = Runge_Kutta($time0, $height0, $velocity0, $g, $step, $steps);
    var_dump($results);
}else{
    echo "No arguments!";
}
