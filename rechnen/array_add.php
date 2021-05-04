<?php
class Leetcode
{
    //不是最优解
    function sum($nums, $target)
    {
        $ausgebn = [];
        foreach ($nums as $k => $v) {
            $find = $target - $nums[$k];//find value;
            unset($nums[$k]);
            $find_key = array_search("$find", $nums);
            if ($find_key > 0) {
                //array_push($ausgebn, $k, $find_key);
                return [$k, $find_key];
            }
        }
        //return 'NIO';
    }

    // best weg

    function twosum($nums,$target)
    {
        $finden=[];
        $lengt=count($nums);
        for($i=0;$i<$lengt;$i++)
        {
           $diff=$target-$nums[$i];
          // $findword=;
           if(array_key_exists($diff,$finden)) return [$finden[$diff],$i];
           $finden[$nums[$i]]=$i;
        }
    }
}
 $nums=[2,4,5,2];
 $target=4;
 $s=new Leetcode();
print_r($s->sum($nums,$target));
print_r($s->twosum($nums,$target));


 ?>
