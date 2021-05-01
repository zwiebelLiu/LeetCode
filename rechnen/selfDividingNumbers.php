<?php

/**
 * @param Integer $left
 * @param Integer $right
 * @return Integer[]
 */
function selfDividingNumbers($left, $right) {

    $ok=[];
    for($k=0,$i=$left;$i<=$right,$k<$right-$left+1;$i++,$k++)
    {
        $ok[$k]=$i;
        $newStr=str_split(strval($i));
            for($n=0;$n<count($newStr);$n++)
            {
                if($newStr[$n]==0 ||$i%$newStr[$n]!=0 )
                {
                    unset($ok[$k]);
                }
            }
        }
    return $ok;
}

selfDividingNumbers(11,15);
