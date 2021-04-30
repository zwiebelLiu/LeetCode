<?php
function daysBetweenDates($date1, $date2) {
    $unix1=strtotime($date1);
    $unix2=strtotime($date2);
    $day=($unix2-$unix1)/60/60/24;
    return abs($day);

}
