<?php
/*1103. 分糖果 II
 * */


function distributeCandies($candies, $num_people) {
    $res=[];
    $res_candi=$candies;
    for($i=0;$i<$res_candi;$i++)
    {
        for($k=0;$k<$num_people;$k++)
        {
            $res[$k] +=$i;
            //$res_candi=$candies-array_sum($res);
        }
      //  $k=0;
    }
    var_dump($res);
}
$candies = 7;
$num_people = 4;
distributeCandies($candies,$num_people);
