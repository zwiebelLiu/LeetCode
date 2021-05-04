<?php
/*1704. 判断字符串的两半是否相似
给你一个偶数长度的字符串 s 。将其拆分成长度相同的两半，前一半为 a ，后一半为 b 。

两个字符串 相似 的前提是它们都含有相同数目的元音（'a'，'e'，'i'，'o'，'u'，'A'，'E'，'I'，'O'，'U'）。注意，s 可能同时含有大写和小写字母。

如果 a 和 b 相似，返回 true ；否则，返回 false 。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/determine-if-string-halves-are-alike
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
*/
function halvesAreAlike($s) {

    $s_arry=str_split($s,strlen($s)/2);
   // var_dump($s_arry);
    $testStr=['a','e','i','o','u','A','E','I','O','U'];
    $teilA=$teilB=0;
   for($i=0;$i<count($testStr);$i++)
   {
     $teilA+=substr_count($s_arry[0],$testStr[$i]);
     $teilB+=substr_count($s_arry[1],$testStr[$i]);
    }

   if($teilA==$teilB)
   {
       return true;
   }
   else
   {
       return false;
   }

}
$s = "AbCdEfGh";
var_dump(halvesAreAlike($s));
