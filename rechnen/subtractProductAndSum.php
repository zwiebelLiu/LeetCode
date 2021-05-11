<?php
/*
 *1281. 整数的各位积和之差
 * */

function subtractProductAndSum($n) {
    $str_n=strval($n);
    $arr_n=str_split($str_n);
    $times=1;
    for($i=0;$i<count($arr_n);$i++)
    {
        $times=$times*$arr_n[$i];
    }
    $sum=array_sum($arr_n);

    return $times-$sum;

}
$n = 4421;
echo subtractProductAndSum($n);


function SsubtractProductAndSum($n) {
    $a = 1;
    $b = 0;

    while ($n) {
        $mod = $n % 10;
        $a *= $mod;
        $b += $mod;
        $n = (int) ($n / 10);
    }

    return $a - $b;
}
/*
作者：kuriv
链接：https://leetcode-cn.com/problems/subtract-the-product-and-sum-of-digits-of-an-integer/solution/php-by-kuriv-24/
来源：力扣（LeetCode）
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
*/
