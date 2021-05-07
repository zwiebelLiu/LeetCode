<?php
/*面试题 17.01. 不用加号的加法
 * */

function add($a, $b) {
    $res=[];
    array_push($res,$a,$b);

    $sum=array_sum($res);
    return $sum;
}
$a=1;
$b=1;
echo add($a,$b);
