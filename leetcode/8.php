<?php
/*
给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。

示例 1:

输入: 123
输出: 321
 示例 2:

输入: -123
输出: -321
示例 3:

输入: 120
输出: 21
注意:

假设我们的环境只能存储得下 32 位的有符号整数，则其数值范围为 [−231,  231 − 1]。请根据这个假设，如果反转后整数溢出那么就返回 0。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/reverse-integer
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

class Solution 
{
    /**
       *      * @param Integer $x
       *           * @return Integer
       *                */
    function reverse($x) {
        if (!is_int($x)) return false;

        $max = pow(2, 31) - 1;
        $min = pow(-2, 31);

        if ($x > -10 && $x < 10) return $x;

        $res = 0;

        while ($x != 0)
        {
            $remainder = $x % 10; //取余数  1 2 3
            $x = ($x - $remainder) / 10; //取得十位以上的  32 3 0
            $res = $res * 10 + $remainder; // 头和尾调换位置   1  12  123
        }

        if ($res < $min || $res > $max) return 0;

        return $res;
    }
}

$obj = new Solution();
echo $obj->reverse(-123);
?>
