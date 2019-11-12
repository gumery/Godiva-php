<?php
/*给定 n 个非负整数 a1，a2，...，an，每个数代表坐标中的一个点 (i, ai) 。在坐标内画 n 条垂直线，垂直线 i 的两个端点分别为 (i, ai) 和 (i, 0)。找出其中的两条线，使得它们与 x 轴共同构成的容器可以容纳最多的水。

https://leetcode-cn.com/problems/container-with-most-water/
说明：你不能倾斜容器，且 n 的值至少为 2。
 */
class Solution {

    /**
     *      * @param Integer[] $height
     *           * @return Integer
     *                */
    function maxArea($height) {
        $r = count($height) - 1;
        $l = 0;
        $tmp = [];
        for ($i=$r; $i > 0; $i--) {
            //长度变化，每次
            $area = min($height[$l], $height[$r]) * $i;
            $tmp[] = $area;

            if ($height[$l] < $height[$r]) {
                $l++;
            } else {
                $r--;
            }
        }
        return max($tmp);
    }
}



$obj = new Solution();
echo $obj->maxArea([1,2,3,4,5,25,24,3,4]);
?>
