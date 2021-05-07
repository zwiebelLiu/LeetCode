<?php
/*面试题 17.06. 2出现的次数
编写一个方法，计算从 0 到 n (含 n) 中数字 2 出现的次数。
 * */
function numberOf2sInRange($n) {
    $sum=0;
    for($i=1;$i<$n+1;$i++)
    {
         $str_i=substr_count(strval($i),2);
       $sum+=$str_i;
    }
    return $sum;
}

$n=25;
echo numberOf2sInRange($n);
