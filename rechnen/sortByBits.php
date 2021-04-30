<?php
function sortByBits($arr) {
    $new_arr=$res=[];
    for($i=0;$i<count($arr);$i++)
    {
        $new_arr[$i]=substr_count(strval(decbin($arr[$i])),'1');
    }
    asort($new_arr);
    foreach ($new_arr as $key => $val) {
        array_push($res,$arr[$key]);
    }
    //print_r($res);
}

$arr = [0,1,2,3,4,5,6,7,8];
sortByBits($arr);


function superSolution($arr)
{
    $a1 = [];
    foreach($arr as $k => $v)
    {
        $a1[$k]['c'] = substr_count(decbin($v),1);
        $a1[$k]['n'] = $v;
    }
    asort($a1);
    return array_column($a1, 'n');
    /*
        作者：xulifeng
    链接：https://leetcode-cn.com/problems/sort-integers-by-the-number-of-1-bits/solution/tou-ji-qu-qiao-by-xulifeng-cvmt/
    来源：力扣（LeetCode）
    著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
    */
}
