<?php
/**
 * @param Integer[] $nums
 * @return Integer
 * 给你一个整数数组 nums 。数组中唯一元素是那些只出现 恰好一次 的元素。

请你返回 nums 中唯一元素的 和 。
 */
function sumOfUnique($nums) {
    $anzahl=array_count_values($nums);
    $sum=0;
    foreach ($anzahl as $k=>$v)
    {
        if($anzahl[$k]>1)
        {
            unset($anzahl[$k]);
        }
        else
        {
            $sum=$sum+$k;
        }
    }
   return $sum;
}

$nums = [1,2,3,2];
echo sumOfUnique($nums);
