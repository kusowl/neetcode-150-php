<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function setZeroes(&$matrix) {
        $zeros = $this->findZeros($matrix);

        
    }

    function findZeros($matrix){
        $cords = [];
        $rowLen = count($matrix);
        $colLen = count($matrix[0]);

        for($i = 0; $i < $rowLen; $i++){
            for($j = 0; $j <$colLen; $j++){
                if($matrix[$i][$j] == 0){
                    $cords[] = [$i, $j];
                }
            }
        }

        return $cords;
    }
}

$matrix = [[1,1,1],[1,0,1],[1,1,1]];
$solution = new Solution();
var_dump($solution->findZeros($matrix));