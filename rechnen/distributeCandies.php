<?php
/*
 *575. 分糖果
 *给定一个偶数长度的数组，其中不同的数字代表着不同种类的糖果，每一个数字代表一个糖果。你需要把这些糖果平均分给一个弟弟和一个妹妹。返回妹妹可以获得的最大糖果的种类数。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/distribute-candies
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * */
function distributeCandies($candyType) {
        $anzahl=count($candyType)/2;
      //  5
        $uniqCandy=count(array_unique($candyType));
        //3
    $output = $anzahl>$uniqCandy  ?  $uniqCandy:$anzahl;
            return $output;


}
$candies = [6,6,6,6];

echo distributeCandies($candies);
