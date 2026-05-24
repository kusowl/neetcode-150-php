<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $len = count($nums);

        $k = $k % $len;

        if ($k == 0) {
            return $nums;
        }
        $this->reverse($nums, 0, $len - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, $len - 1);

        return $nums;
    }

    function reverse(&$nums, $start, $end){
        while($start < $end){
            $temp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $temp;

            $start++;
            $end--;
        }
    }
}
$nums = [-1];
var_dump(new Solution()->rotate($nums, 2));