<?php
/*给你一个以行程长度编码压缩的整数列表 nums 。

考虑每对相邻的两个元素 [freq, val] = [nums[2*i], nums[2*i+1]] （其中 i >= 0 ），每一对都表示解压后子列表中有 freq 个值为 val 的元素，你需要从左到右连接所有子列表以生成解压后的列表。

请你返回解压后的列表。

 

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/decompress-run-length-encoded-list
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
*/
/*
 输入：nums = [1,2,3,4]
 输出：[2,4,4,4]
*/
function decompressRLElist($nums) {
    $res=[];
    $count=count($nums);
    for($i=0;$i<$count/2;$i++)
    {
        $new_frez_arry=array_fill($i,$nums[2*$i],$nums[2*$i+1]);
        foreach ($new_frez_arry as $value)
        {
            array_push($res,$value);
        }

    }
    return $res;
}

$nums = [1,2,3,4];
print_r(decompressRLElist($nums));
