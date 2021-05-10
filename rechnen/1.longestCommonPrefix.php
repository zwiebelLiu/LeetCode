<?php

/*14. 最长公共前缀
 * */


function longestCommonPrefix($strs) {
    $min=0;
    $anzahl=count($strs);
    for($i=0;$i<$anzahl;$i++)
    {
        $str[$i]=str_split($strs[$i]);
        $aktuell_min=count($str[$i]);
     //   array_push($arr)
        if($i==0) {
            $min=$aktuell_min;
            $min_value=$strs[$i];
        }
        else if($aktuell_min<$min)
        {
            $min=$aktuell_min;
            $min_value=$strs[$i];
        }
    }
//echo $min_value;
    for($n=0;$n<$min;$n++)
    {
        $search_str=$min_value;
        $res=0;
        for($a=0;$a<$anzahl;$a++)
        {

        }

    }



}

$str= ["wer","flo","flt"];
longestCommonPrefix($str);


