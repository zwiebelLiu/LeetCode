<?php

/*
 *剑指 Offer 10- I. 斐波那契数列
 * F(0) = 0,   F(1) = 1
F(N) = F(N - 1) + F(N - 2), 其中 N > 1.
 * */
function fib($n) {
    $arr=[];
    for($i=0; $i<$n+1; $i++)
    {
        if($i<2)
        {
            $arr[$i]=$i;
        }
        else
        {
            $arr[$i]=($arr[$i-1]+$arr[$i-2]) % 1000000007;
        }
    }

    return $arr[$n];
}
$n=4;
echo fib($n);
