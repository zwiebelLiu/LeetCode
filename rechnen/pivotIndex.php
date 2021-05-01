<?php
/*
 * 输入：nums = [1, 7, 3, 6, 5, 6]
输出：3
解释：
中心下标是 3 。
左侧数之和 (1 + 7 + 3 = 11)，
右侧数之和 (5 + 6 = 11) ，二者相等。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/find-pivot-index
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * */
function pivotIndex($nums) {
    $nums_left=$nums_right=[];
    // $orign=$nums;
    $count=count($nums);
    $sum=array_sum($nums);
    for($i=0;$i<$count;$i++)
    {
        if(($sum-$nums[$i])%2==0)
        {
        $nums_left=array_slice($nums,0,$i);
        $nums_right=array_slice($nums, $i+1);
        if(array_sum($nums_left)==array_sum($nums_right))
        {
            return $i;
        }
        }
        //echo count($nums)-1;
    }
    return -1;

}
$nums = [1, 2,3];
echo pivotIndex($nums);

