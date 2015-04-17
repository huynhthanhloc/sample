<?php

$data = array(1,3,2,5,7,8);
$chan ="So chan : ";
$le ="So le : ";
for ($i = 0;$i < count($data) ;$i++){
	if ($data[$i] % 2 == 0)
	$chan .= "$data[$i] ";
	else
	$le .= "$data[$i] ";
}
echo "$chan" . "\n";
echo "$le";
?>