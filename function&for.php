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

for ($i = 0; $i < count($data); $i++){
    sum($data[$i]);
}