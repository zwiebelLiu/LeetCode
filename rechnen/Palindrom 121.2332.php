<?php
function isPalindrome($x) {
    if($x<0)
        return false;
    $new=intval(strrev(strval($x)));
    if($x===$new)
    {
        return true;
    }
    return  false;
}
isPalindrome(10);
