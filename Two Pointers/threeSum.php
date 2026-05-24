<?php
class Solution
{
    /**
     * @param int[] $nums
     * @return int[][]
     */
    function threeSum($nums): array
    {
        $result = [];
        $len = count($nums);

        sort($nums);
        for ($i = 0; $i < $len - 2; $i++) {
            // Skip duplicate values for the first element ($i)
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }

            $start = $i + 1;
            $end = $len - 1;

            while ($start < $end) {
                $sum = $nums[$start] + $nums[$end] + $nums[$i];

                if ($sum === 0) {
                    $result[] = [$nums[$i], $nums[$start], $nums[$end]];

                    // skip duplicate elemets
                    while ($start < $end && $nums[$start] === $nums[$start + 1]) {
                        $start++;
                    }

                    while ($start < $end && $nums[$end] === $nums[$end - 1]) {
                        $end--;
                    }

                    $start++;
                    $end--;
                } elseif ($sum > 0) {
                    $end--;
                } else {
                    $start++;
                }
            }
        }
        return $result;
    }
}

// $nums = [-1,0,1,2,-1,-4];
// var_dump(new Solution()->threeSum($nums));

$nums = [-1, 0, 1, 0];
var_dump(new Solution()->threeSum($nums));
