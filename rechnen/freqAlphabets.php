<?php
/*
 * 给你一个字符串 s，它由数字（'0' - '9'）和 '#' 组成。我们希望按下述规则将 s 映射为一些小写英文字符：

字符（'a' - 'i'）分别用（'1' - '9'）表示。
字符（'j' - 'z'）分别用（'10#' - '26#'）表示。 
返回映射之后形成的新字符串。

题目数据保证映射始终唯一。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/decrypt-string-from-alphabet-to-integer-mapping
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
function freqAlphabets($s)
{
    $hash = [
        '1'   => 'a',
        '2'   => 'b',
        '3'   => 'c',
        '4'   => 'd',
        '5'   => 'e',
        '6'   => 'f',
        '7'   => 'g',
        '8'   => 'h',
        '9'   => 'i',
        '10#' => 'j',
        '11#' => 'k',
        '12#' => 'l',
        '13#' => 'm',
        '14#' => 'n',
        '15#' => 'o',
        '16#' => 'p',
        '17#' => 'q',
        '18#' => 'r',
        '19#' => 's',
        '20#' => 't',
        '21#' => 'u',
        '22#' => 'v',
        '23#' => 'w',
        '24#' => 'x',
        '25#' => 'y',
        '26#' => 'z'
    ];
    $res='';
  $arr=str_split($s);
    for($i=0;$i<count($arr);$i++)
    {
       if(($i+2)<count($arr)&& ($arr[$i+2]=='#'))
       {
           $currte_key=$arr[$i].$arr[$i+1].'#';
           $res=$res.$hash[$currte_key];
           $i=$i+2;
       }
       else
       {
           $currte_key=$arr[$i];
           $res=$res.$hash[$currte_key];
       }
    }
    return $res;
}
$s="12345678910#11#12#13#14#15#16#17#18#19#20#21#22#23#24#25#26#";
echo freqAlphabets($s);

