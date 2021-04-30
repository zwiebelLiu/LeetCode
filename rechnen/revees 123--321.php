<?php
function reverse($x) {
    $anzeig= $n='';

    if ($x==0) {
        return 0;
    }
    if($x<0 )
    {
        $x=abs($x);
        $anzeig='-';
    }
    while($x!=0)
    {
        $n=$n.$x%10;
        $x=intval($x/10);
    }

    if (intval($anzeig.$n) > (pow(2,31)-1) ||intval($anzeig.$n) < pow(-2,31))
    {
        return 0;
    }

    return intval($anzeig.$n);
}

/*
 * 超级解法
 *  $max = pow(2, 31);
        $s = intval(strrev(abs($x)));
        return $x>=0?($s+1>$max?0:$s):($s>$max?0:'-'.$s);

作者：fei-rou-bing
链接：https://leetcode-cn.com/problems/reverse-integer/solution/7-zheng-shu-fan-zhuan-php-3xing-dai-ma-gao-ding-ch/
来源：力扣（LeetCode）
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
 * */
