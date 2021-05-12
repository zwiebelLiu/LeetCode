<?php
function isPowerOfFour($n) {
    if($n==1) return true;
    $num=4;
    while(true)
    {
        if($n<$num) return false;
        if($n==$num) return true;
        $n=$n/$num;
    }
}
