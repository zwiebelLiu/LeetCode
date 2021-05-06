<?php
/*1260
给你一个 m 行 n 列的二维网格 grid 和一个整数 k。你需要将 grid 迁移 k 次。

每次「迁移」操作将会引发下述活动：

位于 grid[i][j] 的元素将会移动到 grid[i][j + 1]。
位于 grid[i][n - 1] 的元素将会移动到 grid[i + 1][0]。
位于 grid[m - 1][n - 1] 的元素将会移动到 grid[0][0]。
请你返回 k 次迁移操作后最终得到的 二维网格

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/shift-2d-grid
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
*/


function shiftGrid($grid, $k) {
    $new_grid=[];
    $rows_grid=count($grid[0]);

    for($i=0;$i<count($grid);$i++)
    {
        for($b=0;$b<$rows_grid;$b++)
        {
            array_push($new_grid,$grid[$i][$b]);
        }
    }
    $anzahl=count($new_grid);
    $res_grid=[];

    $k=$k%$anzahl;

    for($i=0;$i<$anzahl;$i++)
    {
       if($i+$k>=$anzahl)
       {
           $res_grid[$i+$k-$anzahl]=$new_grid[$i];
       }
        else
        {
            $res_grid[$i+$k]=$new_grid[$i];
        }
    }
    ksort($res_grid);
   return  array_chunk($res_grid,$rows_grid);

}
$grid = [[1,2,3],[4,5,6],[7,8,9]];
$k = 10;
print_r( shiftGrid($grid,$k));
