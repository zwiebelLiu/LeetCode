<?php
/*
 * 1221. 分割平衡字符串
 * */
function balancedStringSplit($s) {
        $l=$r=0;
        $num=0;
        var_dump($s);
    for ($i = 0, $len = strlen($s); $i < $len; $i++) {
        if ($s[$i] == "R") $r++;
        if ($s[$i] == "L") $l++;
        if ($l == $r) $num++;
    }
    return $num;

}

$s = "RLRRLLRLRL";

echo balancedStringSplit($s);
