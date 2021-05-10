<?php
/*
 *1122. 数组的相对排序
 * */
function relativeSortArray($arr1, $arr2) {
    $array_anzahl=array_count_values($arr1);
    $diff=array_diff($arr1,$arr2);
    sort($diff);
    $res=[];
    for($i=0;$i<count($arr2);$i++)
    {
        //array_merge($tmp3, array_fill(0, $tmp2[$value], $value));
      for($k=0;$k<$array_anzahl[$arr2[$i]];$k++)
      {
          array_push($res, $arr2[$i]);
      }
    }
    $result=array_merge($res,$diff);
   return $result;
}

$arr1 = [2,3,1,3,2,4,6,7,9,2,19];
$arr2 = [2,1,4,3,9,6];
relativeSortArray($arr1, $arr2);
