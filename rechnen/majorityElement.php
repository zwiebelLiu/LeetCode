<?php
/*
 *面试题 17.10. 主要元素
 * 数组中占比超过一半的元素称之为主要元素。给定一个整数数组，找到它的主要元素。若没有，返回-1
 * */
function majorityElement($nums) {
    $anzahl_je_val=array_count_values($nums);
    $res=[];
     foreach ($anzahl_je_val as $k=>$v)
     {
         $prozent= $v/count($nums);
        if($v==max($anzahl_je_val) &&($prozent>0.5))
         {
               array_push($res,$k);
         }
     }
    return count($res)>1||empty($res)==true? -1 :$res[0];
}

$nums=[1,2,3];
echo majorityElement($nums);

