<?php
//21. 合并两个有序链表
function mergeTwoLists($l1, $l2) {
    $new=array_merge($l1,$l2);
     sort($new);
   // print_r($new);
   // strpos
   print_r($new);
}
$l1 = [1,2,4];
$l2 = [1,3,4];
mergeTwoLists($l1,$l2);
