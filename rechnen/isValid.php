<?php
/*20. 有效的括号*/
function isValid($s) {
$count=strlen($s);
for($i=0;$i<$count;$i++)
{
    $s=  str_replace('()', '', $s);
    $s=  str_replace('{}', '', $s);
    $s=  str_replace('[]', '', $s);
}
//array_unique()
   if(strlen($s)>0)
       return false;
    else
        return true;
}
$s = "(([]){})";
var_dump(isValid($s));


function isValid2($s)
{
    do {
        $s = str_replace(['()', '[]', '{}'], '', $s, $c);
    } while ($c);

    return empty($s);
}
/*
作者：grey-24
链接：https://leetcode-cn.com/problems/valid-parentheses/solution/phpdai-ma-zui-shao-jie-fa-he-stackjie-fa-by-grey-2/
来源：力扣（LeetCode）
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
*/
