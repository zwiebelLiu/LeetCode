<?php
/*
 *349. 两个数组的交集
 * */

function intersection($nums1, $nums2) {
        $diff=array_diff(array_unique($nums1),array_unique($nums2));
        $diff2=array_diff(array_unique($nums2),array_unique($nums1));
        print_r($diff);
        print_r($diff2);
        $res=array_diff(array_unique($nums1),array_unique($diff));
        $res2=array_diff(array_unique($nums2),array_unique($diff2));
        print_r($res);
         print_r($res2);
        return $res;
}

$nums1 = [4,9,5];
$nums2 = [9,4,9,8,4];
intersection($nums1, $nums2);
//var_dump(in);
//return array_values(array_unique(array_intersect($nums2,$nums1)));
