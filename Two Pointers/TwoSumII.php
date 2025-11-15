<?php
class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $last = count($numbers) - 1;
        $start = 0;
        while($start < $last){
            if($numbers[$start] + $numbers[$last] == $target) return [$start+1, $last+1];
            if(($numbers[$last] + $numbers[$start]) > $target) $last--;
            else $start++;
        }
    }
}
$numbers = [2,7,11,15];
$target = 9;
var_dump(new Solution()->twoSum($numbers, $target));

$numbers = [2,3,4];
$target = 6;
var_dump(new Solution()->twoSum($numbers, $target));
