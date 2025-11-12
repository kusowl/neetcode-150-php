<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {
        $hashMap = [];
        foreach ($nums as $value){
            $hashMap[$value] = $value;
        }
        $longestLenght = 0;
       foreach ($hashMap as $value) {
        $lenght  = 1;
        if(!isset($hashMap[$value - 1])){
            for($i = 1; isset($hashMap[$value + $i]);$i++){
                $lenght++;
            }
            if($lenght > $longestLenght) $longestLenght = $lenght;
        }
       }
       return $longestLenght;
    }
}
$nums = [0,3,7,2,5,8,4,6,0,1];
var_dump(new Solution()->longestConsecutive($nums));
$nums = [1,0,1,2];
var_dump(new Solution()->longestConsecutive($nums));
$nums =[100,4,200,1,3,2];
var_dump(new Solution()->longestConsecutive($nums));
