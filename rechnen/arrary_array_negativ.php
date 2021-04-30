<?php
/*
 * Zählen Sie negative Zahlen in einer geordneten Matrix
 */

function countNegatives($grid) {
    $m=count($grid);
    $n=count($grid[0]);
    $anzahl=0;
    for($i=0;$i<$m;$i++)
    {
        for($k=0;$k<$n;$k++)
        {
            if($grid[$i][$k]<0)
            {
                $anzahl++;
            }
        }
    }
    return $anzahl;


}
