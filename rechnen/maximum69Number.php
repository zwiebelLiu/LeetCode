<?php
/*给你一个仅由数字 6 和 9 组成的正整数 num。

你最多只能翻转一位数字，将 6 变成 9，或者把 9 变成 6 。

请返回你可以得到的最大数字。
*/
function maximum69Number ($num) {
    $str_num=strval($num);
    $arr_num=str_split($str_num);
    if(strpos($str_num,'6')>=0)
        {
            $arr_num[strpos($str_num,'6')]=9;
            return implode('',$arr_num);
        }

}
$num= 9696;
echo maximum69Number($num);
