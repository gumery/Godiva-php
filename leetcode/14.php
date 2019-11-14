<?php
/*
编写一个函数来查找字符串数组中的最长公共前缀。

如果不存在公共前缀，返回空字符串 ""。

示例 1:

输入: ["flower","flow","flight"]
输出: "fl"
示例 2:

输入: ["dog","racecar","car"]
输出: ""
解释: 输入不存在公共前缀。
说明:

所有输入只包含小写字母 a-z 。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/longest-common-prefix
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

class Solution {

        /**
         *      * @param String[] $strs
         *           * @return String
         *                */
    function longestCommonPrefix($strs) {
        $arr = [];
        foreach ($strs as $key => $str) {
            $tmp[] = strlen($str);
        }

        foreach ($strs as $key => $str) {
            for ($i = 0; $i < min($tmp); $i++) {
                $arr[$i][] = $strs[$key][$i];
            }
        }

        $tmpStr = '';
        foreach ($arr as $key => $value) {
            $count = count(array_unique($value));
            if ($count != 1) break;
            $tmpStr .= $value[0];
        }

        return $tmpStr;
    }

    function commonPrefix($strs) {
        $prefix = '';
        $i = 0;
        if(count($strs)<1){
            return $prefix;

        }
        while(true){
            $current = $strs[0]{$i};
            if(!$current){
                return $prefix;
            }
            foreach($strs as $str){
                if($str{$i} != $current){
                    return $prefix;
                }
            }
            $prefix .= $current;
            $i++;
        }
        return $prefix;
    }

    function prifix($strs)
    {
        $prefix = '';
        if (count($strs) < 1) {
            return $prefix;
        }

        $i = 0;
        while (true) {
            $tmp = $strs[0][$i];
            if (!$tmp) return $prefix;

            foreach ($strs as $str) {
                if ($tmp != $str[$i]) return $prefix;
            }

            $prefix .= $tmp;
            $i++;
        }

        return $prefix;
    }
}

$obj = new Solution();
echo $obj->longestCommonPrefix(["dog","racecar","car"]);
?>
