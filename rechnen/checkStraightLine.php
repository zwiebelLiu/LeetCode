<?php
/*
 *1232. 缀点成线
 * */

function checkStraightLine($coordinates) {
    $len_n = count($coordinates);
    if ($len_n == 2) {
        return true;
    }
    $y = $coordinates[1][1] - $coordinates[0][1];
    $x = $coordinates[1][0] - $coordinates[0][0];
    for ($i = 2; $i < $len_n; $i++) {
        if (($coordinates[$i][1] - $coordinates[0][1]) * $x != ($coordinates[$i][0] - $coordinates[0][0]) * $y) {
            return false;
        }
    }

    return true;
}


//echo checkStraightLine($coordinates);
