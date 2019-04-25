
<?php 
function miniMaxSum($arr) {
    $reversAr=$arr;
    rsort( $reversAr);
$newAr=sort($arr);
array_pop($arr);
array_pop($reversAr);
$minsum=0;
$maxSum=0;
$minsum=array_sum($arr);
$maxSum=array_sum($reversAr);

echo $minsum.' '.$maxSum;
}