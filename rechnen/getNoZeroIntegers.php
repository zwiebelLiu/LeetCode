<?php
/*
 * 1317. 将整数转换为两个无零整数的和
 * 「无零整数」是十进制表示中 不含任何 0 的正整数。

给你一个整数 n，请你返回一个 由两个整数组成的列表 [A, B]，满足：

A 和 B 都是无零整数
A + B = n
题目数据保证至少有一个有效的解决方案。

如果存在多个有效解决方案，你可以返回其中任意一个。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/convert-integer-to-the-sum-of-two-no-zero-integers
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
*/

function getNoZeroIntegers($n) {
    for($a=1;$a<$n;$a++)
    {
        if(noZero($a))
        {
            $b=$n-$a;
            if(noZero($b))
            {
                return [$a,$b];
            }
        }
    }

}

function noZero($num)
{
    if(!strpos(strval($num),'0'))
        return true;
    else
        return false;
}

$n=2;
print_r(getNoZeroIntegers($n));
