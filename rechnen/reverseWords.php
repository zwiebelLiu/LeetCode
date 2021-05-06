<?php
/*
 *557. 反转字符串中的单词 III
 * */
function reverseWords($s) {
    $s=explode(" ",$s);
    $res='';
    for($i=0;$i<count($s);$i++)
    {
        $res.=strrev($s[$i]).' ';
    }

    return  rtrim($res);
}

$s="Let's take LeetCode contest";
reverseWords($s);
