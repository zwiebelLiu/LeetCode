<?php

/*599. 两个列表的最小索引总和

输入:
["Shogun", "Tapioca Express", "Burger King", "KFC"]
["Piatti", "The Grill at Torrey Pines", "Hungry Hunter Steakhouse", "Shogun"]
输出: ["Shogun"]

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/minimum-index-sum-of-two-lists
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * */
function findRestaurant($list1, $list2) {

    $result=array_diff($list1,$list2);
    $res=array_diff($list1,$result);
    $min_res[]=$res[0];
    return $min_res;


}
$list1=["Shogun", "Tapioca Express", "Burger King", "KFC"];
$list2=["KFC", "Shogun", "Burger King"];

print_r(findRestaurant($list1, $list2));
