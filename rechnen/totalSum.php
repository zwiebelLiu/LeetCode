<?php
/*Hercy 想要为购买第一辆车存钱。他 每天 都往力扣银行里存钱。

最开始，他在周一的时候存入 1 块钱。从周二到周日，他每天都比前一天多存入 1 块钱。在接下来每一个周一，他都会比 前一个周一 多存入 1 块钱。

给你 n ，请你返回在第 n 天结束的时候他在力扣银行总共存了多少块钱。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/calculate-money-in-leetcode-bank
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * */
function totalMoney($n) {
    $jedenTag=[];
    for ($i=1;$i<$n+1;$i++)
    {
       $teil1=floor($i/7);
       $teil2=$i%7;
       if($teil2==0)
       {
           $teil2=6;
       }
       array_push($jedenTag,$teil1+$teil2);
    }
   return array_sum($jedenTag);
}
$n=10;
echo totalMoney($n);
