<?php
/*
 * 326. 3的幂
*/
function isPowerOfThree($n) {
    if($n<=0) return 'false';
    if($n==1) return 'true';
    if($n%3!=0) return  'false';
    return isPowerOfThree($n/3);

}
    $n=45;

echo isPowerOfThree($n);


function SisPowerOfThree($num) {
    if($num==1) return true;
    $test = 3;
    while (true) {
        if ($num == $test) return true;
        if ($num < $test) return false;
        $num /= $test;  //$num=$num/$test;
    }
}
