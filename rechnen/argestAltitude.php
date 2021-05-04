<?php
/*1732. 找到最高海拔*/

function largestAltitude($gain) {
    $res=[0,$gain[0]];
    for ($i=1;$i<count($gain);$i++)
    {
        $sum_res=$res[$i]+$gain[$i];
        array_push($res,$sum_res);
    }
    return max($res);

}

$gain = [-5,1,5,0,-7];
echo largestAltitude($gain);
