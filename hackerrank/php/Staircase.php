<?php 
staircase(6);
function staircase($n) {
for($i=1;$i<=$n;$i++)
{
   
    echo str_repeat(' ',$n-$i).str_repeat('#',$i).PHP_EOL;
}

}