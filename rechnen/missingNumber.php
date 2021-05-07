<?php
/*
 * 面试题 17.04. 消失的数字
 * 数组nums包含从0到n的所有整数，但其中缺了一个。请编写代码找出那个缺失的整数。你有办法在O(n)时间内完成吗？
 * */
function missingNumber($nums) {
    $max=max($nums);
    $sum_nums=array_sum($nums);
    $sum=0;

    for($i=0;$i<$max+1;$i++)
    {
        $sum=$i+$sum;
    }
    $res=$sum-$sum_nums;
    return $res;
}

$nums=[0];
echo missingNumber($nums);


function superL($nums)
{
    $n = count($nums);
    $sum = $n*($n+1)/2;
    foreach($nums as $el) {
        $sum -= $el;
    }
    return $sum;
}
