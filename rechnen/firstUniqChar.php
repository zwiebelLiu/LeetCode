<?php
/*
 * 387. 字符串中的第一个唯一字符
 * */
function firstUniqChar($s)
{
    $array_s = str_split($s);
    $anzahl_s = array_count_values($array_s);

    if (($key = array_search(1, $anzahl_s)) != false) {
        return strpos($s, $key);
    } else {
        return -1;
    }
}

$s = "loveleetcode";
echo firstUniqChar($s);
