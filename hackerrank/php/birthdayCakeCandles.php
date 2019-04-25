<?php 
function birthdayCakeCandles($ar) {
$newArray=array_count_values($ar);
krsort($newArray);
$data=array_values($newArray);
return $data[0];


}