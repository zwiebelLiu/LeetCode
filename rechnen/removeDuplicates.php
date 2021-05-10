<?php
/*
 *26. 删除有序数组中的重复项
 * */


function removeDuplicates(&$nums) {
    $nums = array_keys(array_flip($nums));
   // var_dump($nums);
    return count($nums);
}

$nums= [1,1,2];
removeDuplicates($nums);
