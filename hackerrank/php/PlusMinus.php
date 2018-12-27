<?php 

$arr=[-4 ,3, -9, 0 ,4 ,1];
plusMinus($arr);
function plusMinus($arr) {
$total=count($arr);
$pos=0;
$neg=0;
$zero=0;
foreach($arr as $detail)
{
    if($detail>0)
    {
        $pos=$pos+1;
    }elseif($detail<0)
    {
        $neg=$neg+1;
    }else
    {
        $zero=$zero+1;
    }
   
}
$posFrac=number_format($pos/$total,6);
$negFrac=number_format($neg/$total,6);
$zeroFrac=number_format($zero/$total,6);
echo $posFrac.PHP_EOL;
echo $negFrac.PHP_EOL;
echo $zeroFrac;
//return [$posFrac,$negFrac,$zeroFrac];
}