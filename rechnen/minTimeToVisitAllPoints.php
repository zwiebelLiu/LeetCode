<?php
/*
 * 1266. 访问所有点的最小时间
 *
 *平面上有 n 个点，点的位置用整数坐标表示 points[i] = [xi, yi] 。请你计算访问所有这些点需要的 最小时间（以秒为单位）。

你需要按照下面的规则在平面上移动：

每一秒内，你可以：
沿水平方向移动一个单位长度，或者
沿竖直方向移动一个单位长度，或者
跨过对角线移动 sqrt(2) 个单位长度（可以看作在一秒内向水平和竖直方向各移动一个单位长度）。
必须按照数组中出现的顺序来访问这些点。
在访问某个点时，可以经过该点后面出现的点，但经过的那些点不算作有效访问。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/minimum-time-visiting-all-points
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * */

function minTimeToVisitAllPoints($points) {
    $sum=0;
    for($i=0;$i<count($points)-1;$i++)
    {
       $a= abs($points[$i][0]-$points[$i+1][0]);
       $b= abs($points[$i][1]-$points[$i+1][1]);
       if($a>$b)
       {$sum=$sum+$a;}
       else
       {$sum=$sum+$b;}
    }
return $sum;
}

$points = [[1,1],[3,4],[-1,0]];
echo minTimeToVisitAllPoints($points);
