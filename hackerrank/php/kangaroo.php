
<?php 
echo kangaroo(0,2,5,3);
function kangaroo($x1, $v1, $x2, $v2) {
  
$k1 = $x1;
 $k2 = $x2;
    if ($x1 > $x2) {
        while ($k1 >= $k2) {
            $k1 = $k1 + $v1;
            $k2 = $k2 + $v2;
            if ($k1 == $k2){
                 return "YES";
            }
        }
    }else {
		
        while($k2 >= $k1) {
			
            $k1 = $k1 + $v1;
            $k2 = $k2 + $v2;
			echo $k1;
			echo '</br>';
			echo $k2;
            if ($k1 == $k2){
                return "YES";
            }
        }
    }
    return "NO";
}