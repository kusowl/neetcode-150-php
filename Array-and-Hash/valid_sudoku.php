<?php

class Solution
{

    /**
     * @param  String[][]  $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        $rows = array_fill(0, 9, 0);
        $cols = array_fill(0, 9, 0);
        $squares = array_fill(0, 3, array_fill(0, 3, 0));

        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                if ($board[$i][$j] == '.') {
                    continue;
                }
                $num = $board[$i][$j];
                $mask = 1 << ((int)$num - 1); // Create a bitmask for the number

                // Check row
                if (($rows[$i] & $mask) != 0) {
                    return false;
                }
                $rows[$i] |= $mask;

                // Check column
                if (($cols[$j] & $mask) != 0) {
                    return false;
                }
                $cols[$j] |= $mask;

                // Check 3x3 subgrid
                $squareRow = (int)($i / 3);
                $squareCol = (int)($j / 3);
                if (($squares[$squareRow][$squareCol] & $mask) != 0) {
                    return false;
                }
                $squares[$squareRow][$squareCol] |= $mask;
            }
        }
        return true;
    }
}

$boards = [
    ["5", "3", ".", ".", "7", ".", ".", ".", "."]
    , ["6", ".", ".", "1", "9", "5", ".", ".", "."]
    , [".", "9", "8", ".", ".", ".", ".", "6", "."]
    , ["8", ".", ".", ".", "6", ".", ".", ".", "3"]
    , ["4", ".", ".", "8", ".", "3", ".", ".", "1"]
    , ["7", ".", ".", ".", "2", ".", ".", ".", "6"]
    , [".", "6", ".", ".", ".", ".", "2", "8", "."]
    , [".", ".", ".", "4", "1", "9", ".", ".", "5"]
    , [".", ".", ".", ".", "8", ".", ".", "7", "9"]
];
var_dump(new Solution()->isValidSudoku($boards));


$boards = [
    ["8", "3", ".", ".", "7", ".", ".", ".", "."]
    , ["6", ".", ".", "1", "9", "5", ".", ".", "."]
    , [".", "9", "8", ".", ".", ".", ".", "6", "."]
    , ["8", ".", ".", ".", "6", ".", ".", ".", "3"]
    , ["4", ".", ".", "8", ".", "3", ".", ".", "1"]
    , ["7", ".", ".", ".", "2", ".", ".", ".", "6"]
    , [".", "6", ".", ".", ".", ".", "2", "8", "."]
    , [".", ".", ".", "4", "1", "9", ".", ".", "5"]
    , [".", ".", ".", ".", "8", ".", ".", "7", "9"]
];
var_dump(new Solution()->isValidSudoku($boards));