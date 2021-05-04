<?php
/*
 * 给你一个整数 n，请你返回 任意 一个由 n 个 各不相同 的整数组成的数组，并且这 n 个数相加和为 0 。
*/
function sumZero($n) {
    $res=[];
    for($i=0;$i<$n;$i++)
    {
        if($i<$n-1)
        {
            $res[$i]=rand(-$n*100,$n*100);
        }
        else
        {
           $res[$n-1]=array_sum($res)*(-1);
        }
    }
    return $res;
}
$n=5;
print_r(sumZero($n));

function SuperSumZero($n) {
    if($n == 1) return [0];
    return range(1-$n,$n,2);
}
