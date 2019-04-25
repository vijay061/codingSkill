<?php 

print_r(primeFactors(600851475143));

//Check if a number is prime
function isPrime($num, $pf = null)
{
    if(!is_array($pf)) 
    {
        for($i=2;$i<intval(sqrt($num));$i++) {
            if($num % $i==0) {
                return false;
            }
        }
        return true;
    } else {
        $pfCount = count($pf);
        for($i=0;$i<$pfCount;$i++) {
            if($num % $pf[$i] == 0) {
                return false;
            }
        }
        return true;
    }
}

//Find Prime Factors
function primeFactors($num)
{
    //Record the base
    $base = floatval($num/2);
	$base =number_format($num/2, 0, '', '')
	echo $base;
    $pf = array();
    $pn = null;
    for($i=2;$i <= $base;$i++) {
        if(isPrime($i, $pn)) {
            $pn[] = $i;
            while($num % $i == 0)
            {
                $pf[] = $i;
				echo $i;
                $num = $num/$i;
				
            }
        }
    }
    return $pf;
}