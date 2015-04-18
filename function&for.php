<?php
// Viet baan for
$data = array(1,5,7,9,8);
function sum($x){
    $sum = 0;
    for ($i = 0; $i <= $x; $i++ ){
        $sum = $i + $sum . "\n";
    }
    echo $sum . "\n";
}

sum(1);
sum(5);
sum(7);
sum(9);
sum(8);
