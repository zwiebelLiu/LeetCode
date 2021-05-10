<?php
/*
 * 1078. Bigram 分词
 * */
function findOcurrences($text, $first, $second) {

    $text_array=explode(" ",$text);
    $res=[];
    for($i=0;$i<count($text_array);$i++)
    {
        if((isset($text_array[$i+1])==true)&&($text_array[$i]==$first)&&($text_array[$i+1]==$second))
        {
            if(isset($text_array[$i+1])==true && isset($text_array[$i+2])==true)
            {
                array_push($res,$text_array[$i+2]);
            }
         }
    }
    var_dump($res);
}

$text = "alice is a good girl she is a good student";
$first = "a";
$second = "good";
findOcurrences($text, $first, $second);

