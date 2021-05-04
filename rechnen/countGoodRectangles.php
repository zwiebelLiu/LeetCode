<?php
/*1725. 可以形成最大正方形的矩形数目
给你一个数组 rectangles ，其中 rectangles[i] = [li, wi] 表示第 i 个矩形的长度为 li 、宽度为 wi 。

如果存在 k 同时满足 k <= li 和 k <= wi ，就可以将第 i 个矩形切成边长为 k 的正方形。例如，矩形 [4,6] 可以切成边长最大为 4 的正方形。

设 maxLen 为可以从矩形数组 rectangles 切分得到的 最大正方形 的边长。

请你统计有多少个矩形能够切出边长为 maxLen 的正方形，并返回矩形 数目 。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/number-of-rectangles-that-can-form-the-largest-square
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 *
 * */

function countGoodRectangles($rectangles) {
    $res=[];
    for($i=0;$i<count($rectangles);$i++)
    {
         $v=min($rectangles[$i][0],$rectangles[$i][1]);
          array_push($res,$v);
     }
      $new= array_count_values($res);
      $max=0;
      foreach ($new as $k=>$v)
      {
          if($k>$max)
          {
              $max=$k;
          }
      }
     return $new[$max];

}

$rectangles = [[5,8],[3,9],[3,12]];
echo countGoodRectangles($rectangles);


function super_countGoodRectangles($rectangles) {
    $max=0;
    $cnt=0;
    foreach ($rectangles as $item){
        $v=min($item[0],$item[1]);
        if($v>$max){
            $max=$v;
            $cnt=1;
        }elseif ($v===$max){
            $cnt++;
        }
    }
    return $cnt;
}
