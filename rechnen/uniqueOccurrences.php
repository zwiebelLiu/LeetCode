<?php
/*
 *1207. 独一无二的出现次数
 * */
function uniqueOccurrences($arr) {
    $anzahl_arr=array_count_values($arr);
   //var_dump($anzahl_arr);
    $unique= array_unique($anzahl_arr);
   // var_dump($unique);
    if(count($anzahl_arr)==count($unique))
        return  true;
    else
        return  false;
}

$arr=[1,2,2,1,1,3,3];
uniqueOccurrences($arr);
