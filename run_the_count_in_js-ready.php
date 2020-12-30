
ini_set('memory_limit', '-1');
function run_the_code()
{
    $values = ['biblia-tysiaclecia_86mb.txt', 'biblia-tysiaclecia_173mb.txt', 'biblia-tysiaclecia_347mb.txt', 'biblia-tysiaclecia_434mb.txt', 'biblia-tysiaclecia_520mb.txt'];

    foreach ($values as $value) {
        for ($i = 0; $i < 5; $i++) {
            $string = '{ time node count-ready.js ' . $value . ' 2>> time-count-js-err.txt ; }' . ' 2>> time-count-js.txt ';
            echo $string;
            $output = shell_exec($string);
            echo $output;
        }
    }
}

run_the_code();

