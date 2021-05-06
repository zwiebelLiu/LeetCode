<?php
/*551. 学生出勤记录 I
给定一个字符串来代表一个学生的出勤记录，这个记录仅包含以下三个字符：

'A' : Absent，缺勤
'L' : Late，迟到
'P' : Present，到场
如果一个学生的出勤记录中不超过一个'A'(缺勤)并且不超过两个连续的'L'(迟到),那么这个学生会被奖赏。
这道题有两种情况会导致失败，一种是A出现了一次以上，二是L连续出现三次以上。其它的都可以领取奖励。

代码
你需要根据这个学生的出勤记录判断他是否会被奖赏。

        $preg="/A/";
        $preg2="/(LLL)/";
       if( preg_match_all($preg,$s)>1||preg_match($preg2,$s)){
           return false;
       }
       return true;

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/student-attendance-record-i
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * */
function checkRecord($s) {

    $sum_A=substr_count($s,'A');
    $sum_L=strpos($s,'LLL');
    if($sum_L!==false || $sum_A>1)
    {
        return false;
    }
    return true;

}
$s="LLLL"; //False
$S="PPALLP";//True
var_dump(checkRecord($s));
