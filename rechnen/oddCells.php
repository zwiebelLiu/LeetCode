<?php
/*
 * 1252. 奇数值单元格的数目
 *给你一个 m x n 的矩阵，最开始的时候，每个单元格中的值都是 0。

另有一个二维索引数组 indices，indices[i] = [ri, ci] 指向矩阵中的某个位置，其中 ri 和 ci 分别表示指定的行和列（从 0 开始编号）。

对 indices[i] 所指向的每个位置，应同时执行下述增量操作：

ri 行上的所有单元格，加 1 。
ci 列上的所有单元格，加 1 。
给你 m、n 和 indices 。请你在执行完所有 indices 指定的增量操作后，返回矩阵中 奇数值单元格 的数目。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/cells-with-odd-values-in-a-matrix
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * */
function oddCells($m, $n, $indices) {
  //  $arr=[];
    $anzahl=0;
    for($i=0;$i<$m;$i++)
    {
        for($k=0;$k<$n;$k++)
        {
            $arr[$i][$k]=0;
            for($a=0;$a<count($indices);$a++)
            {
                $r= $indices[$a][0];
                $c= $indices[$a][1];
                if($r==$i)
                {
                    $arr[$i][$k]++;
                }
                if($c==$k)
                {
                    $arr[$i][$k]++;
                }
            }
            if($arr[$i][$k]%2!=0)
                $anzahl++;
        }
    }
    return $anzahl;
}



$m = 2;
$n = 2;
$indices = [[1,1],[0,0]];
echo oddCells($m,$n,$indices);

/*
 *
 * 最终判断奇数个数时不需要知道各个单元格的值，只需要知道所在的行、列操作次数是否为奇数次。

分别定义rows、rows、cols两个数组变量，记录各行、各列的操作次数的奇偶性，奇数记为1，偶数记为0。

rows=1,cols=0的乘积 + rows=0,cols=1的乘积 = 奇数单元格的个数


    function oddCells($n, $m, $indices)
    {
        $rows = $cols = [];
        foreach ($indices as $opt) {
            $rows[$opt[0]] = !($rows[$opt[0]] ?? 0);
            $cols[$opt[1]] = !($cols[$opt[1]] ?? 0);
        }
        $sum_row = array_sum($rows);
        $sum_col = array_sum($cols);

        return $sum_col * ($n - $sum_row) + $sum_row * ($m - $sum_col);
    }

作者：lupin86
链接：https://leetcode-cn.com/problems/cells-with-odd-values-in-a-matrix/solution/li-yong-qi-ou-xing-8xing-dai-ma-qiu-jie-by-lupin86/
来源：力扣（LeetCode）
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。*/
