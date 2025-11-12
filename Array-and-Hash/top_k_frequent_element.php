<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $num_freq = [];
        foreach($nums as $num){
            if(!isset($num_freq[$num])){
                $num_freq[$num] = 0;
            }
            $num_freq[$num]++;
        }
        $result = [];
        for($i =0; $i < $k; $i++){
            $result[$i] = $k - $i;
        }
        foreach($num_freq as $num => $freq){
            foreach($result as $k => $v){
                if($freq > $num_freq[$v]){
                    $result[$k] = $num;
                }
            }
        }
        return $result;
    }
}
var_dump(new Solution()->topKFrequent([1,1,1,1,3,1,3,3,3,3,3,3,2,2,2,2], 2));