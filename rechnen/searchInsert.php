<?php
//35. 搜索插入位置

function searchInsert($nums, $target) {
    for($i=0;$i<count($nums);$i++)
    {
        if($target<=$nums[$i])
             return $i;
        else
        {
            if(isset($nums[$i+1] )&&($target>$nums[$i+1]))
            {
                continue;
            }
            else
            {
                return $i+1;
            }
        }
    }

}

$nums=[1,3,5,6];
$target=6;
echo searchInsert($nums,$target);
