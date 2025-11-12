<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $hash_map = [];
        foreach($strs as $str){
            $count = array_fill(0, 26, 0);
            foreach(str_split($str) as $char){
                $count[ord($char) - ord('a')]++;
            }

            $key = implode(',', $count);
            if(!isset($hash_map[$key])){
                $hash_map[$key] = [];
            }
            $hash_map[$key][] = $str;
        }

        return array_values($hash_map);
    }
}

$strs = ["eat","tea","tan","ate","nat","bat"];
var_dump(new Solution()->groupAnagrams($strs));