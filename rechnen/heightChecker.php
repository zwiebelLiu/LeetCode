<?php
/*
 *1051. 高度检查器
 * */

function heightChecker($heights) {
    $alt_array=$heights;
    sort($heights);
        $n=0;
    for($i=0;$i<count($heights);$i++)
    {
        if($alt_array[$i]!=$heights[$i])
        {
            $n++;
        }
    }

    var_dump($n);
}


$heights = [1,1,4,2,1,3];
heightChecker($heights);
