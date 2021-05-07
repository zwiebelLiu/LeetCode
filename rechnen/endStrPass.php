<?php
function solution($str, $ending) {
    // TODO: complete

    $ending_len=strlen($ending);
if($ending_len==0) return true;
    $get_ending_str=substr($str,-$ending_len);

    if( $get_ending_str==$ending)
        return true;
    else
        return false;

}

var_dump(solution('yes this will pass', ''));
