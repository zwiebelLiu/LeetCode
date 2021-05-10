<?php
/*168. Excel表列名称
 * */
function convertToTitle($columnNumber) {
    $teil1=floor($columnNumber/26);
    $teil2=$columnNumber%26;

    //echo $teil1.'--'.$teil2;
    if($teil1==0)
        return chr($teil2+64);
    else

    return chr($teil1+64).chr($teil2+64);

}

$columnNumber=701;
convertToTitle($columnNumber);
